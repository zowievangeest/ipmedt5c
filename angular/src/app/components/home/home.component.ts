import {Component, OnInit, ViewContainerRef} from '@angular/core';
import {ProductsService} from "../../services/products/products.service";
import {DomSanitizer} from "@angular/platform-browser";
import {PusherService} from "../../services/pusher/pusher.service";
import {ToastsManager} from "ng2-toastr";
import {pusher} from "../../interfaces/pusher.interface";

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  public products: any;
  private scangame: PusherService;

  constructor(private productService: ProductsService,
              private domSanitizer : DomSanitizer,
              private toastsManager: ToastsManager,
              private viewContainerRef: ViewContainerRef) {
    this.toastsManager.setRootViewContainerRef(viewContainerRef);
  }

  ngOnInit() {

    this.scanGamePusher();
  }

  private scanGamePusher(): void {
    this.scangame = new PusherService('scan-game', 'game.scanned');

    this.scangame.messages.subscribe((data: any | pusher) => {
      if (typeof (data.size) === 'undefined') {

        let message: string = `Het UID is ${data.uid}`;

        this.toastsManager.success(message, null, {
          toastLife: 10000
        });

        this.productService.getProductByUid(data.uid).subscribe(
            (res: any) => {
              this.products = res;
            }
        );
      }
    });
  }





  public videoUrl() {
    // TODO:: Change autplay
    return this.domSanitizer.bypassSecurityTrustResourceUrl(this.products['game']['video']['url']+'?autoplay=1');
  }

}
