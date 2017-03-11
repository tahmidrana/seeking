@extends('dashboard.master')
@section('main_content')

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Dashboard</a>
		<i class="icon-angle-right"></i> 
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">Manage Posts</a>
	</li>
</ul>
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
		<h2><i class="halflings-icon user"></i><span class="break"></span>Applied Jobs</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Serial</th>
						<th>Post Title</th>
						<th style="width: 120px;">Address</th>
						<th>User</th>
						<th>Category</th>
						<th style="width: 120px;">Featured Image</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>   
				<tbody>
				@foreach($all_post as $v_post)
					@if(Auth::user()->role==1)
						@if($v_post->user_id == Auth::user()->id)
							<tr>
								<td>{{ $v_post->id }}</td>
								<td class="center"><a href="">{{ $v_post->post_title }}</a></td>
								<td class="center">{{ $v_post->post_address }}</td>
								<td class="center">{{ Auth::user()->name }}</td>
								<td class="center">{{ $v_post->category->category_name }}</td>
								<td class="center"><img src="{{ $v_post->featured_image }}" alt="" style="width: 50px; height: 50ox;"></td>
								<td class="center">
									@if($v_post->post_status)
									<span class="label label-success">Published</span>
									@else
									<span class="label label-warning">Unpublished</span>
									@endif
								</td>
								<td class="center">
									@if($v_post->post_status == 1)
									<a class="btn btn-warning" href="{{url('/unpublish-post/'.$v_post->id)}}" title="Unpublish Category">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									<a class="btn btn-success" href="{{url('/publish-post/'.$v_post->id)}}" title="Publish Category">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-info" href="{{url('/edit-post/'.$v_post->id)}}" title="Edit Category">
										<i class="halflings-icon white edit"></i>  
									</a>
								</td>
							</tr>
						@endif
					@else
						<tr>
							<td>{{ $v_post->id }}</td>
							<td class="center"><a href="">{{ $v_post->post_title }}</a></td>
							<td class="center">{{ $v_post->post_address }}</td>
							<td class="center">{{ $v_post->user->name }}</td>
							<td class="center">{{ $v_post->category->category_name }}</td>
							<td class="center"><img src="{{ $v_post->featured_image }}" alt="" style="width: 50px; height: 50px;"></td>
							<td class="center">
								@if($v_post->post_status)
								<span class="label label-success">Published</span>
								@else
								<span class="label label-warning">Unpublished</span>
								@endif
							</td>
							<td class="center">
								@if($v_post->post_status == 1)
								<a class="btn btn-warning" href="{{url('/unpublish-post/'.$v_post->id)}}" title="Unpublish Category">
									<i class="halflings-icon white thumbs-down"></i>  
								</a>
								@else
								<a class="btn btn-success" href="{{url('/publish-post/'.$v_post->id)}}" title="Publish Category">
									<i class="halflings-icon white thumbs-up"></i>  
								</a>
								@endif
								<a class="btn btn-info" href="{{url('/edit-post/'.$v_post->id)}}" title="Edit Category">
									<i class="halflings-icon white edit"></i>  
								</a>
							</td>
						</tr>
					@endif
				@endforeach
				</tbody>
			</table>            
		</div>
	</div><!--/span-->

</div><!--/row-->


@endsection