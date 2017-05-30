import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { CreateMechanistPage } from './create-mechanist';

@NgModule({
  declarations: [
    CreateMechanistPage,
  ],
  imports: [
    IonicPageModule.forChild(CreateMechanistPage),
  ],
  exports: [
    CreateMechanistPage
  ]
})
export class CreateMechanistPageModule {}
