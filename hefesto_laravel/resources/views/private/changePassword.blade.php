@extends('layout.html')

@section('body')

<form id="formChangePassword" style="max-width: 650px; margin-top: 10px;"
action="#" action="/changePassword" method="post">

   <div class="card">
       <div class="card-header" 
           style="font-weight: bold;font-size: large;">
           changePassword.title
       </div>
       <div class="card-body">
       
           <div class="form-actions">
               <button type="button" class="btn btn-success btn-icon-split" id="btnSave">
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
                   <span class="icon text-white-50"> <i
                       class="fa fa-times-circle"></i>
                   </span> 
                   <span class="text">button.cancel</span>
               </button>
           </div>

           <div class="row">
               <div class="col-md-6 form-group">
               <!--
                   <input type="hidden" th:field="id" />
                   <input type="hidden" th:field="username" />
                   <input type="hidden" th:field="password" />
                   <input type="hidden" th:field="email" />
                   <input type="hidden" th:field="urlPhoto" />
               -->
                   <label for="currentPassword">changePassword.currentPassword</label>
                   <input type="password" class="form-control" id="currentPassword" required="required" maxlength="64" autocomplete="off" />
                   <!--
                   <span style="color: red;" th:if="fields.hasErrors('currentPassword')" th:errors="currentPassword"></span>
                   -->
               </div>
           </div>
           <div class="row">
               <div class="col-md-6 form-group">
                   <label for="newPassword">changePassword.newPassword</label>
                   <input type="password" class="form-control" id="newPassword" required="required" maxlength="64" autocomplete="off" />
                   <!--
                   <span style="color: red;" th:if="fields.hasErrors('newPassword')" th:errors="newPassword"></span>
                   -->
               </div>
           </div>
           <div class="row">
               <div class="col-md-6 form-group">
                   <label for="confirmNewPassword">changePassword.confirmNewPassword</label>
                   <input type="password" class="form-control" id="confirmNewPassword" required="required" maxlength="64" autocomplete="off" />
                   <!--
                   <span style="color: red;" th:if="fields.hasErrors('confirmNewPassword')" th:errors="confirmNewPassword"></span>
                   -->
               </div>
           </div>
           
       </div>
   </div>
   
   <div id="dlgChangePassword" title="dlgChangePassword.title" style="display: none;">
       <p>changePassword.dlgChangePassword</p>
   </div>
   
</form>

<script src="js/hfsframework/hfsframework-changePassword.js"></script>


@endsection