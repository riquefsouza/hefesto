import { Component, OnInit } from '@angular/core';
import { IAdmParameterCategory } from '../../domain/IAdmParameterCategory';
import { AdmParameterCategoryService } from '../../services/AdmParameterCategoryService';

import {SelectItem} from 'primeng/api';
import {SelectItemGroup} from 'primeng/api';

export class AdmParameterCategory implements IAdmParameterCategory {
  constructor(
    public id?,
    public description?,
    public order?) {}
}

interface ItypeReport {
  type: string;
  typeContent: string;
  description: string;
}

@Component({
  selector: 'app-adm-parameter-category',
  templateUrl: './adm-parameter-category.component.html',
  styleUrls: ['./adm-parameter-category.component.css'],
  providers: [AdmParameterCategoryService]
})
export class AdmParameterCategoryComponent implements OnInit {

  displayDialog: boolean;

  admParameterCategory: IAdmParameterCategory = new AdmParameterCategory();

  selectedAdmParameterCategory: IAdmParameterCategory;

  newAdmParameterCategory: boolean;

  admParameterCategorys: IAdmParameterCategory[];

  cols: any[];

  typeReport: SelectItemGroup[];

  selectedTypeReport: ItypeReport;

  constructor(private admParameterCategoryService: AdmParameterCategoryService) { 


    this.typeReport = [
      {
        label: 'Documents',
        items: [
          {
            label: 'Portable Document Format (.pdf)',
            value: { type: 'PDF', typeContent: 'application/pdf', description: 'Portable Document Format (.pdf)' }
          },
          {
            label: 'Microsoft Word XML (.docx)',
            value: { type: 'DOCX', typeContent: 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', description: 'Microsoft Word XML (.docx)' }
          }
        ]
      }
    ];

  }

  ngOnInit(): void {
    this.admParameterCategoryService.list()
    .then(item => this.admParameterCategorys = item);

    this.cols = [
        //{ field: 'id', header: 'Id' },
        { field: 'description', header: 'Description' },
        { field: 'order', header: 'Order' }
    ];    
  }

  showDialogToAdd() {
    this.newAdmParameterCategory = true;
    this.admParameterCategory = new AdmParameterCategory();
    this.displayDialog = true;
  }

  save() {
    const admParameterCategorys = [...this.admParameterCategorys];
    if (this.newAdmParameterCategory) {
      admParameterCategorys.push(this.admParameterCategory);
    } else {
      admParameterCategorys[this.findSelectedCarIndex()] = this.admParameterCategory;
    }
    this.admParameterCategorys = admParameterCategorys;
    this.admParameterCategory = null;
    this.displayDialog = false;
  }


  delete() {
    const index = this.findSelectedCarIndex();
    this.admParameterCategorys = this.admParameterCategorys.filter((val, i) => i !== index);
    this.admParameterCategory = null;
    this.displayDialog = false;
  }

  onRowSelect(event) {
      this.newAdmParameterCategory = false;
      this.admParameterCategory = {...event.data};
      this.displayDialog = true;
  }

  findSelectedCarIndex(): number {
      return this.admParameterCategorys.indexOf(this.selectedAdmParameterCategory);
  } 
  
}
