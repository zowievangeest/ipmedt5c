import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';
import { HttpModule } from '@angular/http';

import {RouterModule} from "@angular/router";
import {RoutingModule} from "./modules/routing.module";
import {ToastModule} from "ng2-toastr";
import {BrowserAnimationsModule} from "@angular/platform-browser/animations";

import { AppComponent } from './components/app/app.component';
import { LoginComponent } from './components/login/login.component';

import {LoginService} from "./services/login/login.service";
import {LoginGuard} from "./guards/login.guard";
import { MenuComponent } from './components/menu/menu.component';
import { HeaderComponent } from './components/header/header.component';

import { HomeComponent } from './components/home/home.component';
import {ProductsService} from "./services/products/products.service";
import {VideoComponent} from "./components/video/video.component";
import {NgbModule} from "@ng-bootstrap/ng-bootstrap";
import { FooterComponent } from './components/footer/footer.component';
import {NgIdleKeepaliveModule} from "@ng-idle/keepalive";

// Alle angular modules en component declaraties
@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    MenuComponent,
    HeaderComponent,
    HomeComponent,
    VideoComponent,
    FooterComponent
  ],
  imports: [
    RoutingModule,
    RouterModule,
    BrowserModule,
    FormsModule,
    ReactiveFormsModule,
    HttpModule,
    ToastModule.forRoot(),
    BrowserAnimationsModule,
    NgbModule.forRoot(),
    NgIdleKeepaliveModule.forRoot()
  ],
  providers: [
    LoginService,
    LoginGuard,
    ProductsService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
