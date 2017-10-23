import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

import { HttpService } from '../../providers/http-service';
import { CreateMechanistPage } from '../create-mechanist/create-mechanist';
import { HomePage } from '../home/home';
import { ReviewPage } from '../review-page/review-page';

@IonicPage()
@Component({
  selector: 'page-mechanist',
  templateUrl: 'mechanist.html',
})
export class MechanistPage {

  public mechanists: Array<Object>;

  constructor(public navCtrl: NavController, public navParams: NavParams, public httpService: HttpService) {
  }

  ngOnInit() {
    this.list();
  }

  back(){
      this.navCtrl.setRoot(HomePage);
  }

  list() {
  return this.httpService.builder('mechanists')
    .list()
    .then((res) => {
      this.mechanists = res.data.mechanists;
    });
  }

  createMechanist() {
    this.navCtrl.setRoot(CreateMechanistPage);
  }

  mechanistSelected(data:Object){
      this.navCtrl.setRoot(ReviewPage, data);
  }


}
