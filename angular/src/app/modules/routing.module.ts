import {Routes, RouterModule} from "@angular/router";
import {NgModule} from "@angular/core";

import {IdlePreload, IdlePreloadModule} from "./idle.preload.module";

import {LoginComponent} from "../components/login/login.component";

import {LoginGuard} from "../guards/login.guard";
import {HomeComponent} from "../components/home/home.component";

const routes: Routes = [
  {
    path: '',
    component: HomeComponent,
    pathMatch: 'full',
    canActivate: [
      LoginGuard
    ]
  },
  {
    path: 'login',
    component: LoginComponent
  },
  {
    path: 'product',
    loadChildren: './products.module#ProductsModule',
    canActivate: [
      LoginGuard
    ]
  },
  {
    path: 'profiel',
    loadChildren: './profiel.module#ProfielModule',
    canActivate: [
      LoginGuard
    ]
  },
  {
    path: 'dashboard',
    loadChildren: './dashboard.module#DashboardModule',
    canActivate: [
      LoginGuard
    ]
  }
];

@NgModule({
  imports: [
    IdlePreloadModule.forRoot(),
    RouterModule.forRoot(routes, {
      preloadingStrategy: IdlePreload
    })
  ]
})

export class RoutingModule {
}