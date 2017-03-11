@extends('master')
@section('featured_employee')


<div class="grid_1">
<h3>Featured Employers</h3>
   <ul id="flexiselDemo3">
      <li><img src="{{asset('public/front_assets/images/c1.gif')}}"  class="img-responsive" /></li>
	  <li><img src="{{asset('public/front_assets/images/c2.gif')}}"  class="img-responsive" /></li>
	  <li><img src="{{asset('public/front_assets/images/c3.gif')}}"  class="img-responsive" /></li>
	  <li><img src="{{asset('public/front_assets/images/c4.gif')}}"  class="img-responsive" /></li>
	  <li><img src="{{asset('public/front_assets/images/c5.gif')}}"  class="img-responsive" /></li>
	  <li><img src="{{asset('public/front_assets/images/c6.gif')}}"  class="img-responsive" /></li>	
    </ul>
    <script type="text/javascript">
	 $(window).load(function() {
		$("#flexiselDemo3").flexisel({
			visibleItems: 6,
			animationSpeed: 1000,
			autoPlay:false,
			autoPlaySpeed: 3000,    		
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
	    	responsiveBreakpoints: { 
	    		portrait: { 
	    			changePoint:480,
	    			visibleItems: 1
	    		}, 
	    		landscape: { 
	    			changePoint:640,
	    			visibleItems: 2
	    		},
	    		tablet: { 
	    			changePoint:768,
	    			visibleItems: 3
	    		}
	    	}
	    });
	    
	});
   </script>
   <script type="text/javascript" src="{{asset('public/front_assets/js/jquery.flexisel.js')}}"></script>
</div>


@endsection