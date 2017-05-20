import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { RegisterPage } from '../register/register';
import { HttpService } from '../../providers/http-service';
import { HomePage } from '../home/home';

interface User {
  email?:string;
  password?:string;
}

@IonicPage()
@Component({
  selector: 'page-login',
  templateUrl: 'login.html',
})
export class LoginPage {
  public user: User = {};

  constructor(public navCtrl: NavController, public navParams: NavParams, public httpService: HttpService) {
    this.user = navParams.get('user') || {};
  }


  public createAccount() {
    this.navCtrl.setRoot(RegisterPage);
  }

  public login(){
    let auth = {
      email: this.user.email,
      password: this.user.password
    }

    this.httpService.builder('authenticate').insert(auth)
    .then((res)=>{
       localStorage['tokens'] = JSON.stringify(res);
       this.httpService.setAccessToken(res.token);
       this.navCtrl.setRoot(HomePage);

    });
  }

}
