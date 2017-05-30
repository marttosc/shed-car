import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';
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
    this.url = 'http://172.17.0.1/api/' + resource;
    return this;
  }

  list() {
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
};


}
