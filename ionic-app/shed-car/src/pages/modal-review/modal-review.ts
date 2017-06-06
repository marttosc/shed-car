import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, AlertController } from 'ionic-angular';
import { MechanistPage } from '../mechanist/mechanist';
import { HttpService} from '../../providers/http-service';

@IonicPage()
@Component({
  selector: 'page-modal-review',
  templateUrl: 'modal-review.html',
})
export class ModalReviewPage {
  private user:any;
  private value:number;
  private mechanist:any;

  review:any

  constructor(public navCtrl: NavController, public navParams: NavParams, public alertCtrl: AlertController, public httpService: HttpService) {
    this.review = navParams.get('review') || {};
    this.mechanist = this.navParams.data[1];
    this.user = this.navParams.data[0];
  }

  starClicked(value){
    return this.value = value;

  }

  close() {
    this.navCtrl.setRoot(MechanistPage);
  }

  save() {
    this.review.review = this.value;
    this.review.user_id = this.user.user._id;

  return this.httpService.builder('mechanists/' + this.mechanist + '/reviews')
    .insert(this.review)
    .then((res) => {
      this.review = res;
      this.navCtrl.setRoot(MechanistPage);
    });

  }


}
