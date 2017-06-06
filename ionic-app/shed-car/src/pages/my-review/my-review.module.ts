import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { MyReviewPage } from './my-review';

@NgModule({
  declarations: [
    MyReviewPage,
  ],
  imports: [
    IonicPageModule.forChild(MyReviewPage),
  ],
  exports: [
    MyReviewPage
  ]
})
export class MyReviewModule {}
