<!-- jQuery -->
{!! Html::script('frontend/js/vendor/jquery-3.1.0.min.js') !!}

<!-- Tooltipster -->
{!! Html::script('frontend/js/vendor/jquery.tooltipster.min.js') !!}

@hasSection('override_scripts')
	@yield('override_scripts')
@else
	<!-- Owl Carousel -->
	{!! Html::script('frontend/js/vendor/owl.carousel.min.js') !!}

	<!-- Tooltipster -->
	{!! Html::script('frontend/js/vendor/jquery.tooltipster.min.js') !!}

	<!-- Tweet -->
	{!! Html::script('frontend/js/vendor/twitter/jquery.tweet.min.js') !!}

	<!-- xmAlerts -->
	{!! Html::script('frontend/js/vendor/jquery.xmalert.min.js') !!}

	<!-- Side Menu -->
	{!! Html::script('frontend/js/side-menu.js') !!}

	<!-- Home -->
	{!! Html::script('frontend/js/home.js') !!}

	<!-- Tooltip -->
	{!! Html::script('frontend/js/tooltip.js') !!}

	<!-- User Quickview Dropdown -->
	{!! Html::script('frontend/js/user-board.js') !!}

	<!-- Home Alerts -->
	{!! Html::script('frontend/js/home-alerts.js') !!}

	<!-- Footer -->
	{!! Html::script('frontend/js/footer.js') !!}

	<!-- Footer -->
	{!! Html::script('frontend/js/footer.js') !!}
@endif

@yield('scripts')