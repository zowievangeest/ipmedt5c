import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {DashboardComponent} from "../components/dashboard/dashboard.component";
import {RouterModule} from "@angular/router";

@NgModule({
  declarations: [
      DashboardComponent
  ],
  providers: [],
  imports: [
    CommonModule,
    RouterModule.forChild([
      {
        path: '',
        component: DashboardComponent,
        pathMatch: 'full'
      }
    ])
  ],
})
export class DashboardModule { }
