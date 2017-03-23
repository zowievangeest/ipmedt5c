import { Injectable } from '@angular/core';
import {Http, RequestOptions, Headers, Response} from "@angular/http";

import {url} from "../../../constants";

import {Observable} from "rxjs";

@Injectable()
export class LoginService {

    private options: RequestOptions;
    private url: string = 'localhost';

  constructor(private http: Http) {
      const headers = new Headers();
      headers.append('Content-Type', 'multipart/form-data');
      this.options = new RequestOptions({headers});
  }

  public login(data: Object): Observable<boolean> {
      return this.http.post(`${url}authenticate`, data, this.options)
          .map((res: Response) => res.json())
          .map((res: Object) => {
              return true;
          }).catch((error: any) => {
              if(error.status === 401) {
                  return Observable.throw(new Error(error.error))
              }
          });
  }

}
