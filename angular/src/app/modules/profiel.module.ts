import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {ProfielComponent} from "../components/profiel/profiel.component";
import {RouterModule} from "@angular/router";

@NgModule({
  declarations: [
    ProfielComponent
  ],
  providers: [
  ],
  imports: [
    CommonModule,
    RouterModule.forChild([
      {
        path: '',
        component: ProfielComponent,
        pathMatch: 'full'
      }
    ])
  ]
})
export class ProfielModule { }
