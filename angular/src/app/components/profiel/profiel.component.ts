import {Component, OnInit} from '@angular/core';
import {LoginService} from "../../services/login/login.service";
import {user} from "../../interfaces/user.interface";

@Component({
  selector: 'app-profiel',
  templateUrl: './profiel.component.html',
  styleUrls: ['./profiel.component.scss']
})
export class ProfielComponent implements OnInit {

  // variables
  private profiel: any;
  public user: user;

  // constuctor
  constructor(private loginService: LoginService) {
  }

  // on init angular
  ngOnInit() {
    // kijken of de user is ingelogd en ophalen user info
    this.loginService.getUser().subscribe((res: boolean) => {
      this.profiel = res;
      this.user = JSON.parse(localStorage.getItem("user"));
    })
  }

}
