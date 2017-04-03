import { NgModule } from '@angular/core';
import {ProductsComponent} from "../components/products/products.component";
import {ProductsService} from "../services/products/products.service";
import {RouterModule} from "@angular/router";
import { CommonModule } from '@angular/common';
import {KeysPipe} from "../pipes/keys.pipe";

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
