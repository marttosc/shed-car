import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { HomePage } from '../home/home';
import { HttpService } from '../../providers/http-service';
import { ReviewPage } from '../review-page/review-page';

@IonicPage()
@Component({
  selector: 'page-my-review',
  templateUrl: 'my-review.html',
})
export class MyReviewPage {

  public myReviews:Array<Object>;
  public mechanist:Object;

  constructor(public navCtrl: NavController, public navParams: NavParams, public httpService: HttpService) {

  }

  ngOnInit() {
    this.list();
  }

  back(){
      this.navCtrl.setRoot(HomePage);
  }

  getMechanist(data:Object){
    this.mechanist = data['mechanist'];
    return this.httpService.builder('mechanists/'+ data['mechanist']._id + "/reviews")
      .list()
      .then((res) => {
        this.navCtrl.setRoot(ReviewPage, this.mechanist);
      });
  }

  starClicked(value){
    return value;
  }

  list(){
    return this.httpService.builder('user/reviews')
      .list()
      .then((res) => {
          this.myReviews = res.reviews;
      });
  }

}
