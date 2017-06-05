import { Component } from '@angular/core';
import { Platform } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { HomePage } from '../pages/home/home';
import { MechanistPage } from '../pages/mechanist/mechanist';
import { LoginPage } from '../pages/login/login';
import { CreateMechanistPage } from '../pages/create-mechanist/create-mechanist';
import { ReviewPage } from '../pages/review-page/review-page';
import { HttpService } from '../providers/http-service';

@Component({
  templateUrl: 'app.html',
})
export class MyApp {
  rootPage:any = LoginPage;


  constructor(platform: Platform, statusBar: StatusBar, splashScreen: SplashScreen, httpService: HttpService) {
    platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.

      if (localStorage.getItem('tokens') != 'undefined' && localStorage.getItem('tokens') != null) {
          let token = JSON.parse(localStorage.getItem('tokens')).token;

          httpService.refreshToken(token)
            .then((res) => {
                this.rootPage = HomePage;
            })
            .catch((error) => {
                this.rootPage = LoginPage;
            });
      }

      statusBar.styleDefault();
      splashScreen.hide();
    });
  }
}
