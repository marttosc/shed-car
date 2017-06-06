import { Injectable, ViewChild } from '@angular/core';
import { Http, Headers } from '@angular/http';
import { LoginPage } from '../pages/login/login';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/toPromise';

interface RequestOptions {
  headers?:any;
}

@Injectable()
export class HttpService {

  private url: string;
  private options: RequestOptions = {};

  constructor(public http: Http) {
    let token = localStorage['tokens'] ? JSON.parse(localStorage['tokens']) : {};
    if (token.token) {
      this.setAccessToken(token.token);
    }

  }

  setAccessToken(token: string) {
    let header = new Headers({'Authorization': 'Bearer ' + token});
    this.options.headers = header;
  }

  builder(resource) {
    this.url = 'https://shedcar.herokuapp.com/api/' + resource;
    return this;
  }

  list() {
    console.log(this.url);
    return this.http.get(this.url, this.options)
      .toPromise()
      .then((res) => {
        return res.json() || {};
      });
  }

  insert(data: Object) {
    return this.http.post(this.url, data, this.options)
    .toPromise()
    .then((res) => {
      return res.json() || {};
    });
}

view (id: string) {
    return this.http.get(this.url + '/' + id, this.options)
      .toPromise()
      .then((res) => {
        return res.json() || {};
      });
  }

    refreshToken(token: any) {
        this.setAccessToken(token);

        return this.http.get(this.builder('token').url, this.options)
            .toPromise()
            .then((res) => {
                let data = res.json();

                localStorage['tokens'] = JSON.stringify(data);
                this.setAccessToken(data.token);

                return true;
            })
            .catch((error) => {
                this.clearToken();

                return false;
            });
    }

    clearToken() {
        localStorage.removeItem('tokens');
    }

    getUser(){
      return this.http.get(this.url + this.options)
        .toPromise()
        .then((res) => {
          return res.json() || {};
        });
    }

}
