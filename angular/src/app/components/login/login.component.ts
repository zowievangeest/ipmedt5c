import {Component, OnInit} from '@angular/core';
import {FormGroup, FormBuilder, Validators} from "@angular/forms";
import {LoginService} from "../../services/login/login.service";
import {LoginGuard} from "../../guards/login.guard";

// sweetalert instantieren
declare const swal: any;

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {

  // variables
  public loginForm: FormGroup;


  // constructor
  constructor(private  formBuilder: FormBuilder,
              private loginService: LoginService,
              private loginGuard: LoginGuard) {
  }

  // init functie
  ngOnInit() {

    // login check
    if (LoginGuard.check()) {
      this.loginGuard.redirect();
    }

    // login group
    this.loginForm = this.formBuilder.group({
      'email': [null, [Validators.required, Validators.email]],
      'password': [null, [Validators.required]]
    });
  }

  // versturen formulier
  public submitForm(value: Object) {

    // als die een response krijgt is die ingelogd
    this.loginService.login(value).subscribe(
        (res: any) => {
          swal({
            title: "Succes!",
            text: "U bent nu ingelogd!",
            type: "success"
          });
          // redirect
          this.loginGuard.redirect('/dashboard');
        },
        (err: number) => {
          if (err === 401) {
            swal("Oops", "Verkeerde email of wachtwoord", "error");
          } else if (err === 500) {
            swal("Oops", "Probeer het nog eens", "error");
          }
        }
    )
  }


}
