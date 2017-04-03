import {Injectable} from '@angular/core';
import {Http, RequestOptions, Headers, Response} from "@angular/http";
import {Observable} from "rxjs";
import {url} from "../../../constants";

@Injectable()
export class ProductsService {

  private getOptions: RequestOptions;

  constructor(private http: Http) {

    const headers = new Headers();

    headers.append('Authorization', `Bearer ${localStorage.getItem('token')}`);

    this.getOptions = new RequestOptions({headers});

  }

  public getProducts(): Observable<boolean | string> {
    return this.http.get(`${url}product`, this.getOptions)
        .map((res: Response) => res.json())
        .map((res: any) => {

          for (let product in res.products) {
            if (res.products.hasOwnProperty(product)) {
              res.products[product]['game']['release_date'] = new Date(res.products[product]['game']['release_date']).toLocaleString([], { year: "numeric", month: "numeric",
                day: "numeric" });
            }
          }

          return res.products;
        }).catch((error: any) => {
          if (error.status == 401) {
            return Observable.throw(error.status);
          } else if (error.status == 500) {
            return Observable.throw(error.status);
          }
        });
  }

}
