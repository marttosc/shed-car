import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/toPromise';


@Injectable()
export class HttpService {

  url: string;
  header: Headers;

  constructor(public http: Http) {
    let token = localStorage['tokens'] ? JSON.parse(localStorage['tokens']) : {};
    if (token.token) {
      this.setAccessToken(token.token);
    }
  }

  setAccessToken(token: string) {
    this.header = new Headers({'Authorization': 'Bearer '+ token});
  }

  builder(resource) {
    this.url = 'http://172.17.0.1/api/' + resource;
    return this;
  }

  list() {
    return this.http.get(this.url, { headers: this.header })
    .toPromise()
    .then((res) => {
      return res.json() || {};
    });
  }

  insert(data: Object) {
    return this.http.post(this.url, data, { headers: this.header })
    .toPromise()
    .then((res) => {
      return res.json() || {};
    });
};


}
