import { Component, OnInit } from '@angular/core';
import {ProductsService} from "../../services/products/products.service";
import {DomSanitizer} from "@angular/platform-browser";

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  public products: any;

  constructor(private productService: ProductsService,
              private domSanitizer : DomSanitizer) { }

  ngOnInit() {
    this.productService.getProducts().subscribe(
        (res: any) => {
          this.products = res;
        }
    );
  }

  public videoUrl() {
    // TODO:: Change autplay
    return this.domSanitizer.bypassSecurityTrustResourceUrl(this.products[0]['game']['video']['url']+'?autoplay=1');
  }

}
