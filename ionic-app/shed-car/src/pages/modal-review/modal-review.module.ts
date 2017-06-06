import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { ModalReviewPage } from './modal-review';

@NgModule({
  declarations: [
    ModalReviewPage,
  ],
  imports: [
    IonicPageModule.forChild(ModalReviewPage),
  ],
  exports: [
    ModalReviewPage
  ]
})
export class ModalReviewModule {}
