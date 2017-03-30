import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';
import { HttpModule } from '@angular/http';

import {RouterModule} from "@angular/router";
import {RoutingModule} from "./modules/routing.module";

import { AppComponent } from './components/app/app.component';
import { LoginComponent } from './components/login/login.component';

import {LoginService} from "./services/login/login.service";
import {LoginGuard} from "./guards/login.guard";
import { MenuComponent } from './components/menu/menu.component';
import { HeaderComponent } from './components/header/header.component';

import { SweetAlertService } from 'ng2-sweetalert2';
import { HomeComponent } from './components/home/home.component';
import {ProductsService} from "./services/products/products.service";


@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    MenuComponent,
    HeaderComponent,
    HomeComponent,
  ],
  imports: [
    RoutingModule,
    RouterModule,
    BrowserModule,
    FormsModule,
    ReactiveFormsModule,
    HttpModule
  ],
  providers: [
    LoginService,
    LoginGuard,
    SweetAlertService,
    ProductsService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
