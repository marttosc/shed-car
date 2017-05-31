import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, AlertController } from 'ionic-angular';
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

  public states: Array<Object>;

  constructor(public navCtrl: NavController, public navParams: NavParams, public httpService: HttpService, public alertCtrl:AlertController) {
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

    if (typeof(auth) == 'object') {
        this.presentAlert('sucess');
    }


    if (JSON.stringify(auth).length === 2) {
        this.presentAlert('error');
        return;
    }


    this.httpService.builder('authenticate').insert(auth)
    .then((res)=>{
       localStorage['tokens'] = JSON.stringify(res);
       this.httpService.setAccessToken(res.token);
       this.navCtrl.setRoot(HomePage);
    })
    .catch((error)=>{
      if (error.status == 401) {
          this.presentAlert('error');
          return;
      }
    });

  }

  presentAlert(message:string) {
    let alert;
    if (message === 'sucess') {
      alert = this.alertCtrl.create({
        title: 'Sucesso',
        subTitle: 'Login efetuado com sucesso!',
      });
    }

    if (message === 'error') {
      alert = this.alertCtrl.create({
        title: 'Erro',
        subTitle: 'Não foi possivel efetuar o login!',
      });
      alert.present();
    }
  }
}
