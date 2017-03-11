@extends('single_post_home')
@section('single_post_sidebar')

<img src="{{url(''.$single_post_info->featured_image)}}" class="img-responsive" alt=""/>
<div class="map_1">
	<div id="map" style="width:100%;height:250px"></div>
	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe> -->
</div>
<table class="condidate_detail">
	<h4>Details</h4>
	<tbody>
		<tr>
			<td>Title</td>
			<td>{{$single_post_info->post_title}}</td>
		</tr>

		<tr>
			<td>Category</td>
			<td>{{ $single_post_info->category->category_name }}</td>
		</tr>

		<tr>
			<td>Location</td>
			<td>Australia</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>(800) 2547-879</td>
		</tr>
		<tr>
			<td>Website</td>
			<td><a href="#">example.com</a></td>
		</tr>
	</tbody>
</table>
<input type="hidden" name="" id="lat" value="{{$single_post_info->post_latitude}}">
<input type="hidden" name="" id="lon" value="{{$single_post_info->post_longitude}}">
<script>
	function myMap() {
		//alert();
		var lat = document.getElementById('lat').value;
		var lon = document.getElementById('lon').value;
		var myCenter = new google.maps.LatLng(lat,lon);
		var mapCanvas = document.getElementById("map");
		var mapOptions = {center: myCenter, zoom: 18};
		var map = new google.maps.Map(mapCanvas, mapOptions);
		var marker = new google.maps.Marker({position:myCenter});
		marker.setMap(map);
	}
</script>





@endsection