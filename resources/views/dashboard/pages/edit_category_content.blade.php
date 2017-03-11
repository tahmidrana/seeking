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
			{!! Form::open(['url'=>'/update-category', 'role'=>'form', 'method'=>'POST','class'=>'form-horizontal']) !!}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="typeahead">Category Name </label>
						<div class="controls">
							<input type="text" class="span6 typeahead" name="category_name" id="typeahead" value="{{ $category_info->category_name }}">
							<input type="hidden" name="category_id" value="{{ $category_info->id }}">
						</div>
					</div>
					          
					<div class="control-group">
						<label class="control-label" for="textarea2">Category Description</label>
						<div class="controls">
							<textarea name="category_description" class="span6" id="" rows="5">
								{{ $category_info->category_description }}
							</textarea>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Update Category</button>
						<button type="reset" class="btn">Cancel</button>
					</div>
				</fieldset>
			{!! Form::close() !!}

		</div>
	</div><!--/span-->

</div><!--/row-->









@endsection