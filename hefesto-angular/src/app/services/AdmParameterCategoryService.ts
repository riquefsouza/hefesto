import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { IAdmParameterCategory } from '../domain/IAdmParameterCategory';

@Injectable()
export class AdmParameterCategoryService {

    constructor(private http: HttpClient) {}

    list() {
        return this.http.get<any>('http://localhost:8080/api/v1/admParameterCategory')
            .toPromise()
            .then(res => <IAdmParameterCategory[]> res);
    }
}