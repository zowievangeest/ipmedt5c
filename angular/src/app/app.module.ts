import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';
import { HttpModule } from '@angular/http';

import {RoutingModule} from "./modules/routing.module";

import { AppComponent } from './app/app.component';
import { LoginComponent } from './login/login.component';
import {RouterModule} from "@angular/router";

import {LoginService} from "./services/login/login.service";
import {LoginGuard} from "./guards/login.guard";


@NgModule({
  declarations: [
    AppComponent,
    LoginComponent
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
    LoginGuard
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
