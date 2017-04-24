import { NgModule } from '@angular/core';
import {ProductsComponent} from "../components/products/products.component";
import {ProductsService} from "../services/products/products.service";
import {RouterModule} from "@angular/router";
import { CommonModule } from '@angular/common';
import {KeysPipe} from "../pipes/keys.pipe";
import {NgbModule} from "@ng-bootstrap/ng-bootstrap";

@NgModule({
  declarations: [
      ProductsComponent,
      KeysPipe
  ],
  providers: [
    ProductsService
  ],
  imports: [
    CommonModule,
    NgbModule,
    RouterModule.forChild([
      {
        path: '',
        component: ProductsComponent,
        pathMatch: 'full'
      }
    ])
  ],
})
export class ProductsModule { }
