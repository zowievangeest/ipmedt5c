import {Component, OnInit} from '@angular/core';
import {ProductsService} from "../../services/products/products.service";
declare const swal: any;

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.scss']
})
export class ProductsComponent implements OnInit {

  // variables
  public products: any;

  public file: Array<File>;

  // constructor
  constructor(private productService: ProductsService,) {
  }

  // angular init
  ngOnInit() {
    // product service gebruiken voor ophalen alle prodiucten
    this.productService.getProducts().subscribe(
        (res: any) => {
          this.products = res;
        }
    )
  }

  // ontkoppel functie voor het ontkoppelen van de producten
  public ontkoppel(event): void {
    // kijken of de target een value heeft
    if ((event.target).value) {
      // verwijderen uidd
      this.productService.removeProductUid((event.target).value).subscribe(
          (res) => {
            // opnieuw laden producten
            this.productService.getProducts().subscribe(
                (res: any) => {
                  this.products = res;
                }
            )
          }
      );
    }
  }

  public upload(): void {
    if (this.file) {
      const formData = new FormData();

      formData.append('file', this.file[0], this.file[0].name);

      this.productService.uploadFile(formData).subscribe(
          (res: any) => {
            console.log(res);
          }
      )
    }
  }

  public fileChangeEvent(event) {
    this.file = event.target.files;
  }

}
