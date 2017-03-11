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
		<a href="#">Add Category</a>
	</li>
</ul>


<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			{!! Form::open(['url'=>'/add-new-category', 'role'=>'form', 'method'=>'POST','class'=>'form-horizontal']) !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="typeahead">Category Name </label>
						<div class="controls">
							<input type="text" class="span6 typeahead" name="category_name" id="typeahead">
							<span style="color: red;">
							@if($errors->has('category_name'))
								{{ $errors->first('category_name') }}
							@endif
							</span>
						</div>
					</div>
					          
					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Category Description</label>
						<div class="controls">
							<textarea name="category_description" class="span6" id="" rows="5"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Category Status </label>
						<div class="controls">
							<select name="category_status" id="typeahead" class="span6 typeahead">
								<option value="">Select Category Status</option>
								<option value="1">Published</option>
								<option value="0">Unpublished</option>
							</select>
							<span style="color: red;">
							@if($errors->has('category_status'))
								{{ $errors->first('category_status') }}
							@endif
							</span>
						</div>
						@if(Session::get('message'))
							<span class="alert alert-success">{{ Session::get('message') }}</span>
						@endif
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Add Category</button>
						<button type="reset" class="btn">Cancel</button>
					</div>
				</fieldset>
			{!! Form::close() !!}

		</div>
	</div><!--/span-->

</div><!--/row-->









@endsection