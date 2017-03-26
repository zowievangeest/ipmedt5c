import { Component, OnInit } from '@angular/core';
import {LoginService} from "../../services/login/login.service";
import {Router} from "@angular/router";
import {LoginGuard} from "../../guards/login.guard";

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {

  private loggedIn: boolean;

  constructor(private router:Router) { }

  ngOnInit() {
    this.router.events.subscribe(() => {
      this.loggedIn = LoginGuard.check();
    });

    this.loggedIn = LoginGuard.check();
  }

}