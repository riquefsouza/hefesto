import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AdmParameterCategoryComponent } from './components/adm-parameter-category/adm-parameter-category.component';

const routes: Routes = [
  { path: 'adm-parameter-category-component', component: AdmParameterCategoryComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
