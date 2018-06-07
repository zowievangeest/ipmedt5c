import {Component, OnInit, ViewContainerRef} from '@angular/core';
import {ProductsService} from "../../services/products/products.service";
import {DomSanitizer} from "@angular/platform-browser";
import {ActivatedRoute, Params} from "@angular/router";

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  // variables
  public products: any;
  private uuid: string;



  // constructor
  constructor(private productService: ProductsService,
              private domSanitizer : DomSanitizer,
              private activatedRoute: ActivatedRoute) {
  }

  // init functie
  ngOnInit() {

    // uid meegeven indien actieve route
    this.activatedRoute.params.subscribe((params: Params) => {
      this.uuid = params['uuid'];
    });

    // scan game
    this.scanGamePusher();
  }

  // scan game redirect
  private scanGamePusher(): void {
    if (this.uuid) {
      // suscriben aan een product die gescant is
      this.productService.getProductByUid(this.uuid).subscribe(
          (res: any) => {
            this.products = res;
          });
    }
  }

  // video url ophalen
  public videoUrl() {
    // returnen van gewhiteliste dmv bypass seceruity
    return this.domSanitizer.bypassSecurityTrustResourceUrl(`${this.products['game']['video']['url']}?autoplay=1`);
  }

}
