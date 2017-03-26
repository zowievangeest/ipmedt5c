import {Component, OnInit} from '@angular/core';
import {LoginService} from "../../services/login/login.service";

@Component({
  selector: 'app-profiel',
  templateUrl: './profiel.component.html',
  styleUrls: ['./profiel.component.scss']
})
export class ProfielComponent implements OnInit {

  private profiel: any;
  public user: any;

  constructor(private loginSerivce: LoginService) {
  }

  ngOnInit() {
    this.loginSerivce.getUser().subscribe((res: any) => {
      this.profiel = res;
      this.user = JSON.parse(localStorage.getItem("user"));
    })
  }


}
