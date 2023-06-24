<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Landing Page</title>
</head>
<body>
	<style>
			
			
  @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Montserrat:wght@400;600;800&display=swap');


		*{
			margin: 0px;
			padding: 0px;
		}
         
		 body{
			
			 background-color: rgba(203, 171, 171, 1);
			 
		 }
		 .premium{
			background-image: url("premium.png");
			background-size: 100% auto;
			background-repeat: no-repeat; 
			height: 400px;
		 }
		 .navbar{
			 background-color: rgba(196, 152, 149, 1);
			 box-shadow: 0px 7px 18px -9px rgba(255,255,255,0.75);
 -webkit-box-shadow: 0px 7px 18px -9px rgba(255,255,255,0.75);
 -moz-box-shadow: 0px 7px 18px -9px rgba(255,255,255,0.75);
		 }
		 .budget{
			 font-family: 'Mochiy Pop P One', sans-serif;
		 }
		 .rec{
			 width: 100px;
			 height:100px;
			 color: azure;
		 }
		 .mid{
			 margin-top: 75px
		 }
		 .plan{
			 font-family: 'Mochiy Pop P One', sans-serif;
		 }
		 .free{
			 font-family: 'Montserrat', sans-serif;
			 font-weight: 600;
			 margin-top: 15px;
		 }
	   .color-bar{
		 height: 1px;
		 width: 30%;
		 background-color: rgba(234, 92, 82, 1);
	   }
	   .offer{
		 background-color: rgba(217, 217, 217, 1);
		 border-radius: 10px;
	   }
	   .tag{
			font-family: 'Montserrat', sans-serif;
			 font-weight: 600;
			 font-size: 75px;
		
			 
	   }
	   .desc{
		font-family: 'Montserrat', sans-serif;
		font-weight: 400;
		font-size: 32px;
	   }
	   .deskripsi{
		font-family: 'Montserrat', sans-serif;
	   }
       .login{
           text-decoration: none;
           color: white;
           font-family: 'Montserrat', sans-serif;
       }
       .register{
            text-decoration: none;
           color: white;
           font-family: 'Montserrat', sans-serif;
       }
	</style>



<nav class="navbar navbar-expand-lg text-white">
	<a class="navbar-brand ms-3" href="#">
		<img src="group.png" alt="Logo" width="35" height="33" class="d-inline-block align-text-top">
	  </a>
	   <a class="nav-link active" aria-current="page" href="#"><h4 class="text-white mt-1 budget">Budget Planner</h4></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
</div>
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
	@if (Route::has('login'))
		<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
			@auth
				<a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
			@else
				<a href="{{ route('login') }}" class="login">Log in</a>
                    |
				@if (Route::has('register'))
					<a href="{{ route('register') }}" class="register me-4">Register</a>
				@endif
			@endauth
		</div>
	@endif
</nav>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="premium">
				<div class="col-md-6">
					<h1 class="tag ms-2">Make Great Financial Decisions</h1>
				</div>
				<div class="col-md-12 mt-5">
					<p class="desc ms-2">Plan for today and tomorrow with one solution to manage all your finances.</p>
				</div>
			</div>
		</div>
		<div class="col-md-8 mt-4 deskripsi">
			<p>
				Budgeting helps you to feel in control of your money. Setting up a budget gives you a clear picture of your income and expenses. It can help you spend less and save more to achieve your money goals Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aut velit laborum quaerat aliquid, veritatis odit veniam repudiandae inventore placeat maxime, molestias eum quia excepturi. 
			</p>
		</div>
	</div>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

