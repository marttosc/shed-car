import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { HttpService} from '../../providers/http-service';
import { MechanistPage } from '../mechanist/mechanist';

@IonicPage()
@Component({
  selector: 'page-review-page',
  templateUrl: 'review-page.html',
})
export class ReviewPage {
  public id:string;
  public mechanist: any;
  public reviews:Array<Object>;

  constructor(public navCtrl: NavController, public navParams: NavParams, public httpService: HttpService) {
    this.mechanist = this.navParams.data;
  }

  ngOnInit() {
    this.list();
  }

  starClicked(value){
   console.log("Avaliaram em :", value);
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
}
