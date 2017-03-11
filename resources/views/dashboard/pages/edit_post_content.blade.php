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
		<a href="#">Update Post</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Post</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			{!! Form::open(['url'=>'/update-post', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal', 'role'=>'form']) !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="typeahead">Post Title </label>
						<div class="controls">
							<input type="text" class="span6 typeahead" name="post_title" id="typeahead" value="{{ $all_post->post_title }}" required>
							<input type="hidden" name="post_id" id="" value="{{ $all_post->id }}">
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Address</label>
						<div class="controls">
							<textarea class="span6" id="" name="post_address" rows="">
								{{ $all_post->post_address }}
							</textarea>
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Category</label>
						<div class="controls">
							<select name="post_category" id="" class="span6" required>
								<option value="">Select A Category</option>
								@foreach($all_category as $v_category)
								<option value="{{ $v_category->id }}">{{ $v_category->category_name }}</option>
								@endforeach
							</select>
							
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Description</label>
						<div class="controls">
							<textarea class="span6" id="textarea2" name="post_description" rows="3">
								{{ $all_post->post_description }}
							</textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Location Latitude </label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" name="post_latitude" value="{{ $all_post->post_latitude }}" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Location Longitude </label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" name="post_longitude" value="{{ $all_post->post_longitude }}">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="fileInput">Featured Image</label>
						<div class="controls">
							<input class="input-file uniform_on" id="fileInput" type="file" name="featured_image" required>
							<span><img src="{{asset('').$all_post->featured_image}}" alt="Featured Image" style="width: 50px; height: 50px;"></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Tags </label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" name="post_tags" placeholder="Example: foods,foodshop,kfc" value="{{ $all_post->post_tags }}">
						</div>
						@if(Session::get('message'))
							<span class="alert alert-success">{{ Session::get('message') }}</span>
						@endif
					</div>       
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Update Post</button>
						<button type="reset" class="btn">Cancel</button>
					</div>
				</fieldset>
			{!! Form::close() !!}  

		</div>
	</div><!--/span-->

</div><!--/row-->



@endsection