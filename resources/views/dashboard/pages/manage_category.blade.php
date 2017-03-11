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
		<a href="#">Manage Category</a>
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
						<th>Category Name</th>
						<th>Publication Status</th>
						<th>Action</th>
					</tr>
				</thead>   
				<tbody>
					@foreach($all_category as $v_category)
					<tr>
						<td>{{$v_category->id}}</td>
						<td class="center">{{$v_category->category_name}}</td>
						<td class="center">
							@if($v_category->category_status)
							<span class="label label-success">Published</span>
							@else
							<span class="label label-warning">Unpublished</span>
							@endif
						</td>
						<td class="center">
							@if($v_category->category_status == 1)
							<a class="btn btn-warning" href="{{url('/unpublish-category/'.$v_category->id)}}" title="Unpublish Category">
								<i class="halflings-icon white thumbs-down"></i>  
							</a>
							@else
							<a class="btn btn-success" href="{{url('/publish-category/'.$v_category->id)}}" title="Publish Category">
								<i class="halflings-icon white thumbs-up"></i>  
							</a>
							@endif
							<a class="btn btn-info" href="{{url('/edit-category/'.$v_category->id)}}" title="Edit Category">
								<i class="halflings-icon white edit"></i>  
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>            
		</div>
	</div><!--/span-->

</div><!--/row-->


@endsection