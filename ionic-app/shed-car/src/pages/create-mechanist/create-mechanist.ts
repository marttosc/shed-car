import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { HomePage } from '../home/home';

@IonicPage()
@Component({
  selector: 'page-create-mechanist',
  templateUrl: 'create-mechanist.html',
})
export class CreateMechanistPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }


  popView(){
    this.navCtrl.setRoot(HomePage);
   }

}
