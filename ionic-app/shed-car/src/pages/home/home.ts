import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { MechanistPage } from '../mechanist/mechanist';
import { MyReviewPage } from '../my-review/my-review';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  constructor(public navCtrl: NavController) {

  }

  mechanicalRegistration(){
    this.navCtrl.setRoot(MechanistPage);
  }

  myReviews(){
      this.navCtrl.setRoot(MyReviewPage);
    }

}
