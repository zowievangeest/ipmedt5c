import {Component, OnInit} from '@angular/core';
import {ProductsService} from "../../services/products/products.service";
import {NgbModal} from "@ng-bootstrap/ng-bootstrap";
import {PusherService} from "../../services/pusher/pusher.service";
import {pusher} from "../../interfaces/pusher.interface";
declare const swal: any;

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.scss']
})
export class ProductsComponent implements OnInit {

  // variables
  public products: any;
  public product_id: number;
  public uid: string;

  public new_game: PusherService;

  public file: Array<File>;

  // constructor
  constructor(private productService: ProductsService,
              private modalService : NgbModal) {
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

  public upload(): void {
    if (this.file) {
      const formData = new FormData();

      formData.append('import_file', this.file[0], this.file[0].name);

      this.productService.uploadFile(formData).subscribe(
          (res: any) => {
            this.productService.getProducts().subscribe(
                (res: any) => {
                  this.products = res;
                }
            )
          }
      )
    }
  }

  public fileChangeEvent(event): void {
    this.file = event.target.files;
  }

  public open(content, event): void {
    this.product_id = (event.target).value;

    this.new_game = new PusherService('new-scan-game', 'new.game.scanned');

    this.new_game.messages.subscribe((data: any | pusher) =>{
      if (typeof (data.size) === 'undefined') {
        this.uid = data.uid;
      }
    });

    this.modalService.open(content);
  }

  // koppel functie voor het koppelen van de producten
  public koppel(productId, uid): void {
      // toevoegen uid
      this.productService.addProductUid(productId, uid).subscribe(
          (res) => {
            // opnieuw laden producten
            this.productService.getProducts().subscribe(
                (res: any) => {
                  this.products = res;
                  this.product_id = 0;
                  this.uid = "";
                  document.getElementById("close-modal").click();
                }
            )
          }
      );
  }

}
