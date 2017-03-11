@extends('master')
@section('banner')

<div class="banner">
	<div class="container">
		<div id="search_wrapper">
			<div id="search_form" class="clearfix">
				<h1>Find Your Desired Search</h1>
				{!! Form::open(['url'=>'/search', 'method'=>'POST', 'role'=>'form']) !!}
				<p>
					<input type="text" class="text" name="search_text" placeholder="" value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
					<!-- <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}"> -->
					<select name="search_category" id="" class="text">
						<option value="0">Select A Category</option>
						@foreach($all_category_info as $v_category_info)
						<option value="{{$v_category_info->id}}">{{$v_category_info->category_name}}</option>
						@endforeach
					</select>
					<label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find"></label>
				</p>
				{!! Form::close() !!}
				<h2 class="title">Top Categories &amp; searches</h2>
			</div>
			<div id="city_1" class="clearfix">
				<ul class="orange">
					@foreach($all_category_info as $v_category_info)
					<li><a href="{{url('/category/'.$v_category_info->id)}}" title="">{{$v_category_info->category_name}}</a></li>
					@endforeach
				</ul>
				<ul class="blue">
					@foreach($all_category_info as $v_category_info)
					<li><a href="{{url('/category/'.$v_category_info->id)}}" title="Kenya Jobs">{{$v_category_info->category_name}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div> 
</div>




@endsection