import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, AlertController } from 'ionic-angular';
import { HttpService } from '../../providers/http-service';

/**
 * Generated class for the Register page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
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
    //this.save();
  }

  save() {
  return this.httpService.builder('users')
    .insert(this.register)
    .then((res) => {
      this.register = res;
      if(typeof(this.register) == 'object'){
        this.presentAlert();
      }
    });
  }

  presentAlert() {
    let alert = this.alertCtrl.create({
      title: 'Sucess',
      subTitle: 'Cadastro efetuado com sucesso!',
    });
    alert.present();
  }


}
