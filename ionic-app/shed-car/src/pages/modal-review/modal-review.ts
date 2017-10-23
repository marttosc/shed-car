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

    if(typeof(this.review.review)=="undefined" || this.review.review == null){
      this.presentAlert('error');
      this.close();
    }

  return this.httpService.builder('mechanists/' + this.mechanist._id + '/reviews')
    .insertReview(this.review)
    .then((res) => {
      this.review = res;
      console.log(res);

      if(typeof(this.review) == 'object'){
        this.presentAlert('success');
      }
    }).catch((error)=>{
      if (error.status_code == 422) {
          this.presentAlert('error');
      }
      this.close();
    });

  }

  presentAlert(message:string) {
    let alert;
    if (message === 'success') {
      alert = this.alertCtrl.create({
        title: 'Sucesso',
        subTitle: 'Avaliação cadastrada com sucesso!',
      });
    }

    if (message === 'error') {
      alert = this.alertCtrl.create({
        title: 'Erro',
        subTitle: 'Não foi possivel cadastrar sua avaliação, verifique se você não é dono desta oficina!',
      });
    }

    alert.present();
  }


}
