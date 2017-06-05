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
  public mechanist:{};

  constructor(public navCtrl: NavController, public navParams: NavParams, public httpService: HttpService) {
    this.id = this.navParams.get('_id');
  }

  ngOnInit() {
    this.view(this.id);
  }

  view (id: string) {
    this.httpService.builder('mechanists')
      .view(id)
      .then((res) => {
        this.mechanist = res;
        console.log(this.mechanist);
      });
  }
}
