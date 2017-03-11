@extends('single_post_home')
@section('single_post_content')

<h2>{{$single_post_info->post_title}}</h2>
<p style="font-size: 20px; font-weight: bold;">{{ $single_post_info->post_address }}</p>
<p>{{ $single_post_info->post_description }}</p>

<div class="comments">
	<h6>Comments</h6>
	@if(count($all_comments) > 0)
	@foreach($all_comments as $v_comments)
	<div class="media media_1">
		<div class="media-left"><a href="#"> </a></div>
		<div class="media-body">
			<h4 class="media-heading"><a class="author" href="#">{{ $v_comments->post_username }} </a><div class="clearfix"> </div></h4>
			{{ $v_comments->post_comment }}
		</div>
		<div class="clearfix"> </div>
	</div>
	@endforeach
	@else
	<p>No comments on this post yet.</p>
	@endif
</div>

{!! Form::open(['url'=>'/add-comment', 'method'=>'POST', 'role'=>'form']) !!}
	<div class="to">
		<input type="text" class="text" name="comment_user_name" placeholder="Name">
		<input type="hidden" name="post_id" value="{{$single_post_info->id}}">
		<input type="text" class="text" name="comment_user_email" placeholder="Email | Your Email will not be published" style="margin-left:3%">
	</div>
	<div class="text">
		<textarea placeholder="Message" name="comment_text"></textarea>
		<p style="color: red;">
		@foreach($errors->all() as $err)
			{{ '*'.$err }} <br>
		@endforeach
		</p>
	</div>
	<div class="form-submit1">
		<input name="submit" type="submit" id="submit" value="Add Comment"><br>
	</div>
	<div class="clearfix"></div>
{!! Form::close() !!}
<div class="candidates-item">
	<h5>Similar Posts</h5>	
	@if(count($similar_posts)>0)
	@foreach($similar_posts as $v_similar_post)
	<div class="candidate_2"> 	
		<div class="thumb"><img src="{{url(''.$v_similar_post->featured_image)}}" class="img-responsive" alt=""/></div>
		<div class="thumb_desc">
			<h6 class="title"><a href="{{ url('/view-post/'.$v_similar_post->id) }}">{{$v_similar_post->post_title}}</a></h6>
			<span class="meta">{{$v_similar_post->category->category_name}}</span>
			<p class="sm_1">{{ str_limit($v_similar_post->post_description, 200) }}</p>
		</div>
		<div class="clearfix"></div>	
	</div>
	@endforeach
	@else
	<p>No Similar Posts.</p>
	@endif

</div>




@endsection
