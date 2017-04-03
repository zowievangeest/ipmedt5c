import { Component, OnInit } from '@angular/core';
import {ProductsService} from "../../services/products/products.service";

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.scss']
})
export class ProductsComponent implements OnInit {

  public products: any;

  constructor(private productService: ProductsService) { }

  ngOnInit() {
    this.productService.getProducts().subscribe(
        (res: any) => {
          this.products = res;
        }
    )
  }

}
