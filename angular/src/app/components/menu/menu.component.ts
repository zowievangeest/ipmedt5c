import { Component, OnInit } from '@angular/core';
import {LoginService} from "../../services/login/login.service";
import {Router} from "@angular/router";
import {LoginGuard} from "../../guards/login.guard";

@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.scss']
})
export class MenuComponent implements OnInit {

  // variables
  public loggedIn: boolean;

  // constructor
  constructor(private loginService: LoginService, private router:Router) { }


  // angular init
  ngOnInit() {

    // check of de gebruiker ingrlogd is
    this.router.events.subscribe(() => {
      this.loggedIn = LoginGuard.check();
    });

    this.loggedIn = LoginGuard.check();
  }

  // loguit functie
  public logout(): void {
    this.loginService.logout();
    this.loggedIn = false;
  }

}
