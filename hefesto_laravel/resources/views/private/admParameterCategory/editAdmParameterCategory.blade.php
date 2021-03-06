@extends('layout.html')

@section('body')

<form id="formEditAdmParameterCategory" action="#" action="/private/admParameterCategoryView" method="post">
	
    <div class="card">
        <div class="card-header" 
            style="font-weight: bold;font-size: large;">
            editAdmParameterCategory.title
        </div>
        <div class="card-body">				
            <div class="form-actions">				
                <button type="submit" class="btn btn-success btn-icon-split" id="btnSave">
                    <span class="icon text-white-50">
                        <i class="fa fa-check-circle"></i>
                    </span>
                    <span class="text">button.save</span>
                </button>
                            
                <button type="reset" class="btn btn-light btn-icon-split" id="btnReset">
                    <span class="icon text-gray-600">
                      <i class="fa fa-eraser"></i>
                    </span>
                    <span class="text">button.reset</span>
                </button>

                <button type="button" class="btn btn-primary btn-icon-split" id="btnCancel">
                    <span class="icon text-white-50"> 
                        <i class="fa fa-times-circle"></i>
                    </span>	
                    <span class="text">button.cancel</span>
                </button>
            </div>				
            <div class="row">
                <div class="col-md-4 form-group">
                    <!--
                    <input type="hidden" id="admParameterCategory_id" th:field="id" />
                    -->
                    <label for="admParameterCategory_description">editAdmParameterCategory.description</label>
                    <input type="text" class="form-control" id="admParameterCategory_description" maxlength="64" required="required" />
                    <!--
                    <span style="color: red;" th:if="fields.hasErrors('description')" th:errors="description"></span>
                    -->
                </div>
                <div class="col-md-4 form-group">
                    <label for="admParameterCategory_order">editAdmParameterCategory.order</label>
                    <input type="text" class="form-control" id="admParameterCategory_order" maxlength="64" required="required" />
                    <!--
                    <span style="color: red;" th:if="fields.hasErrors('order')" th:errors="order"></span>
                    -->
                </div>
            </div>
            
        </div>
    </div>
</form>	

<script src="js/admin/admParameterCategory/editAdmParameterCategory.js"></script>

@endsection