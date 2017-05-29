import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { MechanistPage } from '../mechanist/mechanist';
import { ReviewPage } from '../review-page/review-page';

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
      this.navCtrl.setRoot(ReviewPage);
    }

}
