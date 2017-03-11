@extends('master')
@section('all_category')

<h3>Category</h3>
<ul class="list_2">
	@foreach($all_category_info as $v_category_info)
	<li><a href="{{url('/category/'.$v_category_info->id)}}">{{$v_category_info->category_name}}</a></li>
	@endforeach								
</ul>

@endsection