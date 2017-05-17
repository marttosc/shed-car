import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

import { HttpService } from '../../providers/http-service';

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

  list() {
  return this.httpService.builder('mechanists')
    .list()
    .then((res) => {
      this.mechanists = res.mechanists;
    });
  }



  ionViewDidLoad() {
    console.log('ionViewDidLoad User');
  }

}
