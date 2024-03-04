<?php error_reporting(0);?>

@if(Route::is(['map-grid','map-list']))
<!-- Loader -->
<div id="loader">
		<div class="loader">
			<span></span>
			<span></span>
		</div>
	</div>
<!-- /Loader  -->
	@endif

<div class="main-wrapper">
	@if(Route::is(['index-4']))	
<!--Top Header -->
<div class="header-top header-top-three">
	<div class="left-top ">
		<ul>
			<li><i class="fas fa-map-marker-alt top-icon"></i>123, washington street, uk</li>
			<li><i class="fas fa-phone-volume top-icon"></i>+19 123-456-7890</li>
			<li><i class="fas fa-envelope top-icon"></i>mail@yourdomain.com</li>
		</ul>
	</div>
	<div class="right-top right-top-links">
		<ul>
			<li><a href="#" target="_blank"><i class="fab fa-facebook-f top-icons"></i></a>
			</li>
			<li><a href="#" target="_blank"><i class="fab fa-instagram top-icons"></i></a>
			</li>
			<li><a href="#" target="_blank"><i class="fab fa-linkedin-in top-icons"></i></a>
			</li>
			<li><a href="#" target="_blank"><i class="fab fa-twitter top-icons"></i></a>
			</li>
		</ul>
	</div>
</div>
<!--/Top Header -->
@endif
<!-- Header -->
<header class="header">
	<nav class="navbar navbar-expand-lg header-nav">
		<div class="navbar-header">
			<a id="mobile_btn" href="javascript:void(0);">
				<span class="bar-icon">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</a>
			<a href="{{url('/')}}" class="navbar-brand logo">
				<img src="{{ URL::asset('/assets/img/logo3.png')}}" class="img-fluid" alt="Logo">
			</a>
		</div>
		<div class="main-menu-wrapper">
			<div class="menu-header">
				<a href="{{url('/')}}" class="menu-logo">
					<img src="{{ URL::asset('/assets/img/logo3.png')}}" class="img-fluid" alt="Logo">
				</a>
				<a id="menu_close" class="menu-close" href="javascript:void(0);">
					<i class="fas fa-times"></i>
				</a>
			</div>
			<ul class="main-nav">
				
			{{-- <li class="has-submenu <?php if($page=="index" || $page=="index-1" || $page=="index-2" || $page=="index-3" || $page=="index-5"|| $page=="index-4" || $page=="index-6" || $page=="index-7" || $page=="index-8" || $page=="index-9" || $page=="index-10" || $page=="index-11" || $page=="index-12" || $page=="index-13" || $page=="index-14") { echo 'active'; } ?>">
					<a href="">Home <i class="fas fa-chevron-down"></i></a>
					<ul class="submenu">
					<li class="<?php if($page=="index") { echo 'active'; } ?>">
					<a href="{{url('index')}}">Home</a>
				    </li>
					<li class="<?php if($page=="index-2") { echo 'active'; } ?>"><a href="{{url('index-2')}}">Home 2</a></li>
					<li class="<?php if($page=="index-3") { echo 'active'; } ?>"><a href="{{url('index-3')}}">Home 3</a></li>
					<li class="<?php if($page=="index-4") { echo 'active'; } ?>"><a href="{{url('index-4')}}">Home 4</a></li>
					<li class="<?php if($page=="index-5") { echo 'active'; } ?>"><a href="{{url('index-5')}}">Home 5</a></li>
					<li class="<?php if($page=="index-6") { echo 'active'; } ?>"><a href="{{url('index-6')}}">Home 6</a></li>
					<li class="<?php if($page=="index-7") { echo 'active'; } ?>"><a href="{{url('index-7')}}">Home 7</a></li>
					<li class="<?php if($page=="index-8") { echo 'active'; } ?>"><a href="{{url('index-8')}}">Home 8</a></li>
					<li class="<?php if($page=="index-9") { echo 'active'; } ?>"><a href="{{url('index-9')}}">Home 9</a></li>
					<li class="<?php if($page=="index-10") { echo 'active'; } ?>"><a href="{{url('index-10')}}">Home 10</a></li>
					<li class="<?php if($page=="index-11") { echo 'active'; } ?>"><a href="{{url('index-11')}}">Home 11</a></li>
					<li class="<?php if($page=="index-12") { echo 'active'; } ?>"><a href="{{url('index-12')}}">Home 12</a></li>
					<li class="<?php if($page=="index-13") { echo 'active'; } ?>"><a href="{{url('index-13')}}">Home 13</a></li>
					<li class="<?php if($page=="index-14") { echo 'active'; } ?>"><a href="{{url('index-14')}}">Home 14</a></li>
					</ul>
				</li> --}}

				{{-- <li class="has-submenu <?php if($page=="reviews" || $page=="register" || $page=="doctor-dashboard" || $page=="appointments" || $page=="schedule-timings" || $page=="my-patients" || $page=="patient-profile" || $page=="chat-doctor" || $page=="doctor-profile-settings" || $page=="doctor-add-blog" || $page=="doctor-blog" || $page=="doctor-pending-blog" || $page=="edit-blog" || $page=="edit-prescription" || $page=="add-prescription" || $page=="edit-billing" || $page=="add-billing") { echo 'active'; } ?>">
					<a href="">Doctors <i class="fas fa-chevron-down"></i></a>
					<ul class="submenu">
						<li class="<?php if($page=="doctor-dashboard") { echo 'active'; } ?>"><a href="{{url('doctor-dashboard')}}">Doctor Dashboard</a></li>
						<li class="<?php if($page=="appointments") { echo 'active'; } ?>"><a href="{{url('appointments')}}">Appointments</a></li>
						<li class="<?php if($page=="schedule-timings") { echo 'active'; } ?>"><a href="{{url('schedule-timings')}}">Schedule Timing</a></li>
						<li class="<?php if($page=="my-patients") { echo 'active'; } ?>"><a href="{{url('my-patients')}}">Patients List</a></li>
						<li class="<?php if($page=="patient-profile" || $page=="add-prescription" || $page=="edit-prescription" || $page=="add-billing" || $page=="edit-billing") { echo 'active'; } ?>"><a href="{{url('patient-profile')}}">Patients Profile</a></li>
						<li class="<?php if($page=="chat-doctor") { echo 'active'; } ?>"><a href="{{url('chat-doctor')}}">Chat</a></li>
						<li class="<?php if($page=="invoices") { echo 'active'; } ?>"><a href="{{url('invoices')}}">Invoices</a></li>
						<li class="<?php if($page=="doctor-profile-settings") { echo 'active'; } ?>"><a href="{{url('doctor-profile-settings')}}">Profile Settings</a></li>
						<li class="<?php if($page=="reviews") { echo 'active'; } ?>"><a href="{{url('reviews')}}">Reviews</a></li>
						<li class="<?php if($page=="register") { echo 'active'; } ?>"><a href="{{url('doctor-register')}}">Doctor Register</a></li>
						<li class="has-submenu <?php if($page=="doctor-add-blog" || $page=="doctor-blog" || $page=="doctor-pending-blog" || $page=="edit-blog") { echo 'active'; } ?>">
							<a href="{{url('doctor-blog')}}">Blog</a>
							<ul class="submenu">
								<li class="<?php if($page=="doctor-blog" || $page=="doctor-pending-blog" || $page=="edit-blog") { echo 'active'; } ?>"><a href="{{url('doctor-blog')}}">Blog</a></li>
								<li><a href="{{url('blog-details')}}">Blog view</a></li>
								<li class="<?php if($page=="doctor-add-blog") { echo 'active'; } ?>"><a href="{{url('doctor-add-blog')}}">Add Blog</a></li>
							</ul>
						</li>
					</ul>
				</li>		 --}}
				
				{{-- <li class="has-submenu <?php if($page=="map-grid" || $page=="map-list" || $page=="map-list-1" || $page=="search" || $page=="doctor-profile" || $page=="booking" || $page=="checkout" || $page=="booking-success" || $page=="patient-dashboard" || $page=="favourites" || $page=="chat" || $page=="profile-settings" || $page=="change-password") { echo 'active'; } ?>">
					<a href="">Patients <i class="fas fa-chevron-down"></i></a>
					<ul class="submenu">
						<li class="has-submenu <?php if($page=="map-grid" || $page=="map-list" || $page=="map-list-1" ) { echo 'active'; } ?>">
							<a href="#">Doctors</a>
							<ul class="submenu">
								<li class="<?php if($page=="map-grid") { echo 'active'; } ?>"><a href="{{url('map-grid')}}">Map Grid</a></li>
								<li class="<?php if($page=="map-list") { echo 'active'; } ?>"><a href="{{url('map-list')}}">Map List</a></li>
								<li class="<?php if($page=="map-list-1") { echo 'active'; } ?>"><a href="{{url('map-list-1')}}">Map List 1</a></li>
							</ul>
						</li>
						<li class="<?php if($page=="search") { echo 'active'; } ?>"><a href="{{url('search')}}">Search Doctor</a></li>
						<li class="<?php if($page=="doctor-profile") { echo 'active'; } ?>"><a href="{{url('doctor-profile')}}">Doctor Profile</a></li>
						<li class="<?php if($page=="booking") { echo 'active'; } ?>"><a href="{{url('booking')}}">Booking</a></li>
						<li class="<?php if($page=="checkout") { echo 'active'; } ?>"><a href="{{url('checkout')}}">Checkout</a></li>
						<li class="<?php if($page=="booking-success") { echo 'active'; } ?>"><a href="{{url('booking-success')}}">Booking Success</a></li>
						<li class="<?php if($page=="patient-dashboard") { echo 'active'; } ?>"><a href="{{url('patient-dashboard')}}">Patient Dashboard</a></li>
						<li class="<?php if($page=="favourites") { echo 'active'; } ?>"><a href="{{url('favourites')}}">Favourites</a></li>
						<li class="<?php if($page=="chat") { echo 'active'; } ?>"><a href="{{url('chat')}}">Chat</a></li>
						<li class="<?php if($page=="profile-settings") { echo 'active'; } ?>"><a href="{{url('profile-settings')}}">Profile Settings</a></li>
						<li class="<?php if($page=="change-password") { echo 'active'; } ?>"><a href="{{url('change-password')}}">Change Password</a></li>
					</ul>
				</li> --}}
				{{-- <li class="has-submenu <?php if($page=="cart" || $page=="payment-success" || $page=="pharmacy-details" || $page=="pharmacy-index" || $page=="pharmacy-search" || $page=="product-all" || $page=="product-checkout" || $page=="product-description" || $page=="pharmacy-register") { echo 'active'; } ?>">
					<a href="">Pharmacy <i class="fas fa-chevron-down"></i></a>
					<ul class="submenu">
						<li class="<?php if($page=="pharmacy-index") { echo 'active'; } ?>"><a href="{{url('pharmacy-index')}}">Pharmacy</a></li>
						<li class="<?php if($page=="pharmacy-details") { echo 'active'; } ?>"><a href="{{url('pharmacy-details')}}">Pharmacy Details</a></li>
						<li class="<?php if($page=="pharmacy-search") { echo 'active'; } ?>"><a href="{{url('pharmacy-search')}}">Pharmacy Search</a></li>
						<li class="<?php if($page=="product-all") { echo 'active'; } ?>"><a href="{{url('product-all')}}">Product</a></li>
						<li class="<?php if($page=="product-description") { echo 'active'; } ?>"><a href="{{url('product-description')}}">Product Description</a></li>
						<li class="<?php if($page=="cart") { echo 'active'; } ?>"><a href="{{url('cart')}}">Cart</a></li>
						<li  class="<?php if($page=="product-checkout") { echo 'active'; } ?>"><a href="{{url('product-checkout')}}">Product Checkout</a></li>
						<li class="<?php if($page=="payment-success") { echo 'active'; } ?>"><a href="{{url('payment-success')}}">Payment Success</a></li>
						<li class="<?php if($page=="pharmacy-register") { echo 'active'; } ?>"><a href="{{url('pharmacy-register')}}">Pharmacy Register</a></li>
						
					</ul>
				</li> --}}


				{{-- <li class="has-submenu <?php if($page=="voice-call" || $page=="video-call" || $page=="search1" || $page=="onboarding-email" || $page=="patient-email" || $page=="calendar" || $page=="components" || $page=="invoices" || $page=="invoice-view" || $page=="blank-page" || $page=="about-us" || $page=="contact-us" || $page=="login" || $page=="register1" || $page=="forgot-pswd") { echo 'active'; } ?>">
					<a href="">Pages <i class="fas fa-chevron-down"></i></a>
					<ul class="submenu">
						<li class="<?php if($page=="voice-call") { echo 'active'; } ?>"><a href="{{url('voice-call')}}">Voice Call</a></li>
						<li class="<?php if($page=="video-call") { echo 'active'; } ?>"><a href="{{url('video-call')}}">Video Call</a></li>
						<li class="<?php if($page=="search1") { echo 'active'; } ?>"><a href="{{url('search')}}">Search Doctors</a></li>
						<li class="<?php if($page=="calendar") { echo 'active'; } ?>"><a href="{{url('calendar')}}">Calendar</a></li>
						<li class="<?php if($page=="onboarding-email") { echo 'active'; } ?>"><a href="{{url('onboarding-email')}}">Doctor Onboarding</a></li>
						<li class="<?php if($page=="patient-email") { echo 'active'; } ?>"><a href="{{url('patient-email')}}">Patient Onboarding</a></li>
						<li class="<?php if($page=="components") { echo 'active'; } ?>"><a href="{{url('components')}}">Components</a></li>
						<li class="has-submenu <?php if($page=="invoices" || $page=="invoice-view") { echo 'active'; } ?>">
							<a href="{{url('invoices')}}">Invoices</a>
							<ul class="submenu">
								<li class="<?php if($page=="invoices") { echo 'active'; } ?>"><a href="{{url('invoices')}}">Invoices</a></li>
								<li class="<?php if($page=="invoice-view") { echo 'active'; } ?>"><a href="{{url('invoice-view')}}">Invoice View</a></li>
							</ul>
						</li>
						<li class="<?php if($page=="blank-page") { echo 'active'; } ?>"><a href="{{url('blank-page')}}">Starter Page</a></li>
						<li class="<?php if($page=="about-us") { echo 'active'; } ?>"><a href="{{url('about-us')}}">About-Us</a></li>
						<li class="<?php if($page=="contact-us") { echo 'active'; } ?>"><a href="{{url('contact-us')}}">Contact-Us</a></li>
						<li class="<?php if($page=="login") { echo 'active'; } ?>"><a href="{{url('login')}}">Login</a></li>
						<li class="<?php if($page=="register1") { echo 'active'; } ?>"><a href="{{url('register')}}">Register</a></li>
						<li class="<?php if($page=="forgot-pswd") { echo 'active'; } ?>"><a href="{{url('forgot-password')}}">Forgot Password</a></li>
					</ul>
				</li> --}}

				<li class="has-submenu <?php if($page=="blog-list" || $page=="blog-grid" || $page=="blog-details") { echo 'active'; } ?>">
                <a href="">Blog <i class="fas fa-chevron-down"></i></a>
                <ul class="submenu">
                    <li class="<?php if($page=="blog-list") { echo 'active'; } ?>"><a href="{{url('blog-list')}}">Blog List</a></li>
                    <li class="<?php if($page=="blog-grid") { echo 'active'; } ?>"><a href="{{url('blog-grid')}}">Blog Grid</a></li>
                    <li class="<?php if($page=="blog-details") { echo 'active'; } ?>"><a href="{{url('blog-details')}}">Blog Details</a></li>
                </ul>
            </li>


			<li class="has-submenu">
					<a href="#" target="_blank">Admin <i class="fas fa-chevron-down"></i></a>
					<ul class="submenu">
						<li><a href="{{url('admin/login')}}" target="_blank">Admin</a></li>
						{{-- <li><a href="{{url('pharmacy-admin/login')}}" target="_blank">Pharmacy Admin</a></li> --}}
					</ul>
				</li>
			<!-- <li>
					<a href="{{route('pagee')}}" target="_blank">Admin</a>
				</li> -->
			</ul>		 
		</div>		 
		<ul class="nav header-navbar-rht">
			<li class="nav-item contact-item">
				
				@if(Route::is(['index-slide','page','cart','blank-page','term-condition','privacy-policy','blog-details','blog-grid','blog-list','forgot-password','register','login','invoice-view','doctor-register','components','calendar','map-grid','map-list','search','doctor-profile','booking','checkout','booking-success','payment-success','pharmacy-details','pharmacy-index','pharmacy-search','product-all','product-checkout','product-description','product-healthcare','pharmacy-register','about-us','contact-us','index-3','index-4','index-6']))
				<li class="nav-item">
				<a class="nav-link header-login" href="{{url('login')}}">login / Signup </a>
				</li>
				@endif
			</li>
			@if(Route::is(['chat','patient-dashboard','favourites','video-call','profile-settings','change-password','voice-call','dependent','medical-details','medical-records','membership-details','orders-list','patient-accounts']))
			<li class="nav-item dropdown has-arrow logged-item">
				<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
					<span class="user-img">
						<img class="rounded-circle" src="{{ URL::asset('/assets/img/patients/patient.jpg')}}" width="31" alt="Ryan Taylor">
					</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<div class="user-header">
						<div class="avatar avatar-sm">
							<img src="{{ URL::asset('/assets/img/patients/patient.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
						</div>
						<div class="user-text">
							<h6>Richard Wilson</h6>
							<p class="text-muted mb-0">Patient</p>
						</div>
					</div>
					<a class="dropdown-item" href="{{url('patient-dashboard')}}">Dashboard</a>
					<a class="dropdown-item" href="{{url('profile-settings')}}">Profile Settings</a>
					<a class="dropdown-item" href="{{url('login')}}">Logout</a>
				</div>
			</li>
			@endif
			@if(!Route::is(['index-slide','chat','page','cart','blank-page','term-condition','privacy-policy','blog-details','blog-grid','blog-list','forgot-password','register','login','calendar','invoice-view','components','change-password','video-call','doctor-register','voice-call','favourites','map-grid','profile-settings','map-list','search','patient-dashboard','doctor-profile','booking','checkout','booking-success','payment-success','pharmacy-details','pharmacy-index','pharmacy-search','product-all','product-checkout','product-description','product-healthcare','dependent','medical-details','medical-records','membership-details','orders-list','patient-accounts','pharmacy-register','about-us','contact-us','index-3','index-4','index-6']))
			<!-- User Menu -->
			<li class="nav-item dropdown has-arrow logged-item">
				<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
					<span class="user-img">
						<img class="rounded-circle" src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" width="31" alt="Darren Elder">
					</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<div class="user-header">
						<div class="avatar avatar-sm">
							<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
						</div>
						<div class="user-text">
							<h6>Author</h6>
							<p class="text-muted mb-0">{{ $userData->name }}</p>
						</div>
					</div>
					<a class="dropdown-item" href="{{url('doctor-dashboard')}}">Dashboard</a>
					<a class="dropdown-item" href="{{url('doctor-profile-settings')}}">Profile Settings</a>
					<a class="dropdown-item" href="{{url('login')}}">Logout</a>
				</div>
			</li>
			<!-- /User Menu -->
			@endif
			@if(Route::is(['cart']))
			<li class="nav-item view-cart-header me-3">
			<a href="#" class="" id="cart"><i class="fas fa-shopping-cart"></i> <small class="unread-msg1">7</small></a>		<!-- Shopping Cart -->
				<div class="shopping-cart">
					<ul class="shopping-cart-items list-unstyled">
						<li class="clearfix">
							<div class="close-icon"><i class="far fa-times-circle"></i></div>
						    <img class="avatar-img rounded" src="{{ URL::asset('/assets/img/products/product.jpg')}}" alt="User Image">
						    <span class="item-name">Benzaxapine Croplex</span>
						    <span class="item-price">$849.99</span>
						    <span class="item-quantity">Quantity: 01</span>
						</li>

						<li class="clearfix">
							<div class="close-icon"><i class="far fa-times-circle"></i></div>
						    <img class="avatar-img rounded" src="{{ URL::asset('/assets/img/products/product1.jpg')}}" alt="User Image">
						    <span class="item-name">Ombinazol Bonibamol</span>
						    <span class="item-price">$1,249.99</span>
						    <span class="item-quantity">Quantity: 01</span>
						</li>

						<li class="clearfix">
							<div class="close-icon"><i class="far fa-times-circle"></i></div>
						    <img class="avatar-img rounded" src="{{ URL::asset('/assets/img/products/product2.jpg')}}" alt="User Image">
						    <span class="item-name">Dantotate Dantodazole</span>
						    <span class="item-price">$129.99</span>
						    <span class="item-quantity">Quantity: 01</span>
						</li>
					</ul>
					<div class="booking-summary pt-3">
						<div class="booking-item-wrap">
							<ul class="booking-date">
								<li>Subtotal <span>$5,877.00</span></li>
								<li>Shipping <span>$25.00</span></li>
								<li>Tax <span>$0.00</span></li>
								<li>Total <span>$5.2555</span></li>
							</ul>
							<div class="booking-total">
								<ul class="booking-total-list text-align">
									<li>
										<div class="clinic-booking pt-4">
											<a class="apt-btn" href="{{url('cart')}}">View Card</a>
										</div>
									</li>
									<li>
										<div class="clinic-booking pt-4">
											<a class="apt-btn" href="{{url('product-checkout')}}">Checkout</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /Shopping Cart -->	
			</li>
			@endif
		</ul>
	</nav>
</header>
<!-- /Header -->
				


		