<nav id="sidebar">
	<div id="dismiss">
		<i class="fas fa-arrow-left"></i>
	</div>

	<div class="sidebar-header">

		<a class="navbar-brand" id="anchorSidebarHomePage"
			href="../index.html"
			style="float: left; height: 50px; padding: 5px 5px; font-size: 22px; text-decoration: none; color: white;">
			<span>main.framework</span>
		</a>

	</div>
	<br>

	<ul class="list-unstyled components">

		<li class="nav-item">
			<a href="#adminSubmenu" data-toggle="collapse" aria-expanded="false"
				class="nav-link dropdown-toggle" style="color: black;"> menu.administrative
			</a>
			<ul class="collapse list-unstyled" id="adminSubmenu">
				<li><a class="dropdown-item" href="admParameterCategoryView">menu.admParameterCategory</a></li>
				<li><a class="dropdown-item" href="private/admParameterView">menu.admParameter</a></li>
				<li><a class="dropdown-item" href="private/admPageView">menu.admPage</a></li>
				<li><a class="dropdown-item" href="private/admMenuView">menu.admMenu</a></li>
				<li><a class="dropdown-item" href="private/admProfileView">menu.admProfile</a></li>
				<li><a class="dropdown-item" href="private/admUserView">menu.admUser</a></li>
			</ul>
		</li>

		<li class="nav-item">
			<a href="#settingsSubmenu" data-toggle="collapse" aria-expanded="false"
				class="nav-link dropdown-toggle" style="color: black;">menu.settings
			</a>
			<ul class="collapse list-unstyled" id="settingsSubmenu">
				<li><a class="dropdown-item" href="changePassword">menu.changePassword</a></li>
				<li><a class="dropdown-item" href="about">menu.about</a></li>
			</ul>
		</li>
		<li><a class="dropdown-item" href="/logout" >
				<img class="inverted-image" src="img/sair.png" />
				menu.exit
		</a></li>

	</ul>

</nav>

<script src="vendor/sidebar/sidebar.js"></script>
