<!DOCTYPE HTML>
<html>
<head>
	<title>{{ "Seeking | Online Diriectory" }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="{{asset('public/front_assets/css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{asset('public/front_assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/front_assets/js/bootstrap.min.js')}}"></script>
	<!-- Custom Theme files -->
	<link href="{{asset('public/front_assets/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

	<link href="{{asset('public/front_assets/css/font-awesome.css')}}" rel="stylesheet"> 

</head>
<body>

	@yield('header_nav')
	@yield('banner')
	<div class="container">
	  	@yield('featured_employee')
		<div class="single">  
		   	<div class="col-md-4">
				<div class="col_3">
					@yield('todays_posts')
				</div>
				<div class="col_3">
					@yield('all_category')
				</div>
		 	</div>
		   	<div class="col-md-8">
				@yield('main_content')
		   	</div>
		   	<div class="clearfix"> </div>
		</div>
	</div>
	@yield('footer')
</body>
</html>	