import {Component, OnInit} from '@angular/core';
import {FormGroup, FormBuilder, Validators} from "@angular/forms";
import {LoginService} from "../../services/login/login.service";
import {LoginGuard} from "../../guards/login.guard";

declare const swal: any;

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
              private loginGuard: LoginGuard) {
  }

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
            swal({
              title: "Succes!",
              text: "U bent nu ingelogd!",
              type: "success"
            });
            this.loginGuard.redirect('/dashboard');
          },
          (err: number) => {
              if (err === 401){
                swal("Oops", "Verkeerde email of wachtwoord", "error");
                // this.msg = 'Login is niet correct';
              } else if (err === 500) {
                this.msg = 'Probeer het op een ander moment nog eens';
              }
          }
      )
  }


}
