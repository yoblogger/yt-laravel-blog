<?php $page="schedule-timings";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Schedule Timings @endslot
    @slot('li_1') Home @endslot
    @slot('li_2') Schedule Timings @endslot
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
											<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Dr. Darren Elder</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="{{url('doctor-dashboard')}}">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="{{url('appointments')}}">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li>
												<a href="{{url('my-patients')}}">
													<i class="fas fa-user-injured"></i>
													<span>My Patients</span>
												</a>
											</li>
											<li class="active">
												<a href="{{url('schedule-timings')}}">
													<i class="fas fa-hourglass-start"></i>
													<span>Schedule Timings</span>
												</a>
											</li>
											<li>
												<a href="{{url('available-timings')}}">
													<i class="fas fa-clock"></i>
													<span>Available Timings</span>
												</a>
											</li>
											<li>
												<a href="{{url('invoices')}}">
													<i class="fas fa-file-invoice"></i>
													<span>Invoices</span>
												</a>
											</li>
											<li>
												<a href="{{url('accounts')}}">
													<i class="fas fa-file-invoice-dollar"></i>
													<span>Accounts</span>
												</a>
											</li>
											<li>
												<a href="{{url('reviews')}}">
													<i class="fas fa-star"></i>
													<span>Reviews</span>
												</a>
											</li>
											<li>
												<a href="{{url('chat-doctor')}}">
													<i class="fas fa-comments"></i>
													<span>Message</span>
													<small class="unread-msg">23</small>
												</a>
											</li>
											<li>
												<a href="{{url('doctor-profile-settings')}}">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="{{url('social-media')}}">
													<i class="fas fa-share-alt"></i>
													<span>Social Media</span>
												</a>
											</li>
											<li>
												<a href="{{url('doctor-change-password')}}">
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
						 
							<div class="row">
								<div class="col-sm-12">
									<div class="card">
										<div class="card-body">
											<h4 class="card-title">Schedule Timings</h4>
											<div class="profile-box">
												<div class="row">
													<div class="col-lg-4">
														<div class="form-group">               
															<label>Timing Slot Duration</label>
															<select class="select form-control">
																<option>-</option>
																<option>15 mins</option>
																<option selected="selected">30 mins</option>  
																<option>45 mins</option>
																<option>1 Hour</option>
															</select>
														</div>
													</div>

												</div>     
												<div class="row">
													<div class="col-md-12">
														<div class="card schedule-widget mb-0">
														
															<!-- Schedule Header -->
															<div class="schedule-header">
															
																<!-- Schedule Nav -->
																<div class="schedule-nav">
																	<ul class="nav nav-tabs nav-justified">
																		<li class="nav-item">
																			<a class="nav-link" data-bs-toggle="tab" href="{{url('#slot_sunday')}}">Sunday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link active" data-bs-toggle="tab" href="{{url('#slot_monday')}}">Monday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-bs-toggle="tab" href="{{url('#slot_tuesday')}}">Tuesday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-bs-toggle="tab" href="{{url('#slot_wednesday')}}">Wednesday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-bs-toggle="tab" href="{{url('#slot_thursday')}}">Thursday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-bs-toggle="tab" href="{{url('#slot_friday')}}">Friday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-bs-toggle="tab" href="{{url('#slot_saturday')}}">Saturday</a>
																		</li>
																	</ul>
																</div>
																<!-- /Schedule Nav -->
																
															</div>
															<!-- /Schedule Header -->
															
															<!-- Schedule Content -->
															<div class="tab-content schedule-cont">
															
																<!-- Sunday Slot -->
																<div id="slot_sunday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a class="edit-link" data-bs-toggle="modal" href="{{url('#add_time_slot')}}"><i class="fa fa-plus-circle"></i> Add Slot</a>
																	</h4>
																	<p class="text-muted mb-0">Not Available</p>
																</div>
																<!-- /Sunday Slot -->

																<!-- Monday Slot -->
																<div id="slot_monday" class="tab-pane fade show active">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a class="edit-link" data-bs-toggle="modal" href="{{url('#edit_time_slot')}}"><i class="fa fa-edit me-1"></i>Edit</a>
																	</h4>
																	
																	<!-- Slot List -->
																	<div class="doc-times">
																		<div class="doc-slot-list">
																			8:00 pm - 11:30 pm
																			<a href="javascript:void(0)" class="delete_schedule">
																				<i class="fa fa-times"></i>
																			</a>
																		</div>
																		<div class="doc-slot-list">
																			11:30 pm - 1:30 pm
																			<a href="javascript:void(0)" class="delete_schedule">
																				<i class="fa fa-times"></i>
																			</a>
																		</div>
																		<div class="doc-slot-list">
																			3:00 pm - 5:00 pm
																			<a href="javascript:void(0)" class="delete_schedule">
																				<i class="fa fa-times"></i>
																			</a>
																		</div>
																		<div class="doc-slot-list">
																			6:00 pm - 11:00 pm
																			<a href="javascript:void(0)" class="delete_schedule">
																				<i class="fa fa-times"></i>
																			</a>
																		</div>
																	</div>
																	<!-- /Slot List -->
																	
																</div>
																<!-- /Monday Slot -->

																<!-- Tuesday Slot -->
																<div id="slot_tuesday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a class="edit-link" data-bs-toggle="modal" href="{{url('#add_time_slot')}}"><i class="fa fa-plus-circle"></i> Add Slot</a>
																	</h4>
																	<p class="text-muted mb-0">Not Available</p>
																</div>
																<!-- /Tuesday Slot -->

																<!-- Wednesday Slot -->
																<div id="slot_wednesday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a class="edit-link" data-bs-toggle="modal" href="{{url('#add_time_slot')}}"><i class="fa fa-plus-circle"></i> Add Slot</a>
																	</h4>
																	<p class="text-muted mb-0">Not Available</p>
																</div>
																<!-- /Wednesday Slot -->

																<!-- Thursday Slot -->
																<div id="slot_thursday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a class="edit-link" data-bs-toggle="modal" href="{{url('#add_time_slot')}}"><i class="fa fa-plus-circle"></i> Add Slot</a>
																	</h4>
																	<p class="text-muted mb-0">Not Available</p>
																</div>
																<!-- /Thursday Slot -->

																<!-- Friday Slot -->
																<div id="slot_friday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a class="edit-link" data-bs-toggle="modal" href="{{url('#add_time_slot')}}"><i class="fa fa-plus-circle"></i> Add Slot</a>
																	</h4>
																	<p class="text-muted mb-0">Not Available</p>
																</div>
																<!-- /Friday Slot -->

																<!-- Saturday Slot -->
																<div id="slot_saturday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span> 
																		<a class="edit-link" data-bs-toggle="modal" href="{{url('#add_time_slot')}}"><i class="fa fa-plus-circle"></i> Add Slot</a>
																	</h4>
																	<p class="text-muted mb-0">Not Available</p>
																</div>
																<!-- /Saturday Slot -->

															</div>
															<!-- /Schedule Content -->
															
														</div>
													</div>
												</div>
											</div>
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
@component('components.modal-popup') 
@endcomponent   
		
@endsection