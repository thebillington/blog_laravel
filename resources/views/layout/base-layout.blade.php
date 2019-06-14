<!DOCTYPE html>

<html>

    <head>

        <title>@yield('page-title', 'Appoly Blog')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    </head>

    <body>

    	<div id="header">

    		<div id="topImgContainer">
    			<img src="{{ asset('res/header-img.jpg') }}">
    		</div>


    		<div id="navContainer" class="orange-bg">
    			<div class='container'>
		    		<nav class="navbar navbar-expand-lg navbar-light">
		    			<a class="navbar-brand" href="https://appoly.co.uk"><img class="logo" src="{{ asset('res/logo.png.webp') }}"></a>
		    			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
		    			<div class="collapse navbar-collapse" id="navbar">
			    			<ul class="navbar-nav mr-auto">
			    				<li class="nav-item">About</li>
			    				<li class="nav-item">Posts</li>
			    			</ul>
		    			</div>
		    		</nav>
	    		</div>
	    	</div>

    	</div>

    	<div id="contentWrapper">

    		<div class="container">

	    		<div id="contentScroll">

	    			<div id="content">
	    
		        		@yield('page-content')

		        	</div>

		        	<div id="sidebar">



		        	</div>

		    	</div>

		    </div>

    	</div>

		<div id="footer">
			<p>Made by your boi <a href="http://thebillington.co.uk">Billy Rebecchi</a></p>
		</div>
        
    </body>
    
</html>