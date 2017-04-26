import {Component, OnInit, ViewContainerRef} from '@angular/core';
import {ProductsService} from "../../services/products/products.service";
import {DomSanitizer} from "@angular/platform-browser";
import {ActivatedRoute, Params} from "@angular/router";
import {Idle, DEFAULT_INTERRUPTSOURCES} from '@ng-idle/core';
import {Keepalive} from '@ng-idle/keepalive';
import {LoginGuard} from "../../guards/login.guard";
import {LoginService} from "../../services/login/login.service";

@Component({
  selector: 'app-video',
  templateUrl: './video.component.html',
  styleUrls: ['./video.component.scss']
})
export class VideoComponent implements OnInit {

  // variables
  public products: any;
  private uuid: string;
  public idleState = 'Not started.';
  public timedOut = false;
  public lastPing?: Date = null;

  constructor(private productService: ProductsService,
              private domSanitizer : DomSanitizer,
              private activatedRoute: ActivatedRoute,
              private idle: Idle,
              private keepalive: Keepalive,
              private loginService: LoginService,
              private loginGuard: LoginGuard) {
    // sets an idle timeout of 5 seconds, for testing purposes.
    this.idle.setIdle(360);
    // sets a timeout period of 5 seconds. after 10 seconds of inactivity, the user will be considered timed out.
    this.idle.setTimeout(0);

    this.idle.onIdleStart.subscribe(() => {
      this.loginGuard.redirect('/');
    });

    // sets the ping interval to 15 seconds
    this.keepalive.interval(360);

    this.keepalive.onPing.subscribe(() => this.lastPing = new Date());

    this.reset();
  }

  // angular init
  ngOnInit() {

    // parameters opvangen van uid
    this.activatedRoute.params.subscribe((params: Params) => {
      this.uuid = params['uuid'];
      this.scanGamePusher();
    });

    // functie scangamepusher uitvoerne on init
    this.scanGamePusher();
  }

  // game scannen
  private scanGamePusher(): void {
    // kijken of het uuid beschikbaar is
    if (this.uuid) {
      // product ophalen bij uuid
      this.productService.getProductByUid(this.uuid).subscribe(
          (res: any) => {
            // return van producten
            this.products = res;
          });
    }
  }

  public videoUrl() {
    // secrutiy bypassen voor youtube url - whitelisted url
    const videourl = this.products['game']['video']['url'];
    videourl.replace('watch?v=', 'embed/');

    console.log(videourl);

    return this.domSanitizer.bypassSecurityTrustResourceUrl(videourl + '?rel=0&amp;controls=0&amp;showinfo=0&autoplay=1');
  }

  public reset() {
    this.idle.watch();
    this.idleState = 'Started.';
    this.timedOut = false;
  }

}
