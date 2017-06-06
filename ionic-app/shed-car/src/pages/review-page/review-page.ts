import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, ModalController } from 'ionic-angular';
import { HttpService} from '../../providers/http-service';
import { MechanistPage } from '../mechanist/mechanist';
import { ModalReviewPage } from '../modal-review/modal-review';

@IonicPage()
@Component({
  selector: 'page-review-page',
  templateUrl: 'review-page.html',
})
export class ReviewPage {
  public id:string;
  public mechanist: any;
  public reviews:Array<Object>;
  public user:any;

  constructor(public navCtrl: NavController, public navParams: NavParams, public httpService: HttpService, public modalCtrl:ModalController) {
    this.mechanist = this.navParams.data;
  }

  ngOnInit() {
    this.list();
  }

  back(){
    this.navCtrl.setRoot(MechanistPage);
  }

  list () {
    return this.httpService.builder('mechanists/'+ this.mechanist._id + "/reviews")
      .list()
      .then((res) => {
        this.reviews = res.reviews;
      });
  }

  createReview(data:Object){
    return this.httpService.builder('user')
      .list()
      .then((res) => {
        data = res;
        let modal = this.modalCtrl.create(ModalReviewPage, [data, this.mechanist._id]);
        modal.present();
      });

  }
}
