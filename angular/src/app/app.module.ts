import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';
import { HttpModule } from '@angular/http';

import {RoutingModule} from "./modules/routing.module";

import { AppComponent } from './app/app.component';
import { LoginComponent } from './login/login.component';
import {RouterModule} from "@angular/router";


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
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
