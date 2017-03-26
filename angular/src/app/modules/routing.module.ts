import {Routes, RouterModule} from "@angular/router";
import {NgModule} from "@angular/core";

import {IdlePreload, IdlePreloadModule} from "./idle.preload.module";

import {LoginComponent} from "../components/login/login.component";

import {LoginGuard} from "../guards/login.guard";

const routes: Routes = [
  // {
  //     path: '',
  //     pathMatch: 'full'
  // },
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