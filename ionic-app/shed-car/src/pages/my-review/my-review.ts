import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { HomePage } from '../home/home';
import { HttpService } from '../../providers/http-service';

@IonicPage()
@Component({
  selector: 'page-my-review',
  templateUrl: 'my-review.html',
})
export class MyReviewPage {

  public myReviews:Array<Object>;

  constructor(public navCtrl: NavController, public navParams: NavParams, public httpService: HttpService) {
  }

  ngOnInit() {
      this.list();

      this.myReviews = JSON.parse(localStorage.getItem('my_reviews'));

      localStorage.removeItem('my_reviews');
  }

  back(){
      this.navCtrl.setRoot(HomePage);
  }

  getMechanist(){
    // return this.httpService.builder('mechanists/'+ this.mechanist._id + "/reviews")
    //   .list()
    //   .then((res) => {
    //     this.reviews = res.reviews;
    //   });
  }

  starClicked(value){
    return value;
  }

  list(){
    return this.httpService.builder('user/reviews')
      .list()
      .then((res) => {
          for (let i = 0; i < res.reviews.length; i++) {
              res.reviews[i].created_at = new Date(res.reviews[i].created_at);
          }

          localStorage['my_reviews'] = JSON.stringify(res.reviews);
      });
  }

}
