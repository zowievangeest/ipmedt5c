import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {DashboardComponent} from "../components/dashboard/dashboard.component";
import {RouterModule} from "@angular/router";
import {ChartsModule} from "ng2-charts";

@NgModule({
  declarations: [
      DashboardComponent
  ],
  providers: [],
  imports: [
    CommonModule,
    ChartsModule,
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
