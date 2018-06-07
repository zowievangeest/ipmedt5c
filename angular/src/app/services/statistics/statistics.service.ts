import { Injectable } from '@angular/core';
import {BehaviorSubject, Observable} from "rxjs";
import {url} from "../../../constants";
import {Http, RequestOptions, Headers, Response} from "@angular/http";

@Injectable()
export class StatisticsService {

  private getOptions: RequestOptions;

  constructor(private http: Http) {

    const headers = new Headers();

    headers.append('Authorization', `Bearer ${localStorage.getItem('token')}`);

    this.getOptions = new RequestOptions({headers});

  }

  public getPlatformViews(): Observable<boolean | string> {
    return this.http.get(`${url}statistics/platforms`, this.getOptions)
        .map((res: Response) => res.json())
        .map((res: any) => {
          return res.platforms;
        }).catch((error: any) => {
          if (error.status == 401) {
            return Observable.throw(error.status);
          } else if (error.status == 500) {
            return Observable.throw(error.status);
          }
        });
  }

  public getProductViews(): Observable<boolean | string> {
    return this.http.get(`${url}statistics/products`, this.getOptions)
        .map((res: Response) => res.json())
        .map((res: any) => {
          return res.products;
        }).catch((error: any) => {
          if (error.status == 401) {
            return Observable.throw(error.status);
          } else if (error.status == 500) {
            return Observable.throw(error.status);
          }
        });
  }

  public getGameViews(): Observable<boolean | string> {
    return this.http.get(`${url}statistics/games`, this.getOptions)
        .map((res: Response) => res.json())
        .map((res: any) => {
          return res.games;
        }).catch((error: any) => {
          if (error.status == 401) {
            return Observable.throw(error.status);
          } else if (error.status == 500) {
            return Observable.throw(error.status);
          }
        });
  }
}