import { Component, OnInit } from '@angular/core';
import {FormGroup, FormBuilder, Validators} from "@angular/forms";
import {LoginService} from "../services/login/login.service";
import {LoginGuard} from "../guards/login.guard";

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {

  public loginForm: FormGroup;

  public msg: string;


  constructor(private  formBuilder: FormBuilder,
              private loginService: LoginService,
              private loginGuard: LoginGuard) { }

  ngOnInit() {

      if (LoginGuard.check()) {
          this.loginGuard.redirect();
      }

      this.loginForm = this.formBuilder.group({
          'email':[null, [Validators.required, Validators.email]],
          'password': [null, [Validators.required]]
      });
  }

  private submitForm(value: Object) {
      console.log(value);

      this.loginService.login(value).subscribe(
          (res: any) => {
              //TODO: route (dashboard)
              this.loginGuard.redirect();
          },
          (err: number) => {
              if (err === 401){
                this.msg = 'Login is niet correct';
              } else if (err === 500) {
                this.msg = 'Probeer het op een ander moment nog eens';
              }
          }
      )
  }

}
