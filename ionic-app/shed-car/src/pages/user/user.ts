import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

import { HttpService } from '../../providers/http-service';
/**
 * Generated class for the User page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
@IonicPage()
@Component({
  selector: 'page-user',
  templateUrl: 'user.html',
})
export class UserPage {

  public mechanists: Array<Object>;

  constructor(public navCtrl: NavController, public navParams: NavParams, public httpService: HttpService) {
  }

  ngOnInit() {
    this.list();
  }

  list() {
    this.httpService.builder('mechanists')
    .list()
    .then((res) => {
      this.mechanists = res.data;
    });
  }



  ionViewDidLoad() {
    console.log('ionViewDidLoad User');
  }

}
