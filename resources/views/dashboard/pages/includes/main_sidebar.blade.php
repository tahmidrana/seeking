@extends('dashboard.master')
@section('main_sidebar')

<div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="{{url('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>  
            <li><a href="{{url('/new-post')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> Add Post</span></a></li>
            <li><a href="{{url('/manage-post')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Manage Post</span></a></li>   
            @if(Auth::user()->role == 0)
            <li><a href="{{url('/new-category')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add Category</span></a></li>
            <li><a href="{{url('/manage-category')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> Manage Category</span></a></li>
            <!-- <li><a href="{{url('/manage-members')}}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Manage Members</span></a></li> -->
            @endif
        </ul>
    </div>
</div>



@endsection