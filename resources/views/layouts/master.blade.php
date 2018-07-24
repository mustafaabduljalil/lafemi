<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="{{ config('app.locale') }}"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="{{ config('app.locale') }}"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="{{ config('app.locale') }}"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="{{ config('app.locale') }}"><!--<![endif]-->
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('layouts.head')

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body @yield('body-attrs')>
		<!--[if lt IE 9]>
			<p class="browserupgrade alert-error">
				You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
			</p>
		<![endif]-->

		<noscript>
			<div class="noscript alert-error">
				For full functionality of this site it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com/" target="_blank">instructions how to enable JavaScript in your web browser</a>.
			</div>
		</noscript>
		
		@if($header != null)
			@include($header)
		@else
			@include('layouts.default_header')
		@endif

		@yield('content')

		@if($footer != null)
			@include($footer)
		@else
			@include('layouts.default_footer')
		@endif

		<div class="shadow-film closed"></div>

		<!-- SVG ARROW -->
		<svg style="display: none;">	
			<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
				<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
					L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
			</symbol>
		</svg>
		<!-- /SVG ARROW -->

		<!-- SVG STAR -->
		<svg style="display: none;">
			<symbol id="svg-star" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">	
				<polygon points="4.994,0.249 6.538,3.376 9.99,3.878 7.492,6.313 8.082,9.751 4.994,8.129 1.907,9.751 
			2.495,6.313 -0.002,3.878 3.45,3.376 "/>
			</symbol>
		</svg>
		<!-- /SVG STAR -->

		<!-- SVG PLUS -->
		<svg style="display: none;">
			<symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
				<rect x="5" width="3" height="13"/>
				<rect y="5" width="13" height="3"/>
			</symbol>
		</svg>
		<!-- /SVG PLUS -->

		<script>var base_url = "{{ URL::to('/frontend/') }}";</script>
		
		@include('layouts.scripts')
	</body>
</html>