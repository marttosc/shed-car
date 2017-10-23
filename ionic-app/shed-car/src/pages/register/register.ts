import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, AlertController } from 'ionic-angular';
import { HttpService } from '../../providers/http-service';
import { LoginPage } from '../login/login';


@IonicPage()
@Component({
  selector: 'page-register',
  templateUrl: 'register.html',
})
export class RegisterPage {

    register: any;

  constructor(public navCtrl: NavController, public navParams: NavParams, public httpService: HttpService, private alertCtrl: AlertController) {
      this.register = navParams.get('register') || {};
  }

  ngOnInit() {
  }

  popView(){
    this.navCtrl.setRoot(LoginPage);
   }

  save() {
  return this.httpService.builder('register')
    .insert(this.register)
    .then((res) => {
      this.register = res;
      this.navCtrl.setRoot(LoginPage);
      if(typeof(this.register) == 'object'){
        this.presentAlert('sucess');
      }
    })
    .catch((error)=>{
      if (error.status == 422) {
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
        subTitle: 'Cadastro efetuado com sucesso!',
      });
    }

    if (message === 'error') {
      alert = this.alertCtrl.create({
        title: 'Erro',
        subTitle: 'Não foi possivel efetuar o cadastro!',
      });
      alert.present();
    }
  }


}
