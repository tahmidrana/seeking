<!DOCTYPE html>
<html lang="en">
<head>

<!-- start: Meta -->
<meta charset="utf-8">
<title>Seeking Dashboard</title>
<meta name="description" content="Seeking Dashboard">
<meta name="author" content="Dennis Ji">
<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<!-- end: Meta -->

<!-- start: Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end: Mobile Specific -->

<!-- start: CSS -->
<link id="bootstrap-style" href="{{asset('public/admin_assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('public/admin_assets/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
<link id="base-style" href="{{asset('public/admin_assets/css/style.css')}}" rel="stylesheet">
<link id="base-style-responsive" href="{{asset('public/admin_assets/css/style-responsive.css')}}" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
<!-- end: CSS -->


<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link id="ie-style" href="{{asset('public/admin_assets/css/')}}ie.css" rel="stylesheet">
<![endif]-->

<!--[if IE 9]>
<link id="ie9style" href="{{asset('public/admin_assets/css/')}}ie9.css" rel="stylesheet">
<![endif]-->

<!-- start: Favicon -->
<link rel="shortcut icon" href="{{asset('public/admin_assets/img/favicon.ico')}}">
<!-- end: Favicon -->


        
        
</head>

<body>
    @yield('header_nav')

    <div class="container-fluid-full">
        <div class="row-fluid">

            <!-- start: Main Menu -->
            @yield('main_sidebar')
            <!-- end: Main Menu -->

            <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
            </noscript>

            <!-- start: Content -->
            <div id="content" class="span10">

                @yield('main_content')

            </div><!--/.fluid-container-->
            <!-- end: Content -->
        </div><!--/#content.span10-->
    </div><!--/fluid-row-->



    <div class="clearfix"></div>

    <footer>

        <p>
            <span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

        </p>

    </footer>

<!-- start: JavaScript-->

<script src="{{asset('public/admin_assets/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('public/admin_assets/js/jquery-migrate-1.0.0.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.ui.touch-punch.js')}}"></script>

<script src="{{asset('public/admin_assets/js/modernizr.js')}}"></script>

<script src="{{asset('public/admin_assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.cookie.js')}}"></script>

<script src="{{asset('public/admin_assets/js/fullcalendar.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/excanvas.js')}}"></script>
<script src="{{asset('public/admin_assets/js/jquery.flot.js')}}"></script>
<script src="{{asset('public/admin_assets/js/jquery.flot.pie.js')}}"></script>
<script src="{{asset('public/admin_assets/js/jquery.flot.stack.js')}}"></script>
<script src="{{asset('public/admin_assets/js/jquery.flot.resize.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.chosen.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.uniform.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.cleditor.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.noty.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.elfinder.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.raty.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.iphone.toggle.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.uploadify-3.1.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.gritter.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.imagesloaded.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.masonry.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.knob.modified.js')}}"></script>

<script src="{{asset('public/admin_assets/js/jquery.sparkline.min.js')}}"></script>

<script src="{{asset('public/admin_assets/js/counter.js')}}"></script>

<script src="{{asset('public/admin_assets/js/retina.js')}}"></script>

<script src="{{asset('public/admin_assets/js/custom.js')}}"></script>
<!-- end: JavaScript-->

</body>
</html>