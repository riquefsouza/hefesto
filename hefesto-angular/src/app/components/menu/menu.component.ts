import { Component, OnInit } from '@angular/core';
import {MenuItem} from 'primeng/api';

@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.css']
})
export class MenuComponent implements OnInit {

  visibleSidebar1: boolean;

  items: MenuItem[];

  constructor() { 
    this.visibleSidebar1 = false;

  }

  ngOnInit(): void {

    this.items = [
      {
          label: 'Administrative',
          items: [
            {
              label: 'Category of Configuration Parameters', 
              url: '/adm-parameter-category-component'
            },
            {
              label: 'Configuration Parameters', 
              url: '/private/admin/admParameter/listAdmParameter.html'
            },
            {
              label: 'Administer Profile', 
              url: '/private/admin/admProfile/listAdmProfile.html'
            }, 
            {
              label: 'Administer Page', 
              url: '/private/admin/admPage/listAdmPage.html'
            },
            {
              label: 'Administer Menu', 
              url: '/private/admin/admMenu/listAdmMenu.html'
            }, 
            {
              label: 'Administer User', 
              url: '/private/admin/admMenu/listAdmUser.html'
            },  
            {separator: true},
            {
              label: 'Exit', 
              expanded: true,
              url: '/logout'
            }
          ]
      }
    ];

  }

}
