<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
	<title>@yield('title','Grace Management Console')</title>
	<!-- start: META -->
	<meta charset="utf-8" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta content="The new grace company custom management suite" name="description" />
	<meta content="phillip madsen" name="author" />
	@yield('meta')
			<!-- end: META -->
	<!-- start: MAIN CSS -->
	<link rel ="stylesheet" href="{!! asset('/backend/assets/plugins/bootstrap/css/bootstrap.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('/backend/assets/plugins/font-awesome/css/font-awesome.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('/backend/assets/fonts/style.css') !!}">
	<link rel="stylesheet" href="{!! asset('/backend/assets/css/main.css') !!}">
	<link rel="stylesheet" href="{!! asset('/backend/assets/css/main-responsive.css') !!}">
	<link rel="stylesheet" href="{!! asset('/backend/assets/plugins/iCheck/skins/all.css') !!}">
	<link rel="stylesheet" href="{!! asset('/backend/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') !!}">
	<link rel="stylesheet" href="{!! asset('/backend/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') !!}">
	<link rel="stylesheet" href="{!! asset('/backend/assets/css/theme_light.css') !!}" type="text/css" id="skin_color">
	<link rel="stylesheet" href="{!! asset('/backend/assets/css/print.css') !!}" type="text/css" media="print"/>

	<link href="{!! asset('css/bootstrap-toggle.css') !!}" rel="stylesheet">

	<link rel="stylesheet" href="{!! asset('/backend/assets/plugins/ladda-bootstrap/dist/ladda-themeless.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('/backend/assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch.css') !!}">
	<link rel="stylesheet" href="{!! asset('/backend/assets/plugins/bootstrap-social-buttons/social-buttons-3.css') !!}">


	<script src="{!! url('backend/js/demo.js') !!}" type="text/javascript"></script>

	{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

	<!--[if IE 7]>
	<link rel="stylesheet" href="{!! asset('/backend/assets/plugins/font-awesome/css/font-awesome-ie7.min.css') !!}">
	<![endif]-->
	<!-- end: MAIN CSS -->
	<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
	@yield('ppstyle')
			<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	<link rel="shortcut icon" href="{!! asset('/backend/favicon.ico') !!}" />
	@yield('pphscript')

</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body>
<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top">
	<!-- start: TOP NAVIGATION CONTAINER -->
	<div class="container">
		<div class="navbar-header">
			<!-- start: RESPONSIVE MENU TOGGLER -->
			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				<span class="clip-list-2"></span>
			</button>
			<!-- end: RESPONSIVE MENU TOGGLER -->
			<!-- start: LOGO -->
			<a class="navbar-brand" href="{{ url('/') }}">
				GRACE<i class="clip-clip"></i>ADMIN
			</a>
			<!-- end: LOGO -->
		</div>
		<div class="navbar-tools">
			<!-- start: TOP NAVIGATION MENU -->
			{{-- @include('layouts.partials.header.header') --}}
					<!-- end: TOP NAVIGATION MENU -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->
				@if (Auth::guest())
					<li><a href="{{ url('/login') }}">Login</a></li>
					<li><a href="{{ url('/register') }}">Register</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</div>
	<!-- end: TOP NAVIGATION CONTAINER -->
</div>
<!-- end: HEADER -->
<!-- start: MAIN CONTAINER -->
<div class="main-container">
	<div class="navbar-content">
		<!-- start: SIDEBAR -->

		{{-- @include('layouts.partials.sidebar.admin') --}}
		@yield('sidebar')
	</div>
	<!-- end: SIDEBAR -->
</div>
<!-- start: PAGE -->
<div class="main-content">

	{{-- @include('layouts.partials.panel-config') --}}

			<!-- /.modal -->
	<!-- end: SPANEL CONFIGURATION MODAL FORM -->
	<div class="container">
		<!-- start: PAGE HEADER -->
		<div class="row">
			<div class="col-sm-12">
				<!-- start: STYLE SELECTOR BOX -->
				{{-- @include('layouts.partials.style-selector') --}}
				<!-- end: STYLE SELECTOR BOX -->
				<!-- start: PAGE TITLE & BREADCRUMB -->

				<ol class="breadcrumb">
				    <li><a href="{!! url('/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				    @yield('breadlink1')
				</ol>
				<div class="page-header">
				    <h1>@yield('pagetitle')  <small> | @yield('pt-small', 'Control Panel')</small></h1>
				</div>

				{{-- @yield('pageheader') --}}
						<!-- end: PAGE TITLE & BREADCRUMB -->
			</div>
		</div>
		<!-- end: PAGE HEADER -->
		<!-- start: PAGE CONTENT -->
		{{-- @include('layouts.partials.3-widgets') --}}


		@yield('content')

				<!-- end: PAGE CONTENT-->
	</div>
</div>
<!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->
<!-- start: FOOTER -->
<div class="footer clearfix">
	<div class="footer-inner">
		2016 &copy; Grace Management Suite by phillip madsen.
	</div>
	<div class="footer-items">
		<span class="go-top"><i class="clip-chevron-up"></i></span>
	</div>
</div>
<!-- end: FOOTER -->
@include('backend.layouts.partials.event-management')

		<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
<script src="{!! asset('/backend/assets/plugins/respond.min.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/excanvas.min.js') !!}"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!--<![endif]-->
<script src="{!! asset('/backend/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/blockUI/jquery.blockUI.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/iCheck/jquery.icheck.min.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/less/less-1.5.0.min.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/jquery-cookie/jquery.cookie.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') !!}"></script>
<script src="{!! asset('/backend/assets/js/main.js') !!}"></script>

<script src="{!! asset('/backend/assets/plugins/ladda-bootstrap/dist/spin.min.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/ladda-bootstrap/dist/ladda.min.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js') !!}"></script>
<script src="{!! asset('/backend/assets/js/ui-buttons.js') !!}"></script>


<script src="{!! asset('js/bootstrap-toggle.js') !!}"></script>

{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@yield('ppscript')
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

<script>
	Main.init();
	UIButtons.init();

	@yield('ppinline')
$(document).ready(function(){
		// jQuery(document).ready(function() {
		// $('input').iCheck({
		//   checkboxClass: 'icheckbox_square-blue',
		//   radioClass: 'iradio_square-blue',
		//   increaseArea: '20%' // optional
		// });
	});
</script>
</body>
<!-- end: BODY -->
</html>