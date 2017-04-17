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
  private tag_id: string;
  private product_id: number;

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
          },
          () => {
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
