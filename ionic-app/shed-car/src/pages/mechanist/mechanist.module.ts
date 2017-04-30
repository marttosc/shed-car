import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { MechanistPage } from './mechanist';

@NgModule({
  declarations: [
    MechanistPage,
  ],
  imports: [
    IonicPageModule.forChild(MechanistPage),
  ],
  exports: [
    MechanistPage
  ]
})
export class UserModule {}
