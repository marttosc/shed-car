import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/toPromise';

/*
  Generated class for the HttpService provider.

  See https://angular.io/docs/ts/latest/guide/dependency-injection.html
  for more info on providers and Angular 2 DI.
*/
@Injectable()
export class HttpService {

  url: string;
  header: Headers;

  constructor(public http: Http) {
    console.log('Hello HttpService Provider');
    this.setAccessToken();
  }

  setAccessToken() {
    let token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1OGZjZTY4ODIyMWMzYTAxOGY1N2NmYTIiLCJpc3MiOiJodHRwOlwvXC8xNzIuMTcuMC4xXC9hcGlcL2F1dGhlbnRpY2F0ZSIsImlhdCI6MTQ5MzIyMDkwNSwiZXhwIjoxNDkzMjI0NTA1LCJuYmYiOjE0OTMyMjA5MDUsImp0aSI6IjU5eVJ1bXRPaVl4dVcxQWgifQ.grltuCwN67RIsdwlz5u0aStOB833JsZIPCiJ-tQZhIM';
    this.header = new Headers({'Authorization': 'Bearer '+ token});
  }

  builder(resource) {
    this.url = 'http://172.17.0.1/api/' + resource;
    return this;
  }

  list() {
    console.log(this.url);
    return this.http.get(this.url, { headers: this.header })
    .toPromise()
    .then((res) => {
      return res.json() || {};
    });
  }

}
