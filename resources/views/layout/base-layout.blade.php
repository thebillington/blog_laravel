<!DOCTYPE html>

<html>

    <head>

        <title>@yield('page-title', 'Appoly Blog')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    </head>

    <body>

    	<div id="header">

    		<div id="topImgContainer">
    			<img src="{{ asset('res/header-img.jpg') }}">
    		</div>

    		<div id="navBar">
    			<img class="logo" src="{{ asset('res/logo.png.webp') }}">
    			<ul>
    				<li>About</li>
    				<li>Posts</li>
    			</ul>
    		</div>

    	</div>

    	<div id="contentWrapper">

    		<div id="contentScroll">

    			<div id="content">
    
	        		@yield('page-content')

	        	</div>

	    	</div>

    	</div>

		<div id="footer">
			<p>Made by your boi <a href="http://thebillington.co.uk">Billy Rebecchi</a></p>
		</div>
        
    </body>
    
</html>