import { Injectable } from '@angular/core';
import {Http, RequestOptions, Headers, Response} from "@angular/http";

import {url} from "../../../constants";

import {Observable} from "rxjs";
import {login} from "../../interfaces/login.interface";

@Injectable()
export class LoginService {

    private options: RequestOptions;
    private url: string = 'localhost';

  constructor(private http: Http) {
      const headers = new Headers();
      headers.append('Content-Type', 'multipart/json');
      this.options = new RequestOptions({headers});
  }

  public login(data: Object): Observable<boolean | null> {
      return this.http.post(`${url}authenticate`, data, this.options)
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

}
