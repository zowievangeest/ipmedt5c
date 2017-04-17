import { Component, OnInit } from '@angular/core';
import {ProductsService} from "../../services/products/products.service";
declare const swal: any;

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

  public ontkoppel(event): void {
    if ((event.target).value){
      this.productService.removeProductUid((event.target).value).subscribe(
          (res) => {
            this.productService.getProducts().subscribe(
                (res: any) => {
                  this.products = res;
                }
            )
          }
      );
    }
  }

}
