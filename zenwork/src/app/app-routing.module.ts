import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { LoginComponent } from './login/login.component';
import { ArticlesComponent } from './articles/articles.component';
import { RegisterComponent } from './register/register.component';

const routes: Routes = [
  { path:'',redirectTo:'/home',pathMatch:'full'},
  // { path:'login',component:LoginComponent },
  // { path:'register',component:RegisterComponent},
  { path:'home',component:HomeComponent },
  // { path:'articles',component:ArticlesComponent },
  // { path:'**',component:LoginComponent}
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
