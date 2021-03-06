<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button type="button" id="sidebarCollapse" class="btn btn-info">
        <i class="fas fa-align-left"></i>
    </button>

<a class="navbar-brand" id="anchorHomePage" href="/index.html"  
style="float: left; height: 50px; padding: 5px 5px; font-size: 14px; text-decoration:none">
  <span>main.framework</span><br>
  <span>main.app.title</span>
</a>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navb">
<ul class="navbar-nav mr-auto">

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">menu.administrative</a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="admParameterCategoryView">menu.admParameterCategory</a>
        <a class="dropdown-item" href="private/admParameterView">menu.admParameter</a>
        <a class="dropdown-item" href="private/admPageView">menu.admPage</a>
        <a class="dropdown-item" href="private/admMenuView">menu.admMenu</a>
        <a class="dropdown-item" href="private/admProfileView">menu.admProfile</a>
        <a class="dropdown-item" href="private/admUserView">menu.admUser</a>		
    </div>
  </li>
  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">menu.settings</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="changePassword">menu.changePassword</a>
      <a class="dropdown-item" href="about">menu.about</a>
    </div>
  </li>	  
  <li class="nav-item">
      <a class="nav-link" href="/logout"><img class="inverted-image" src="img/sair.png" />menu.exit</a>
  </li>	
</ul>
    
<div class="form-inline my-2 my-lg-0">

    <small>
        <span>lang.change</span>:
        <select id="locales">
            <option value=""></option>
            <option value="en_US">lang.en_US</option>
            <option value="pt_BR">lang.pt_BR</option>
        </select>	
     
        <span id="infos-user" style="color: lightgray"> 				
            <i class="fas fa-user fa-sm"></i> 
            <a data-toggle="modal" data-target="#infoUserDialog" style="cursor: pointer; cursor: hand; text-decoration: none;">
                sec_auth_name
            </a>
        </span>
    </small>

</div>
</div>

</nav>

<div class="web-content" style="margin:5px 0;">
  @include('fragments.alertMessages')
</div>
@include('fragments.infoUser')
