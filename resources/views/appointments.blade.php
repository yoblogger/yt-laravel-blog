<?php $page="appointments";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Appointments @endslot
    @slot('li_1') Home @endslot
    @slot('li_2') Appointments @endslot
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
											<li class="active">
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
											<li>
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
							<div class="appointments">
							
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
										<a href="{{url('patient-profile')}}" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="{{url('patient-profile')}}">Richard Wilson</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 14 Nov 2019, 10.00 AM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Newyork, United States</h5>
												<h5><i class="fas fa-envelope"></i> richard@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 923 782 4575</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
								<!-- /Appointment List -->
							
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
										<a href="{{url('patient-profile')}}" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient1.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="{{url('patient-profile')}}">Charlene Reed </a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 12 Nov 2019, 5.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> North Carolina, United States</h5>
												<h5><i class="fas fa-envelope"></i> charlenereed@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 828 632 9170</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
										<a href="{{url('patient-profile')}}" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient2.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="{{url('patient-profile')}}">Travis Trimble</a></h3>
											
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 11 Nov 2019, 8.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Maine, United States</h5>
												<h5><i class="fas fa-envelope"></i> travistrimble@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 207 729 9974</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
										<a href="{{url('patient-profile')}}" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient3.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="{{url('patient-profile')}}">Carl Kelly</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 9 Nov 2019, 9.00 AM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Newyork, United States</h5>
												<h5><i class="fas fa-envelope"></i> carlkelly@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 260 724 7769</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
										<a href="{{url('patient-profile')}}" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient4.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="{{url('patient-profile')}}">Michelle Fairfax</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 9 Nov 2019, 1.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Indiana, United States</h5>
												<h5><i class="fas fa-envelope"></i> michellefairfax@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 504 368 6874</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
									
										<a href="{{url('patient-profile')}}" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient5.jpg')}}" alt="User Image">
										</a>
										
										<div class="profile-det-info">
											<h3><a href="{{url('patient-profile')}}">Gina Moore</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 8 Nov 2019, 3.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Florida, United States</h5>
												<h5><i class="fas fa-envelope"></i> ginamoore@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 954 820 7887</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
										<a href="{{url('patient-profile')}}" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient6.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="{{url('patient-profile')}}">Elsie Gilley</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 6 Nov 2019, 9.00 AM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Kentucky, United States</h5>
												<h5><i class="fas fa-envelope"></i> elsiegilley@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 315 384 4562</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
										<a href="{{url('patient-profile')}}" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient7.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="{{url('patient-profile')}}">Joan Gardner</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 5 Nov 2019, 12.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> California, United States</h5>
												<h5><i class="fas fa-envelope"></i> joangardner@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 707 2202 603</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
										<a href="{{url('patient-profile')}}" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient8.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="{{url('patient-profile')}}">Daniel Griffing</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 5 Nov 2019, 7.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> New Jersey, United States</h5>
												<h5><i class="fas fa-envelope"></i> danielgriffing@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 973 773 9497</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
										<a href="{{url('patient-profile')}}" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient9.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="{{url('patient-profile')}}">Walter Roberson</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 4 Nov 2019, 10.00 AM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Florida, United States</h5>
												<h5><i class="fas fa-envelope"></i> walterroberson@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 850 358 4445</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
								
										<a href="{{url('patient-profile')}}" class="booking-doc-img">
								
											<img src="{{ URL::asset('/assets/img/patients/patient10.jpg')}}" alt="User Image">
											
										</a>
										
										<div class="profile-det-info">
											<h3><a href="{{url('patient-profile')}}">Robert Rhodes</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 4 Nov 2019, 11.00 AM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> California, United States</h5>
												<h5><i class="fas fa-envelope"></i> robertrhodes@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 858 259 5285</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
								
										<a href="{{url('patient-profile')}}" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient11.jpg')}}" alt="User Image">
										</a>
										
										<div class="profile-det-info">
											<h3><a href="{{url('patient-profile')}}">Harry Williams</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 3 Nov 2019, 6.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Colorado, United States</h5>
												<h5><i class="fas fa-envelope"></i> harrywilliams@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 303 607 7075</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
								<!-- /Appointment List -->
								
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