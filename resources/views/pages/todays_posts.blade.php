@extends('master')
@section('todays_posts')
<h3>Todays Seeking</h3>
<ul class="list_1">
	@if(count($all_post_info)>0)
	@foreach($all_post_info as $v_post_info)
	<li><a href="{{url('/view-post/'.$v_post_info->id)}}">{{$v_post_info->post_title}} - {{$v_post_info->category->category_name}}</a></li>
	@endforeach
	@else
	<li><h1>No Posts Today</h1></li>
	@endif					
</ul>

@endsection