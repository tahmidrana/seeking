@extends('master')
@section('header_nav')

<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('public/front_assets/images/logo.png')}}" alt=""/></a>
		</div>
		<!--/.navbar-header-->
		<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Seekings<b class="caret"></b></a>
					<ul class="dropdown-menu">
						@foreach($all_category_info as $v_category_info)
						<li><a href="{{url('/category/'.$v_category_info->id)}}">{{ $v_category_info->category_name }}</a></li>
						@endforeach
					</ul>
				</li>
				@if(Auth::check())
				<li><a href="{{url('/dashboard')}}">{{Auth::user()->name}}</a></li>
				@else
				<li><a href="{{url('/')}}">About</a></li>
				<li><a href="{{url('/')}}">Contact</a></li>
				<li><a href="{{url('/login')}}">Login</a></li>
				<li><a href="{{url('/register')}}">Register</a></li>
				@endif
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
	<!--/.navbar-collapse-->
</nav>


@endsection