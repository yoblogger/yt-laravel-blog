<?php $page="dependent";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Dependent @endslot
    @slot('li_1') Home @endslot
    @slot('li_2') Dependent @endslot
@endcomponent


		<!-- Page Content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">

					<!-- Profile Sidebar -->
					<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
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
										<li class="active">
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
										<li>
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
					</div>
					<!-- / Profile Sidebar -->
					<div class="col-md-7 col-lg-8 col-xl-9">
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col-sm-6">
										<h3 class="card-title">Dependent</h3>
									</div>
									<div class="col-sm-6">
										<div class="text-end">
											<a href="" class="btn btn-primary btn-sm" tabindex="0">Add Dependent</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body ">

								<!-- Dependent Tab -->
								<div class="card card-table mb-0">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-hover table-center mb-0">
												<thead>
													<tr>
														<th>Dependent</th>
														<th>Relationship</th>
														<th>gender</th>
														<th>Number</th>
														<th>Blood Group</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<h2 class="table-avatar">
																<span class="avatar avatar-sm me-2">
																	<img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient16.jpg')}}" alt="User Image">
																</span>
																Christopher
															</h2>
														</td>
														<td>Son</td>
														<td>Male</td>
														<td>303-297-6170</td>
														<td>AB+</td>
														<td>
															<div class="table-action">
																<a href="" class="btn btn-sm bg-info-light">	<i class="fas fa-edit"></i> Edit</a>
																<a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Deactive</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<span class="avatar avatar-sm me-2">
																	<img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient17.jpg')}}" alt="User Image">
																</span>
																Tressie
															</h2>
														</td>
														<td>Daughter</td>
														<td>Female</td>
														<td>360-822-9097</td>
														<td>B+</td>
														<td>
															<div class="table-action">
																<a href="" class="btn btn-sm bg-info-light">	<i class="fas fa-edit"></i> Edit</a>
																<a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Deactive</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<span class="avatar avatar-sm me-2">
																	<img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient18.jpg')}}" alt="User Image">
																</span>
																Champagne
															</h2>
														</td>
														<td>Father</td>
														<td>Male</td>
														<td>720-841-8299</td>
														<td>B+</td>
														<td>
															<div class="table-action">
																<a href="" class="btn btn-sm bg-info-light">	<i class="fas fa-edit"></i> Edit</a>
																<a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Deactive</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<span class="avatar avatar-sm me-2">
																	<img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient19.jpg')}}" alt="User Image">
																</span>
																Vena
															</h2>
														</td>
														<td>Mother</td>
														<td>Male</td>
														<td>949-583-4370</td>
														<td>A+</td>
														<td>
															<div class="table-action">
																<a href="" class="btn btn-sm bg-info-light">	<i class="fas fa-edit"></i> Edit</a>
																<a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Deactive</a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- /Dependent Tab -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Content -->
@component('components.modal-popup') 
@endcomponent   

@endsection