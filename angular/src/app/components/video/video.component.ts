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

  public products: any;
  private uuid: string;

  constructor(private productService: ProductsService,
              private domSanitizer : DomSanitizer,
              private activatedRoute: ActivatedRoute) {
  }

  ngOnInit() {
    this.activatedRoute.params.subscribe((params: Params) => {
      this.uuid = params['uuid'];
    });

    this.scanGamePusher();
  }

  private scanGamePusher(): void {
    if (this.uuid) {
      this.productService.getProductByUid(this.uuid).subscribe(
          (res: any) => {
            this.products = res;
          });
    }
  }

  public videoUrl() {
    return this.domSanitizer.bypassSecurityTrustResourceUrl(`${this.products['game']['video']['url']}?autoplay=1`);
  }

}
