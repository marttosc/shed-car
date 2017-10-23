import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, AlertController } from 'ionic-angular';
import { HomePage } from '../home/home';
import { HttpService } from '../../providers/http-service';

@IonicPage()
@Component({
  selector: 'page-create-mechanist',
  templateUrl: 'create-mechanist.html',
})
export class CreateMechanistPage {

  public states: Array<Object>;
  public cities: Array<Object>;


  mechanist: any;

  constructor(public navCtrl: NavController, public navParams: NavParams, public httpService: HttpService, public alertCtrl :AlertController) {
    this.mechanist = navParams.get('mechanist') || {};
  }

  ngOnInit() {
    this.getStates();
  }

  popView(){
    this.navCtrl.setRoot(HomePage);
   }

   mechanistSelected(){

   }

   getStates(){
     this.httpService.builder('states').list()
      .then((res) => {
        localStorage['states'] = JSON.stringify(res);
        this.states = res.data.states;
      });
    }

    getCities(state:string){
      this.httpService.builder('states/'+ state +'/cities').list()
       .then((res) => {
         localStorage['cities'] = JSON.stringify(res);
         this.cities = res.data.cities;
       });
    }

    saveMechanist() {
    return this.httpService.builder('mechanists')
      .insert(this.mechanist)
      .then((res) => {
        this.mechanist = res;
        if(typeof(this.mechanist) == 'object'){
          this.presentAlert('sucess');
        }
      }).catch((error)=>{
        if (error.status == 401) {
            this.presentAlert('error');
            return;
        }
      });
    }

    presentAlert(message:string) {
      let alert;
      if (message === 'sucess') {
        alert = this.alertCtrl.create({
          title: 'Sucesso',
          subTitle: 'Oficina cadastrada com sucesso!',
        });
      }

      if (message === 'error') {
        alert = this.alertCtrl.create({
          title: 'Erro',
          subTitle: 'Não foi possivel cadastrar a Oficina!',
        });
        alert.present();
      }
    }
}
