import { Component, OnInit } from '@angular/core';
import {FormGroup, FormBuilder, Validators} from "@angular/forms";
import {LoginService} from "../services/login/login.service";

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {

 public loginForm: FormGroup;


  constructor(private  formBuilder: FormBuilder,
              private loginService: LoginService) { }

  ngOnInit() {
      this.loginForm = this.formBuilder.group({
          'email':[null, [Validators.required, Validators.email]],
          'password': [null, [Validators.required]]
      });
  }

  private submitForm(value: Object) {
      console.log(value);

      this.loginService.login(value).subscribe(
          (res: any) => {
              console.log(res);
          },
          (err: any) => {
              console.error(err);
          }
      )
  }

}
