@extends('master')
@section('main_content')

@if(count($search_result)>0)

@foreach($search_result as $v_search_result)
<div class="col_1">
    <div class="col-sm-4 row_2">
		<a href="{{url('/view-post/'.$v_search_result->id)}}"><img src="{{asset('').$v_search_result->featured_image}}" class="img-responsive" alt="{{$v_search_result->post_title}}"/></a>
	</div>
	<div class="col-sm-8 row_1">
		<h4><a href="{{url('/view-post/'.$v_search_result->id)}}">{{$v_search_result->post_title}}</a></h4>
		<h6>Posted on <span class="dot">·</span> {{ date("F j, Y", strtotime($v_search_result->created_at)) }}</h6>
		<p>{{$v_search_result->post_description}}</p>
		<div class="social">	
			<a class="btn_1" href="http://facebook.com/">
				<i class="fa fa-facebook fb"></i>
				<span class="share1 fb">Share</span>								
			</a>
			<a class="btn_1" href="http://twitter.com/">
				<i class="fa fa-twitter tw"></i>
				<span class="share1">Tweet</span>								
			</a>
			<a class="btn_1" href="http://plus.google.com/">
				<i class="fa fa-google-plus google"></i>
				<span class="share1 google">Share</span>
			</a>
	   </div>
	</div>
	<div class="clearfix"></div>
</div>
@endforeach
@else
	<h1>No Search Result Found.</h1>
@endif



@endsection