import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { catchError, retry } from 'rxjs/operators';


@Injectable({
  providedIn: 'root'
})
export class ApiserviceService {
  // registration api
  registerUrl:string="https://conduit.productionready.io/api/users";
  // login api
  loginUrl:string="https://conduit.productionready.io/api/users/login";
  //getarticles api
  getarticlesUrl:string="https://conduit.productionready.io/api/articles"; 
  //delete article api
  delarticleUrl:string="https://conduit.productionready.io/api/articles/"; 
  // favourtie api
  favouriteUrl:string="https://conduit.productionready.io/api/articles/";
  // Create Article api
  createArticleUrl:string="https://conduit.productionready.io/api/articles";

  newuser(body:any){
    return this.http.post(this.registerUrl,body);
  }

  loginuser(body:any){
    return this.http.post(this.loginUrl,body);
  }

  getarticles():Observable<any>{
    return this.http.get(this.getarticlesUrl);
  }

  delarticles(slug:string, token:string){
    const accessToken = `Token ${token}`
    return this.http.delete(`${this.delarticleUrl}${slug}`,{ headers: { 'Authorization': accessToken } });
  }

  favouritearticle(slug:string,token:string){
    const accessToken = `Token ${token}`;
    const url= this.favouriteUrl+slug+'/favorite';
    return this.http.post(url,slug,{ headers: { 'Authorization': accessToken } });
  }

  newArticle(body:any,token:string){
    const accessToken = `Token ${token}`;
    return this.http.post(this.createArticleUrl,body,{ headers: { 'Authorization': accessToken } });
  }

  constructor(private http:HttpClient) { }

  
}
