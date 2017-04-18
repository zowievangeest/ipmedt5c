import {Component, OnInit, ViewContainerRef} from '@angular/core';
import {ProductsService} from "../../services/products/products.service";
import {DomSanitizer} from "@angular/platform-browser";
import {PusherService} from "../../services/pusher/pusher.service";
import {ToastsManager} from "ng2-toastr";
import {pusher} from "../../interfaces/pusher.interface";
import {ActivatedRoute, Params} from "@angular/router";

@Component({
  selector: 'app-video',
  templateUrl: './video.component.html',
  styleUrls: ['./video.component.scss']
})
export class VideoComponent implements OnInit {

  // variables
  public products: any;
  private uuid: string;

  constructor(private productService: ProductsService,
              private domSanitizer : DomSanitizer,
              private activatedRoute: ActivatedRoute) {
  }

  // angular init
  ngOnInit() {
    // parameters opvangen van uid
    this.activatedRoute.params.subscribe((params: Params) => {
      this.uuid = params['uuid'];
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
    return this.domSanitizer.bypassSecurityTrustResourceUrl(`${this.products['game']['video']['url']}?autoplay=1`);
  }

}
