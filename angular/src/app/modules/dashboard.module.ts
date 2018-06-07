import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {DashboardComponent} from "../components/dashboard/dashboard.component";
import {RouterModule} from "@angular/router";
import {ChartsModule} from "ng2-charts";
import {StatisticsService} from "../services/statistics/statistics.service";
import { CountoModule }  from 'angular2-counto';

@NgModule({
  declarations: [
      DashboardComponent
  ],
  providers: [
      StatisticsService
  ],
  imports: [
    CommonModule,
    ChartsModule,
    CountoModule,
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
