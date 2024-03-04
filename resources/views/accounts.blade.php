@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Accounts @endslot
    @slot('li_1') Home @endslot
    @slot('li_2') Accounts @endslot
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
                                            <li class="active">
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
                                <div class="col-lg-5 d-flex">
                                    <div class="card flex-fill">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3 class="card-title">Account</h3>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="text-end">
                                                        <a title="Edit Profile" class="btn btn-primary btn-sm" href="{{url('#account_modal')}}" data-bs-toggle="modal"><i class="fas fa-pencil"></i> Edit Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="profile-view-bottom">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="info-list">
                                                            <div class="title">Bank Name</div>
                                                            <div class="text" id="bank_name">Wells Fargo & Co</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="info-list">
                                                            <div class="title">Branch Name</div>
                                                            <div class="text" id="branch_name">Lenexa</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="info-list">
                                                            <div class="title">Account Number</div>
                                                            <div class="text" id="account_no">5396 5250 1908 3838</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="info-list">
                                                            <div class="title">Account Name</div>
                                                            <div class="text" id="account_name">Dr. Darren Elder</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 d-flex">
                                    <div class="card flex-fill">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="account-card bg-success-light">
                                                        <span>$90.48</span> Earned
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="account-card bg-warning-light">
                                                        <span>$0.00</span> Requested
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="account-card bg-purple-light">
                                                        <span>$90.48</span> Balance
                                                    </div>
        
                                                </div>
                                                
                                                <div class="col-md-12 text-center">
                                                    <a href="{{url('#payment_request_modal')}}" class="btn btn-primary request_btn" data-bs-toggle="modal">Payment Request</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

							<div class="row">
								<div class="col-sm-12">
									<div class="card">
                                        <div class="card-body pt-0">
                                        
                                            <!-- Tab Menu -->
                                            <nav class="user-tabs mb-4">
                                                <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="{{url('#pat_accounts')}}" data-bs-toggle="tab">Accounts</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{url('#pat_refundrequest')}}" data-bs-toggle="tab">Patients Refund Request</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <!-- /Tab Menu -->
                                            
                                            <!-- Tab Content -->
                                            <div class="tab-content pt-0">
                                                
                                                <!-- Accounts Tab -->
                                                <div id="pat_accounts" class="tab-pane fade show active">
                                                    <div class="card card-table mb-0">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover table-center mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Date</th>
                                                                            <th>Patient Name</th>
                                                                            <th class="text-center">Amount</th>
                                                                            <th>Status</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>11 Nov 2019 <span class="d-block text-info">10.00 AM</span></td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('patient-profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient.jpg')}}" alt="User Image"></a>
                                                                                    <a href="{{url('patient-profile')}}">Richard Wilson <span>#PT0016</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td class="text-center">$150</td>
                                                                            <td><span class="badge badge-pill bg-success-light">Paid</span></td>
                                                                            <td class="text-end">
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-check"></i> Accept
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Cancel
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3 Nov 2019 <span class="d-block text-info">11.00 AM</span></td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('patient-profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient1.jpg')}}" alt="User Image"></a>
                                                                                    <a href="{{url('patient-profile')}}">Charlene Reed <span>#PT0001</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td class="text-center">$200</td>
                                                                            <td><span class="badge badge-pill bg-success-light">Paid</span></td>
                                                                            <td class="text-end">
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-check"></i> Accept
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Cancel
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1 Nov 2019 <span class="d-block text-info">1.00 PM</span></td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('patient-profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient2.jpg')}}" alt="User Image"></a>
                                                                                    <a href="{{url('patient-profile')}}">Travis Trimble  <span>#PT0002</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td class="text-center">$75</td>
                                                                            <td><span class="badge badge-pill bg-success-light">Paid</span></td>
                                                                            <td class="text-end">
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-check"></i> Accept
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Cancel
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>30 Oct 2019 <span class="d-block text-info">9.00 AM</span></td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('patient-profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient3.jpg')}}" alt="User Image"></a>
                                                                                    <a href="{{url('patient-profile')}}">Carl Kelly <span>#PT0003</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td class="text-center">$100</td>
                                                                            <td><span class="badge badge-pill bg-warning-light">Pending</span></td>
                                                                            <td class="text-end">
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-check"></i> Accept
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Cancel
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>28 Oct 2019 <span class="d-block text-info">6.00 PM</span></td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('patient-profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient4.jpg')}}" alt="User Image"></a>
                                                                                    <a href="{{url('patient-profile')}}">Michelle Fairfax <span>#PT0004</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td class="text-center">$350</td>
                                                                            <td><span class="badge badge-pill bg-success-light">Paid</span></td>
                                                                            <td class="text-end">
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-check"></i> Accept
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Cancel
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>27 Oct 2019 <span class="d-block text-info">8.00 AM</span></td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('patient-profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient5.jpg')}}" alt="User Image"></a>
                                                                                    <a href="{{url('patient-profile')}}">Gina Moore <span>#PT0005</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td class="text-center">$250</td>
                                                                            <td><span class="badge badge-pill bg-danger-light">Refunded</span></td>
                                                                            <td class="text-end">
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-check"></i> Accept
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Cancel
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Accounts Tab -->
                                                
                                                <!-- Refund Request Tab -->
                                                <div class="tab-pane fade" id="pat_refundrequest">
                                                    <div class="card card-table mb-0">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover table-center mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Date</th>
                                                                            <th>Patient Name</th>
                                                                            <th class="text-center">Amount</th>
                                                                            <th>Status</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>11 Nov 2019 <span class="d-block text-info">10.00 AM</span></td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('patient-profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient.jpg')}}" alt="User Image"></a>
                                                                                    <a href="{{url('patient-profile')}}">Richard Wilson <span>#PT0016</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td class="text-center">$150</td>
                                                                            <td><span class="badge badge-pill bg-success-light">Paid</span></td>
                                                                            <td class="text-end">
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-check"></i> Accept
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Cancel
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3 Nov 2019 <span class="d-block text-info">11.00 AM</span></td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('patient-profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient1.jpg')}}" alt="User Image"></a>
                                                                                    <a href="{{url('patient-profile')}}">Charlene Reed <span>#PT0001</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td class="text-center">$200</td>
                                                                            <td><span class="badge badge-pill bg-success-light">Paid</span></td>
                                                                            <td class="text-end">
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-check"></i> Accept
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Cancel
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1 Nov 2019 <span class="d-block text-info">1.00 PM</span></td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('patient-profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient2.jpg')}}" alt="User Image"></a>
                                                                                    <a href="{{url('patient-profile')}}">Travis Trimble  <span>#PT0002</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td class="text-center">$75</td>
                                                                            <td><span class="badge badge-pill bg-success-light">Paid</span></td>
                                                                            <td class="text-end">
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-check"></i> Accept
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Cancel
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>30 Oct 2019 <span class="d-block text-info">9.00 AM</span></td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('patient-profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient3.jpg')}}" alt="User Image"></a>
                                                                                    <a href="{{url('patient-profile')}}">Carl Kelly <span>#PT0003</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td class="text-center">$100</td>
                                                                            <td><span class="badge badge-pill bg-warning-light">Pending</span></td>
                                                                            <td class="text-end">
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-check"></i> Accept
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Cancel
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>28 Oct 2019 <span class="d-block text-info">6.00 PM</span></td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('patient-profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient4.jpg')}}" alt="User Image"></a>
                                                                                    <a href="{{url('patient-profile')}}">Michelle Fairfax <span>#PT0004</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td class="text-center">$350</td>
                                                                            <td><span class="badge badge-pill bg-success-light">Paid</span></td>
                                                                            <td class="text-end">
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-check"></i> Accept
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Cancel
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>27 Oct 2019 <span class="d-block text-info">8.00 AM</span></td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('patient-profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/patients/patient5.jpg')}}" alt="User Image"></a>
                                                                                    <a href="{{url('patient-profile')}}">Gina Moore <span>#PT0005</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td class="text-center">$250</td>
                                                                            <td><span class="badge badge-pill bg-danger-light">Refunded</span></td>
                                                                            <td class="text-end">
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-check"></i> Accept
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                        <i class="fas fa-times"></i> Cancel
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Refund Request Tab -->
                                                    
                                            </div>
                                            <!-- Tab Content -->
                                            
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