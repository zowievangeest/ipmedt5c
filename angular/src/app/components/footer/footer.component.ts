import { Component, OnInit } from '@angular/core';
import {Router} from "@angular/router";
import {LoginGuard} from "../../guards/login.guard";

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.scss']
})
export class FooterComponent implements OnInit {

  // variables
  public loggedIn: boolean;
  public url: string="/";


  // constructor
  constructor(private router:Router) { }

  // init angular
  ngOnInit() {
    // subscriben als login check
    this.router.events.subscribe(() => {
      this.loggedIn = LoginGuard.check();
    });

    this.loggedIn = LoginGuard.check();

    // kijken naar welke route het menu moet linken
    this.router.events.subscribe((url: any) => {
      if (typeof(url.url) !== 'undefined') {
        this.url = url.url;
      }
    });

  }

}
