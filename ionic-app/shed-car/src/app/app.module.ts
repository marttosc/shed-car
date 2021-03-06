import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';
import { HttpModule } from '@angular/http';
//import { RouterModule, Routes } from '@angular/router';
import { HttpService } from '../providers/http-service';
import { IonRating } from '../components/ion-rating/ion-rating';
import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';
import { MechanistPage } from '../pages/mechanist/mechanist';
import { LoginPage } from '../pages/login/login';
import { RegisterPage } from '../pages/register/register';
import { CreateMechanistPage } from '../pages/create-mechanist/create-mechanist';
import { ReviewPage } from '../pages/review-page/review-page';
import { ModalReviewPage } from '../pages/modal-review/modal-review';
import { MyReviewPage } from '../pages/my-review/my-review';


@NgModule({
  declarations: [
    MyApp,
    HomePage,
    MechanistPage,
    LoginPage,
    RegisterPage,
    CreateMechanistPage,
    ReviewPage,
    IonRating,
    ModalReviewPage,
    MyReviewPage
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp),
    HttpModule
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage,
    MechanistPage,
    LoginPage,
    RegisterPage,
    CreateMechanistPage,
    ReviewPage,
    ModalReviewPage,
    MyReviewPage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    HttpService,
    {provide: ErrorHandler, useClass: IonicErrorHandler},
  ]
})
export class AppModule {}
