@extends('layout.html')

@section('body')

<form id="formListAdmParameterCategory" action="#" action="/private/admParameterCategoryView/edit" method="get">

    <input type="hidden" id="admParameterCategory_jsonText" />
    
    <div class="card">
        <div class="card-header" 
            style="font-weight: bold;font-size: large;">				
            <span id="formTitle">listAdmParameterCategory.title</span>
        </div>
        <div class="card-body">				
            <div class="row">
                {% include 'fragments/panelReport.html' %}		
            </div>
        </div>
    </div>

    <div class="form-actions" style="margin:5px 0;">
        <button type="button" class="btn btn-primary btn-icon-split" id="btnExport">
            <span class="icon text-white-50">
                <i class="fa fa-file"></i>
            </span>
            <span class="text">button.export</span>
        </button>			
        <button type="button" class="btn btn-success btn-icon-split" id="btnAdd">
            <span class="icon text-white-50">
                <i class="fa fa-plus-circle"></i>
            </span>
            <span class="text">button.add</span>
        </button>			
        <button type="button" class="btn btn-warning btn-icon-split" id="btnEdit">
            <span class="icon text-white-50">
                <i class="fa fa-chevron-circle-up"></i>
            </span>
            <span class="text">button.edit</span>
        </button>			
        <button type="button" class="btn btn-danger btn-icon-split" id="btnDelete">
            <span class="icon text-white-50">
                <i class="fa fa-minus-circle"></i>
            </span>
            <span class="text">button.delete</span>
        </button>			
        <button type="button" class="btn btn-primary btn-icon-split" id="btnBack">
            <span class="icon text-white-50">
                <i class="fa fa-arrow-circle-left"></i>
            </span>
            <span class="text">button.back</span>
        </button>			
    </div>

    <div id="dlgDeleteConfirmation" title="dlgDeleteConfirmation.title" style="display: none;">
        <p>dlgDeleteConfirmation.text</p>
    </div>

    <div id="tableAdmParameterCategory"></div>

    {% for item in lista %}
        {{item.description}}
    {% endfor %}
    
</form>

<script src="js/admin/admParameterCategory/listAdmParameterCategory.js"></script>

@endsection