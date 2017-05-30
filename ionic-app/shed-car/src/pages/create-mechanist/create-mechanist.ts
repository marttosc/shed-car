import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { HomePage } from '../home/home';
import { HttpService } from '../../providers/http-service';

@IonicPage()
@Component({
  selector: 'page-create-mechanist',
  templateUrl: 'create-mechanist.html',
})
export class CreateMechanistPage {

  public states: Array<Object>;

  mechanist: any;

  constructor(public navCtrl: NavController, public navParams: NavParams, public httpService: HttpService) {
    this.mechanist = navParams.get('mechanist') || {};
  }

  ngOnInit() {
    this.getStates();
  }

  popView(){
    this.navCtrl.setRoot(HomePage);
   }

   getStates(){
     this.httpService.builder('states').list()
      .then((res) => {
        localStorage['states'] = JSON.stringify(res);
        this.states = res.states;
      });
    }

}
