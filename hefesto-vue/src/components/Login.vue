<template>
<div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" id="anchorHomePage" href="/login.html">
            <span>{{msg.main_framework}}</span>&nbsp;
            <span>{{msg.main_app_title}}</span>
        </a>
    </nav>
<!--
    <div ng:if="${loginError}" class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>	  	
        <span th:text="#{login.wrongUser}" th:remove="tag"></span>
    </div>

    <div th:replace="fragments/alertMessages :: alertMessages"></div>
-->
    <div class="container-fluid" style="margin: 0 auto; width:400px; position: float;">
    <div id="tela-login" style="margin-top: 20px;">
        <div class="card" id="tela-login">
            <div class="card-header" style="font-weight: normal;">login.title</div>
            <div class="card-body">
            
                <form name="formLogin" action="/login.html" method="POST">
                            
                    <div class="form-group">
                        <label for="username">login.username</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" disabled="disabled">
                                    <i class="fas fa-user fa-sm"></i>
                                </button>
                            </div>	
                            <input type="text" class="form-control" name="username" id="username" autofocus required="required" 
                                placeholder="login.username.placeholder" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">login.password</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" disabled="disabled">
                                    <i class="fas fa-lock fa-sm"></i>
                                </button>	
                            </div>	
                            <input type="password" class="form-control" name="password" id="password" required="required"
                                placeholder="login.password.placeholder" autocomplete="off" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="remember-me">login.rememberme</label>						
                        <input type="checkbox" name="remember-me" id="remember-me" />
                    </div>
                    <div class="form-group">
                        <div style="margin: 0 auto; width:40%">
                            <button type="submit" class="btn btn-success btn-icon-split" id="btnLogin">
                                <span class="icon text-white-50">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                                </span>
                                <span class="text">login.button</span>
                            </button>
                        </div>
                    </div>
                
                </form>	
                
            </div>
            <div class="card-footer">
                <a id="anchorForgotPassword" href="#" style="float: left;"><span>login.forgotPassword</span></a>
                
                <button type="button" class="btn btn-primary btn-icon-split" id="btnBecomeMember" style="float: right;">
                    <span class="text">login.becomeMember</span>								
                </button>
            </div>						
        </div>
    </div>	
    </div>
<!--
    <div th:replace="fragments/footer :: footer"></div>

    <script th:src="@{/js/hfsframework/hfsframework-login.js}"></script>

    <div th:replace="fragments/becomeMember :: becomeMember"></div>

    <div th:replace="fragments/forgotPassword :: forgotPassword"></div>
-->
</div>
</template>

<script lang="ts">
import { Component, Prop, Vue } from 'vue-property-decorator';

@Component
export default class Login extends Vue {
  public msg = {
    main_framework: 'HFS',
    main_app_title: 'Hefesto',
  };
}
</script>
