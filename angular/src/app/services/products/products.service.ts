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
              res.products[product]['game']['release_date'] = new Date(res.products[product]['game']['release_date']).toLocaleString([], {
                year: "numeric", month: "numeric",
                day: "numeric"
              });
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

  public getProductByUid(uid: string): Observable<boolean | string> {
    return this.http.get(`${url}product/${uid}`, this.getOptions)
        .map((res: Response) => res.json())
        .map((res: any) => {
          return res.product;
        }).catch((error: any) => {
          if (error.status == 401) {
            return Observable.throw(error.status);
          } else if (error.status == 500) {
            return Observable.throw(error.status);
          }
        });
  }

  public removeProductUid(product_id: number): Observable<boolean | string> {
    let uid = "null";
    return this.http.put(`${url}productedit/${product_id}/${uid}`, null, this.getOptions)
        .map((res: any) => {
          return res;
        })
        .catch((error: any) => {
          if (error.status == 401) {
            return Observable.throw(error.status);
          } else if (error.status == 500) {
            return Observable.throw(error.status);
          }
        });
  }

  public uploadFile(data: FormData): Observable<boolean | string> {
    return this.http.post(`${url}product/import/`, data, this.getOptions)
        .map((res: Response) => res.json())
        .map((res: any) => {
          return res;
        });
  }



}
