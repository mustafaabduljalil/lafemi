<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

<!-- CSS -->
@hasSection('override_styles')
	@yield('override_styles')
@else
	{!! Html::style('frontend/css/vendor/simple-line-icons.css') !!}
	{!! Html::style('frontend/css/vendor/tooltipster.css') !!}
	{!! Html::style('frontend/css/vendor/owl.carousel.css') !!}
	{!! Html::style('frontend/css/style.css') !!}
	{!! Html::style('frontend/css/custom.css') !!}
@endif

@yield('styles')

<!-- Title -->
<title>{{ setting('site.title') }} @if(View::hasSection('title')) | @yield('title')@endif</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
	]) !!};
</script>

<!-- description -->
<meta name="description" content="@if(View::hasSection('description')) - @yield('description') @else {{ setting('site.description') }} @endif"/>

<!-- keywords -->
<meta name="keywords" content="@if(View::hasSection('keywords')) - @yield('keywords') @else {{ setting('site.keywords') }} @endif"/>

<!-- robots -->
<meta name="Robots" content="ALL"/>

<!-- author -->
<meta name="Author" content="{{ setting('site.name') }}"/>

<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend/images/favicon/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend/images/favicon/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/images/favicon/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/images/favicon/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/images/favicon/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/images/favicon/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend/images/favicon/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend/images/favicon/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/favicon/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('frontend/images/favicon/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('frontend/images/favicon/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/favicon/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('frontend/images/favicon/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('frontend/images/favicon/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">

<!-- Language -->
<meta name="Language" content="{{ app()->getLocale() }}">

<!-- distribution -->
<meta name="distribution" content="global">

<meta name="application-name" content="Homepage">

<!-- facebook -->
<meta property="og:title" content="{{ setting('site.name') }}" />
<meta property="og:description" content="{{ setting('site.description') }}" />
<meta property="og:type" content="website" />
<meta property="og:image" content="{{ setting('site.logo') }}"/>
<meta property="og:site_name" content="{{ setting('site.name') }}" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="800" />
<meta property="og:image:height" content="600" />
<meta property="og:url" content="{{ request()->fullUrl() }}"/>

@if(setting('social.facebook'))
<meta property="article:author" content="{{ setting('social.facebook') }}"/>
@endif

<meta property="og:locale" content="{{ app()->getLocale() }}"/>

<!--Twitter Tags-->
<meta name="twitter:card" content="summary"/>
<meta name="twitter:site" content="{{ '@' . setting('social.twitter') }}"/>
<meta name="twitter:title" content="Homepage"/>
<meta name="twitter:description" content="@yield('description', setting('site.description'))"/>
<meta name="twitter:image" content="{{ setting('site.logo') }}"/>

<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">