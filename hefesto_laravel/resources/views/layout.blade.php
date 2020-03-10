<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hefesto @yield('title')</title>
    @include('fragments.header')
</head>
<body>
    <div class="wrapper">
        @include('private.menu-sidebar')
        <div id="content">
            @include('private.menu-horizontal')
            <div class="web-content">

                @yield('body')
                
			</div>            
        </div>
    </div>

    <div class="overlay"></div>	

</body>
</html>