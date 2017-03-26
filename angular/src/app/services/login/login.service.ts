import { Injectable } from '@angular/core';
import {Http, RequestOptions, Headers, Response} from "@angular/http";

import {url} from "../../../constants";

import {Observable} from "rxjs";
import {login} from "../../interfaces/login.interface";
import {Router} from "@angular/router";
import {user} from "../../interfaces/user.interface";

@Injectable()
export class LoginService {

  private url: string = 'localhost';

  private static headers(authentication: boolean = false, json: boolean = false): RequestOptions {

    const headers = new Headers();

    if (authentication) {
      headers.append('Authorization', `Bearer ${localStorage.getItem('token')}`);
    }

    if (json) {
      headers.append('Content-Type', 'multipart/json');
    }

    return new RequestOptions({headers});
  }

  constructor(private http: Http, private router: Router) {}

  public login(data: Object): Observable<boolean | null> {
      return this.http.post(`${url}authenticate`, data, LoginService.headers(false, true))
          .map((res: Response) => res.json())
          .map((res: login) => {
              if(res.token.length > 0) {
                localStorage.setItem('token', res.token);
                  return true;
              }

              return false;
          }).
          catch((error: any) => {
              if(error.status === 401) {
                  return Observable.throw(error.status)
              } else if(error.status === 500) {
                  return Observable.throw(error.status)
              }
          });
  }

  public getUser(): Observable<boolean> {
    return this.http.post(`${url}authenticate/checkuser`, null, LoginService.headers(true))
        .map((res: Response) => res.json())
        .map((res: user) => {
          if(res.user) {
            localStorage.setItem('user', JSON.stringify(res.user));
            return true;
          }

          return false;
        }).
        catch((error: any) => {
          if(error.status === 401) {
            return Observable.throw(error.status)
          }
        });
  }



  public logout(): void {
    localStorage.removeItem('token');
    localStorage.removeItem('user');
    this.router.navigateByUrl('/login');
  }

}
