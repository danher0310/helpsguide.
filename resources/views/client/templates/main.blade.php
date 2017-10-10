<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title', 'Default') | HelpsGuide</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap-grid.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/stylesPerso.css') }}">
	<link rel="stylesheet"  href="{{ asset('plugins/bootstrap/font/css/font-awesome.min.css') }}">
	


</head>
<body>
	


	<div class="container" id="head">
		
		<img class="d-block img-fluid rounded mx-auto " src="{{ asset('images/logo/helpsguide.png') }}" width="650" height="150"></img>


	</div>

	<div class="container-fluid" >
	<div class="row">
		<div class="col">
				<nav class="navbar navbar-toggleable-md  bg-faded" id="menu">
				  <button class="navbar-toggler navbar-toggler-right navbar-inverse " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <a class="navbar-brand hidden-lg-up" href="#">Menu</a>
				  <div class="collapse navbar-collapse" id="navbarNavDropdown">
						    <ul class="navbar-nav">
						      <li class="nav-item active">
						        <a class="nav-link" href="{{ route('guest.index') }}">
						        <i class="fa fa-home fa-fw" aria-hidden="true"></i>Home 
						        <span class="sr-only">(current)</span>
						        </a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="">About Us</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">How offert</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Benefis</a>
						      </li>
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Services 
						        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="submenu">
						          <a class="dropdown-item" href="#">Help</a>
						          <a class="dropdown-item" href="#">Another action</a>
						          <a class="dropdown-item" href="#">Something else here</a>
					        </div>
					      </li>
					    </ul>	
					    <form class="form-inline" id="search-bar">
			    			 <div class="input-group">
		      					<input type="text" class="o " id="search" placeholder="Search"   >
		      					<span class="input-group-btn">
		       					 <button class="btn btn-secondary" type="button">
		       					 <i class="fa fa-search" aria-hidden="true"></i>
								</button>
		      					</span>
		    				</div>
		    				
		    			</form>	
		    				 <ul class="nav navbar-nav navbar-right" id="login">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->user }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" id="submenu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                      <li> <a href="" title="">Offert Services</a> </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
			 			 			
				  	</div>
				</nav>
		</div>
	</div>
</div>
		
	


	<section class="section-admin">

	<div class="panel panel-defaul">
		<div class="panel-heading">
			
		</div>

	<div class="panel-body">

		
		
		@yield('content')


	</div>
		
		</div>

	</section>
	
	  		

	  </section>

	   <footer class="bg-faded text-center py-5" id="footer">
        <div class="container">
            <p class="m-0">Copyright Helsguide</p>
           <p class="m-0">Visit our Social Networt</p>
        </div>
    </footer>
	
  
				
    

	<script src="{{ asset('plugins/jquery/js/jquery-3.2.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>