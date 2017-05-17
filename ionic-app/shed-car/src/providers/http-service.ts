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
    let token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1OGZjZTY4ODIyMWMzYTAxOGY1N2NmYTIiLCJpc3MiOiJodHRwOlwvXC8xNzIuMTcuMC4xXC9hcGlcL2F1dGhlbnRpY2F0ZSIsImlhdCI6MTQ5NDYxOTcwMSwiZXhwIjoxNDk0NjIzMzAxLCJuYmYiOjE0OTQ2MTk3MDEsImp0aSI6IkpFV0VjR0hscm9GbWV5YmoifQ.wmVrqCVvhdyL-ayEBZhdUmXnFbTyTRCk5MM9V8AwuCI';
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
