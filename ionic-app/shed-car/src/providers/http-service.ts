import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/toPromise';


@Injectable()
export class HttpService {

  url: string;
  header: Headers;

  constructor(public http: Http) {
    console.log('Hello HttpService Provider');
    this.setAccessToken();
  }

  setAccessToken() {
    let token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1OGZjZTY4ODIyMWMzYTAxOGY1N2NmYTIiLCJpc3MiOiJodHRwOlwvXC8xNzIuMTcuMC4xXC9hcGlcL2F1dGhlbnRpY2F0ZSIsImlhdCI6MTQ5MzU2NzIyOSwiZXhwIjoxNDkzNTcwODI5LCJuYmYiOjE0OTM1NjcyMjksImp0aSI6ImVZcjY4eUJ2cTVrSlVkZVoifQ.O_2jgRHEQT2Et3PSlkIDLEb_GBv5mU0ziCBGg35vXVQ';
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

}
