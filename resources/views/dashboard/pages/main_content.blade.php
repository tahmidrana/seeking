@extends('dashboard.master')
@section('main_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{url('/dashboard')}}">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Dashboard</a></li>
</ul>

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
		<h2><i class="halflings-icon user"></i><span class="break"></span>Dashboard</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="">  
				<tbody>
					<tr >
						<td style="padding: 10px;">Name </td>
						<td>{{ $user_info->name }}</td>
					</tr>
					<tr>
						<td style="padding: 10px;">Email </td>
						<td>{{ $user_info->email }}</td>
					</tr>
					<tr>
						<td style="padding: 10px;">User Role </td>
						<td>
						@if($user_info->role == 0)
							Admin
						@else
							Member
						@endif
						</td>
					</tr>
					<tr>
						<td style="padding: 10px;">Status </td>
						<td>
						@if($user_info->status == 1)
							Active
						@else
							Inactive
						@endif
						</td>
					</tr>
				</tbody>
			</table>            
		</div>
	</div><!--/span-->

</div><!--/row-->


@endsection