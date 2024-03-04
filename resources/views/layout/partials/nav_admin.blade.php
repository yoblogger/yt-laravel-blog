<!-- Sidebar -->
<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							{{-- <li class="menu-title"> 
								<span>Main</span>
							</li> --}}
							{{-- <li class="{{ Request::is('admin/index_admin') ? 'active' : '' }}"> 
								<a href="{{url('admin/index_admin')}}"><i class="feather-grid"></i> <span>Dashboard</span></a>
							</li> --}}
							{{-- <li class="{{ Request::is('admin/appointment-list','admin/past-appointments','admin/upcoming-appointments') ? 'active' : '' }}"> 
								<a href="{{url('admin/upcoming-appointments')}}"><i class="feather-calendar"></i> <span>Appointments</span></a>
							</li> --}}
							{{-- <li  class="{{ Request::is('admin/specialities') ? 'active' : '' }}"> 
								<a href="{{url('admin/specialities')}}"><i class="feather-package"></i> <span>Specialities</span></a>
							</li>
							<li  class="{{ Request::is('admin/doctor-list') ? 'active' : '' }}"> 
								<a href="{{url('admin/doctor-list')}}"><i class="feather-user-plus"></i> <span>Doctors</span></a>
							</li>
							<li  class="{{ Request::is('admin/patient-list') ? 'active' : '' }}"> 
								<a href="{{url('admin/patient-list')}}"><i class="feather-users"></i> <span>Patients</span></a>
							</li>
							<li  class="{{ Request::is('admin/reviews','admin/ratings') ? 'active' : '' }}"> 
								<a href="{{url('admin/ratings')}}"><i class="feather-star"></i> <span>Reviews</span></a>
							</li>
							<li  class="{{ Request::is('admin/transaction') ? 'active' : '' }}"> 
								<a href="{{url('admin/transaction')}}"><i class="feather-credit-card"></i> <span>Transactions</span></a>
							</li>
							<li   class="{{ Request::is('admin/settings','admin/email-settings','admin/login-settings','admin/payment-gateway','admin/setting-notifications','admin/setting-preference','admin/sms-gateway') ? 'active' : '' }}"> 
								<a href="{{url('admin/settings')}}"><i class="feather-sliders"></i> <span>Settings</span></a>
							</li>
							<li class="submenu {{ Request::is('admin/appointment-report','admin/income-report','admin/invoice-report','admin/user-reports') ? 'active' : '' }}">
								<a href="#"><i class="feather-file-text"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="{{ Request::is('admin/appointment-report') ? 'active' : '' }}" href="{{ url('admin/appointment-report') }}">Appointment Report</a></li>
									<li><a class="{{ Request::is('admin/income-report') ? 'active' : '' }}" href="{{ url('admin/income-report') }}">Income Report</a></li>
									<li><a class="{{ Request::is('admin/invoice-report') ? 'active' : '' }}" href="{{ url('admin/invoice-report') }}">Invoice Reports</a></li>
									<li><a class="{{ Request::is('admin/user-reports') ? 'active' : '' }}" href="{{ url('admin/user-reports') }}">Users Report</a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Pharmacy</span>
							</li>	
							<li class="submenu {{ Request::is('admin/pharmacy-list','admin/pharmacy-category') ? 'active' : '' }}">
								<a href="#"><i class="feather-file-plus"></i> <span> Pharmacies</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a class="{{ Request::is('admin/pharmacy-list') ? 'active' : '' }}" href="{{ url('admin/pharmacy-list') }}">All Pharmacies</a></li>
									<li><a class="{{ Request::is('admin/pharmacy-category') ? 'active' : '' }}" href="{{ url('admin/pharmacy-category') }}">Categories</a></li>
								</ul>
							</li> --}}
							{{-- <li class="submenu {{ Request::is('admin/product-list','admin/product-category') ? 'active' : '' }}">
								<a href="#"><i class="feather-shopping-cart"></i> <span> Product List</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a class="{{ Request::is('admin/product-list') ? 'active' : '' }}" href="{{ url('admin/product-list') }}">All Products</a></li>
									<li><a class="{{ Request::is('admin/product-category') ? 'active' : '' }}" href="{{ url('admin/product-category') }}">Categories</a></li>
								</ul>
							</li>		 --}}
							<li class="menu-title"> 
								<span>Blog</span>
							</li>
							<li class="submenu {{ Request::is('admin/blog','admin/active-blog','admin/add-blog','admin/edit-blog','admin/blog-details','admin/pending-blog') ? 'active' : '' }}">
								<a href="#"><i class="feather-grid"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="{{ Request::is('admin/blog','admin/active-blog','admin/pending-blog') ? 'active' : '' }}" href="{{ url('admin/active-blog') }}"> Blogs </a></li>
									<li><a class="{{ Request::is('admin/blog-details') ? 'active' : '' }}" href="{{ url('admin/blog-details') }}"> Blog Details</a></li>
									<li><a class="{{ Request::is('admin/add-blog') ? 'active' : '' }}" href="{{ url('admin/add-blog') }}"> Add Blog </a></li>
									<li><a class="{{ Request::is('admin/edit-blog') ? 'active' : '' }}" href="{{ url('admin/edit-blog') }}"> Edit Blog </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							<li class="{{ Request::is('admin/product-category') ? 'active' : '' }}"> 
								<a href="{{url('admin/product-category')}}"><i class="feather-user"></i> <span>Categories</span></a>
							</li>
							{{-- <li class="{{ Request::is('admin/add-profile','admin/profile') ? 'active' : '' }}"> 
								<a href="{{url('admin/add-profile')}}"><i class="feather-user"></i> <span>Profile</span></a>
							</li> --}}
							
							{{-- <li class="submenu">
								<a href="#"><i class="feather-lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a  class="{{ Request::is('admin/login') ? 'active' : '' }}" href="{{ url('admin/login') }}"> Login </a></li>
									<li><a  class="{{ Request::is('admin/register') ? 'active' : '' }}" href="{{ url('admin/register') }}"> Register </a></li>
									<li><a  class="{{ Request::is('admin/forgot-password') ? 'active' : '' }}" href="{{ url('admin/forgot-password') }}"> Forgot Password </a></li>
									<li><a  class="{{ Request::is('admin/lock-screen') ? 'active' : '' }}" href="{{ url('admin/lock-screen') }}"> Lock Screen </a></li>
								</ul>
							</li> --}}
							{{-- <li class="submenu">
								<a href="#"><i class="feather-book-open"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="{{ Request::is('admin/error-404') ? 'active' : '' }}" href="{{ url('admin/error-404') }}">404 Error </a></li>
									<li><a class="{{ Request::is('admin/error-500') ? 'active' : '' }}" href="{{ url('admin/error-500') }}">500 Error </a></li>
								</ul>
							</li> --}}
							{{-- <li  class="{{ Request::is('admin/blank-page','admin/calendar') ? 'active' : '' }}"> 
								<a href="{{url('admin/blank-page')}}"><i class="feather-clipboard"></i> <span>Blank Page</span></a>
							</li> --}}
							{{-- <li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li class="{{ Request::is('admin/components') ? 'active' : '' }}"> 
								<a href="{{url('admin/components')}}"><i class="feather-pocket"></i> <span>Components</span></a>
							</li>
							<li class="submenu {{ Request::is('admin/form-basic-inputs','admin/form-input-groups','admin/form-horizontal','admin/form-vertical','admin/form-mask','admin/form-validation') ? 'active' : '' }}">
								<a href="#"><i class="feather-file-minus"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="{{ Request::is('admin/form-basic-inputs') ? 'active' : '' }}" href="{{ url('admin/form-basic-inputs') }}">Basic Inputs </a></li>
									<li><a class="{{ Request::is('admin/form-input-groups') ? 'active' : '' }}" href="{{ url('admin/form-input-groups') }}">Input Groups </a></li>
                                    <li><a class="{{ Request::is('admin/form-horizontal') ? 'active' : '' }}" href="{{ url('admin/form-horizontal') }}">Horizontal Form</a></li>
									<li><a class="{{ Request::is('admin/form-vertical') ? 'active' : '' }}" href="{{ url('admin/form-vertical') }}"> Vertical Form </a></li>
									<li><a class="{{ Request::is('admin/form-mask') ? 'active' : '' }}" href="{{ url('admin/form-mask') }}"> Form Mask </a></li>
									<li><a class="{{ Request::is('admin/form-validation') ? 'active' : '' }}" href="{{ url('admin/form-validation') }}"> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu {{ Request::is('admin/tables-basic','admin/data-tables') ? 'active' : '' }}">
								<a href="#"><i class="feather-align-justify"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="{{ Request::is('admin/tables-basic') ? 'active' : '' }}" href="{{ url('admin/tables-basic') }}">Basic Tables </a></li>
									<li><a class="{{ Request::is('admin/data-tables') ? 'active' : '' }}" href="{{ url('admin/data-tables') }}">Data Table </a></li>
								</ul>
							</li> --}}
							{{-- <li class="submenu">
								<a href="javascript:void(0);"><i class="feather-life-buoy"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul style="display: none;">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li> --}}
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->