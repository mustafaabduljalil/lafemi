@extends('layouts.master')

@section('content')
	<!-- SECTION HEADLINE -->
	<div class="section-headline-wrap v3">
		<div class="section-headline">
			<h2>Profile Settings</h2>
			<p>Home<span class="separator">/</span>Profile Settings</p>
		</div>
	</div>
	<!-- /SECTION HEADLINE -->

	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section">
			<form id="edit_profile_form" method="post" action="{{ route('save_provider_profile_editing') }}" role="form" novalidate enctype="multipart/form-data">
				@csrf

				<!-- SIDEBAR -->
				<div class="sidebar right">
					<!-- SIDEBAR ITEM -->
					<div class="sidebar-item void buttons">
						<a href="#" class="button big secondary-dark purchase">
							<span class="currency">260</span>
							<span class="primary">Order Service!</span>
						</a>
						<a href="#" class="button big secondary wfav">
							<span class="icon-heart"></span>
							<span class="fav-count">652</span>
							Add to Favourites
						</a>
					</div>
					<!-- /SIDEBAR ITEM -->

					<!-- SIDEBAR ITEM -->
					<div class="sidebar-item author-bio v2">
						<h4>Service Author</h4>
						<hr class="line-separator">
						<!-- USER AVATAR -->
						<a href="user-profile.html" class="user-avatar-wrap medium">
							<figure class="user-avatar medium">
								<img src="images/avatars/avatar_14.jpg" alt="">
							</figure>
						</a>
						<!-- /USER AVATAR -->
						<p class="text-header">Jenny_Block</p>
						<p class="text-oneline">Lorem ipsum dolor sit amet,<br> consectetur sicing elit.</p>
						<!-- SHARE LINKS -->
						<ul class="share-links">
							<li><a href="#" class="fb"></a></li>
							<li><a href="#" class="twt"></a></li>
							<li><a href="#" class="db"></a></li>
							<li><a href="#" class="rss"></a></li>
						</ul>
						<!-- /SHARE LINKS -->
						<a href="#" class="button mid dark spaced">Go to <span class="secondary">Profile Page</span></a>
						<a href="#" class="button mid dark-light">Send a Private Message</a>
					</div>
					<!-- /SIDEBAR ITEM -->

					<!-- SIDEBAR ITEM -->
					<div class="sidebar-item product-info">
						<h4>Service Information</h4>
						<hr class="line-separator">
						<!-- INFORMATION LAYOUT -->
						<div class="information-layout">
							<!-- INFORMATION LAYOUT ITEM -->
							<div class="information-layout-item">
								<p class="text-header">Service Started:</p>
								<p>October 21st, 2014</p>
							</div>
							<!-- /INFORMATION LAYOUT ITEM -->

							<!-- INFORMATION LAYOUT ITEM -->
							<div class="information-layout-item">
								<p class="text-header">Response Time:</p>
								<p>2 Business Days</p>
							</div>
							<!-- /INFORMATION LAYOUT ITEM -->

							<!-- INFORMATION LAYOUT ITEM -->
							<div class="information-layout-item">
								<p class="text-header">Included Revisions:</p>
								<p>Up to 5</p>
							</div>
							<!-- /INFORMATION LAYOUT ITEM -->

							<!-- INFORMATION LAYOUT ITEM -->
							<div class="information-layout-item">
								<p class="tags secondary"><a href="#">professional</a>, <a href="#">logos</a>, <a href="#">brand</a>, <a href="#">company</a>, <a href="#">clean</a>, <a href="#">vector</a>, <a href="#">illustrator</a>, <a href="#">template</a>, <a href="#">visual</a>, <a href="#">cartoon</a>, <a href="#">mockup</a></p>
							</div>
							<!-- /INFORMATION LAYOUT ITEM -->
						</div>
						<!-- INFORMATION LAYOUT -->
					</div>
					<!-- /SIDEBAR ITEM -->

					<!-- SIDEBAR ITEM -->
					<div class="sidebar-item author-reputation full">
						<h4>Author's Reputation</h4>
						<hr class="line-separator">
						<!-- PIE CHART -->
						<div class="pie-chart pie-chart1">
							<p class="text-header percent">86<span>%</span></p>
							<p class="text-header percent-info">Recommended</p>
							<!-- RATING -->
							<ul class="rating">
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item empty">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
							<!-- /RATING -->
						</div>
						<!-- /PIE CHART -->
						<a href="#" class="button mid dark-light">Read all the Customer Reviews</a>
					</div>
					<!-- /SIDEBAR ITEM -->

					<!-- SIDEBAR ITEM -->
					<div class="sidebar-item author-items">
						<h4>Other Author's Services</h4>
						<!-- PRODUCT LIST -->
						<div class="product-list grid column4-wrap">
							<!-- PRODUCT ITEM -->
							<div class="product-item column">
								<!-- PRODUCT PREVIEW ACTIONS -->
								<div class="product-preview-actions">
									<!-- PRODUCT PREVIEW IMAGE -->
									<figure class="product-preview-image">
										<img src="images/items/logos_m.jpg" alt="product-image">
									</figure>
									<!-- /PRODUCT PREVIEW IMAGE -->

									<!-- PREVIEW ACTIONS -->
									<div class="preview-actions">
										<!-- PREVIEW ACTION -->
										<div class="preview-action">
											<a href="service-page.html">
												<div class="circle tiny primary">
													<span class="icon-tag"></span>
												</div>
											</a>
											<a href="service-page.html">
												<p>Go to Item</p>
											</a>
										</div>
										<!-- /PREVIEW ACTION -->

										<!-- PREVIEW ACTION -->
										<div class="preview-action">
											<a href="#">
												<div class="circle tiny secondary">
													<span class="icon-heart"></span>
												</div>
											</a>
											<a href="#">
												<p>Favourites +</p>
											</a>
										</div>
										<!-- /PREVIEW ACTION -->
									</div>
									<!-- /PREVIEW ACTIONS -->
								</div>
								<!-- /PRODUCT PREVIEW ACTIONS -->

								<!-- PRODUCT INFO -->
								<div class="product-info">
									<a href="service-page.html">
										<p class="text-header">Professional Corporate Logos</p>
									</a>
									<p class="product-description">Lorem ipsum dolor sit urarde...</p>
									<a href="services.html">
										<p class="category secondary">Graphic Design</p>
									</a>
									<p class="price"><span>$</span>260</p>
								</div>
								<!-- /PRODUCT INFO -->
								<hr class="line-separator">

								<!-- USER RATING -->
								<div class="user-rating">
									<a href="author-profile.html">
										<figure class="user-avatar small">
											<img src="images/avatars/avatar_14.jpg" alt="user-avatar">
										</figure>
									</a>
									<a href="author-profile.html">
										<p class="text-header tiny">Jenny_Block</p>
									</a>
									<ul class="rating tooltip" title="Author's Reputation">
										<li class="rating-item">
											<!-- SVG STAR -->
											<svg class="svg-star">
												<use xlink:href="#svg-star"></use>
											</svg>
											<!-- /SVG STAR -->
										</li>
										<li class="rating-item">
											<!-- SVG STAR -->
											<svg class="svg-star">
												<use xlink:href="#svg-star"></use>
											</svg>
											<!-- /SVG STAR -->
										</li>
										<li class="rating-item">
											<!-- SVG STAR -->
											<svg class="svg-star">
												<use xlink:href="#svg-star"></use>
											</svg>
											<!-- /SVG STAR -->
										</li>
										<li class="rating-item">
											<!-- SVG STAR -->
											<svg class="svg-star">
												<use xlink:href="#svg-star"></use>
											</svg>
											<!-- /SVG STAR -->
										</li>
										<li class="rating-item empty">
											<!-- SVG STAR -->
											<svg class="svg-star">
												<use xlink:href="#svg-star"></use>
											</svg>
											<!-- /SVG STAR -->
										</li>
									</ul>
								</div>
								<!-- /USER RATING -->
							</div>
							<!-- /PRODUCT ITEM -->
						</div>
						<!-- /PRODUCT LIST -->
						<div class="clearfix"></div>
					</div>
					<!-- /SIDEBAR ITEM -->
				</div>
				<!-- /SIDEBAR -->

				<!-- CONTENT -->
				<div class="content left">
					<div class="section-wrap">
						<!-- FORM POPUP -->
						<div class="form-popup" style="width:100%;">
	                        @if($errors->any())
	                          <div class="alert alert-danger">
	                              <ul>
	                                  @foreach ($errors->all() as $error)
	                                      <li>{{ $error }}</li>
	                                  @endforeach
	                              </ul>
	                          </div>
	                        @endif

	                        @if (Session::get('success'))
	                            <div class="alert alert-success">
	                                <p>{{ Session::get('success') }}</p>
	                            </div>
	                        @endif  

							<!-- FORM POPUP CONTENT -->
							<div class="form-popup-content">
								<h4 class="popup-title">Basic profile information</h4>
								<!-- LINE SEPARATOR -->

								<hr class="line-separator">
								<!-- /LINE SEPARATOR --> 

								<div class="form-group">
				                    <label for="name" class="rl-label required">Name</label>
				                    <input value="{{ Auth::user()->name }}" data-parsley-required-message="Please enter your name" data-parsley-required="true" type="text" id="name" name="name" placeholder="Enter your name here...">
			                    
                                    @if ($errors->has('name'))
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">
                                                {{ $errors->first('name') }}
                                            </li>
                                        </ul>
                                    @endif
			                    </div>

								<div class="form-group">
				                    <label for="email" class="rl-label required">Email Adress</label>
				                    <input value="{{ Auth::user()->email }}" data-parsley-type="email" data-parsley-type-message="Sorry but this is not valid email address" data-parsley-required-message="Please enter your email address" data-parsley-required="true" type="email" id="email" name="email" placeholder="Enter your email address here...">
			                    
                                    @if ($errors->has('email'))
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">
                                                {{ $errors->first('email') }}
                                            </li>
                                        </ul>
                                    @endif
			                    </div>

								<div class="form-group">
				                    <label for="password" class="rl-label required">Password</label>
				                    <input type="password" id="password" name="password" placeholder="Enter your password here...">
			                    
                                    @if ($errors->has('password'))
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">
                                                {{ $errors->first('password') }}
                                            </li>
                                        </ul>
                                    @endif
			                    </div>

			       				<div class="form-group">
				                    <label for="confirm_password" class="rl-label required">Confirm password</label>
				                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter your password confirmation here...">
			                    
                                    @if ($errors->has('name'))
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">
                                                {{ $errors->first('name') }}
                                            </li>
                                        </ul>
                                    @endif
			                    </div>

								<h4 class="popup-title">Provider business information</h4>
								<!-- LINE SEPARATOR -->

								<hr class="line-separator">
								<!-- /LINE SEPARATOR --> 

								<div class="form-group">
				                    <label for="business_name" class="rl-label required">Business Name</label>
				                    <input data-parsley-required-message="Please enter business name" data-parsley-required="true" type="text" id="business_name" value={{ Auth::user()->business_name }} name="business_name" placeholder="Enter your business name here...">
			                    
                                    @if ($errors->has('business_name'))
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">
                                                {{ $errors->first('business_name') }}
                                            </li>
                                        </ul>
                                    @endif
			                    </div>

			                    <div class="form-group">
									<label for="short_description" class="rl-label required">Short Description</label>
									<input data-parsley-required-message="Please enter business short description" data-parsley-required="true" row="4" cols="6" type="text" id="short_description" name="short_description" value={{ Auth::user()->short_description }} placeholder="Enter short description about your business hours here..."></textarea>
								
                                    @if ($errors->has('short_description'))
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">
                                                {{ $errors->first('short_description') }}
                                            </li>
                                        </ul>
                                    @endif
								</div>

								<div class="form-group">
				               		<label for="business_hours" class="rl-label required">Business Hours</label>
				                    <input data-parsley-required-message="Please enter business hours" data-parsley-required="true" type="text" id="business_hours" value={{ Auth::user()->business_hours }} name="business_hours" placeholder="Enter your business hours here...">
			                    
                                    @if ($errors->has('business_hours'))
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">
                                                {{ $errors->first('business_hours') }}
                                            </li>
                                        </ul>
                                    @endif
			                    </div>

			                    <div class="form-group">
				               		<label for="city" class="rl-label required">City</label>
				                    <input data-parsley-required-message="Please enter city name" data-parsley-required="true" type="text" id="city" value={{ Auth::user()->city }} name="city" placeholder="Enter your city name here...">
			                    
                                    @if ($errors->has('city'))
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">
                                                {{ $errors->first('city') }}
                                            </li>
                                        </ul>
                                    @endif
			                    </div>

			                    <div class="form-group">
									<label for="avatar" class="rl-label required">Profile Image</label>
									<input type="file" id="profile_image" name="profile_image" placeholder="Upload your profile image" />
								
                                    @if ($errors->has('avatar'))
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">
                                                {{ $errors->first('avatar') }}
                                            </li>
                                        </ul>
                                    @endif
								</div>

								<div class="form-group">
									<button type="submit" class="button mid dark">Edit <span class="primary">Profile Settings</span></button>
								</div>
							</div>
							<!-- /FORM POPUP CONTENT -->
						</div>
						<!-- /FORM POPUP -->

						<div class="clearfix"></div>
					</div>
				</div>
				<!-- CONTENT -->
			</form>
		</div>
	</div>
	<!-- /SECTION -->
@endsection

@section('styles')
	{!! Html::style('frontend/css/parsley.css') !!}
@endsection

@section('scripts')
	{!! Html::script('frontend/js/parsley.min.js') !!}

	<script type="text/javascript">
		$('#edit_profile_form').parsley().destroy();
		$('#edit_profile_form').parsley();
	</script>
@endsection