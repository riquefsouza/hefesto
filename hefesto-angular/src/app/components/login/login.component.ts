import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  msg = {
    main_framework : "HFS",
    main_app_title : "beta"
  };

  constructor() { }

  ngOnInit() {
  }

}
