import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { MechanistPage } from '../mechanist/mechanist';
import { MyReviewPage } from '../my-review/my-review';
import { HttpService } from '../../providers/http-service';
import { LoginPage } from '../login/login';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  public token:string;

  constructor(public navCtrl: NavController, public httpService: HttpService) {
    this.token = JSON.parse(localStorage['tokens']);
  }

  logout(){
    return this.httpService.builder('logout')
      .logout(this.token)
      .then((res) => {
        this.token = res;
        this.navCtrl.setRoot(LoginPage);
      })
      .catch((error)=>{
        console.log(error);
      });
    }

  mechanicalRegistration(){
    this.navCtrl.setRoot(MechanistPage);
  }

  myReviews(){
      this.navCtrl.setRoot(MyReviewPage);
    }

}
