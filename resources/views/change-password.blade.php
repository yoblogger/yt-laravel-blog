<?php $page="change-password";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Change Password @endslot
    @slot('li_1') Home @endslot
    @slot('li_2') Change Password @endslot
@endcomponent
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Richard Wilson</h3>
											<div class="patient-details">
												<h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
												<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="{{url('patient-dashboard')}}">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="{{url('favourites')}}">
													<i class="fas fa-bookmark"></i>
													<span>Favourites</span>
												</a>
											</li>
											<li>
												<a href="{{url('dependent')}}">
													<i class="fas fa-users"></i>
													<span>Dependent</span>
												</a>
											</li>
											<li>
												<a href="{{url('chat')}}">
													<i class="fas fa-comments"></i>
													<span>Message</span>
													<small class="unread-msg">23</small>
												</a>
											</li>
											<li>
												<a href="{{url('patient-accounts')}}">
													<i class="fas fa-file-invoice-dollar"></i>
													<span>Accounts</span>
												</a>
											</li>
											<li>
												<a href="{{url('orders-list')}}">
													<i class="fas fa-list-alt"></i>
													<span>Orders</span>
                                                    <small class="unread-msg">7</small>
												</a>
											</li>
											<li>
												<a href="{{url('medical-records')}}">
													<i class="fas fa-clipboard"></i>
													<span>Add Medical Records</span>
												</a>
											</li>
											<li>
												<a href="{{url('medical-details')}}">
													<i class="fas fa-file-medical-alt"></i>
													<span>Medical Details</span>
												</a>
											</li>
											<li>
												<a href="{{url('profile-settings')}}">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li class="active">
												<a href="{{url('change-password')}}">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="{{url('index')}}">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
							<!-- /Profile Sidebar -->
							
						</div>
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12 col-lg-6">
										
											<!-- Change Password Form -->
											<form>
												<div class="form-group">
													<label>Old Password</label>
													<input type="password" class="form-control">
												</div>
												<div class="form-group">
													<label>New Password</label>
													<input type="password" class="form-control">
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" class="form-control">
												</div>
												<div class="submit-section">
													<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
												</div>
											</form>
											<!-- /Change Password Form -->
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>		
            <!-- /Page Content -->
</div>

@endsection