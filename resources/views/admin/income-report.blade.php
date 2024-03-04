<?php $page="income-report";?>
@extends('layout.mainlayout_admin')
@section('content')

<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid content-wrap">
					
					<!-- Appointments Report -->
					<div class="row">
						<div class="col-md-12">							
							<div class="card">
								<div class="card-header">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">Income Report</h5>
										</div>
										<div class="col-auto">
											<div class="bookingrange btn btn-white btn-sm">
												<div class="cal-ico">
													<i class="feather-calendar me-1"></i>
													<span>Select Date</span>
												</div>
												<div class="ico">
													<i class="fas fa-chevron-left"></i>
													<i class="fas fa-chevron-right"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">			
									<div class="w-100">			
										<div class="income-rev">Total Revenue : <span>$451254K</span></div>
									</div>
									<div id="totincome-report"></div>
								</div>
							</div>
						</div>						
					</div>
					<!-- /Appointments Report -->
					
					<!-- Upcoming Appointments -->
					<div class="row">
						<div class="col-sm-12">
							<div class="app-listing">
								<div class="custom-list">
									<div class="SortBy">
										<div class="selectBoxes order-by">
											<p class="mb-0"><img src="{{ URL::asset('/assets_admin/img/icon/sort.png')}}" class="me-2" alt="icon"> Order by </p>
											<span class="down-icon"><i class="feather-chevron-down"></i></span>
										</div>						  
										<div id="checkBox">
											<form action="income-report">
												<p class="lab-title">Order By </p>
												<label class="custom_radio w-100">
													<input type="radio" name="order">
													<span class="checkmark"></span> ID
												</label>
												<label class="custom_radio w-100">
													<input type="radio" name="order">
													<span class="checkmark"></span> Amount
												</label>
												<label class="custom_radio w-100">
													<input type="radio" name="order">
													<span class="checkmark"></span> Date
												</label>
												<label class="custom_radio w-100">
													<input type="radio" name="order">
													<span class="checkmark"></span> Number of Appointments
												</label>
												<p class="lab-title">Sort By</p>
												<label class="custom_radio w-100">
													<input type="radio" name="sort">
													<span class="checkmark"></span> Ascending
												</label>
												<label class="custom_radio w-100">
													<input type="radio" name="sort">
													<span class="checkmark"></span> Descending
												</label>
												<button type="submit" class="btn w-100 btn-primary">Apply</button>
											</form>
										</div>
									</div>
								</div>
								<div class="import-list">
									<a href="#"><i class="feather-download"></i> Import</a>
								</div>
							</div>
							
							<div class="card">
								<div class="card-header">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">Doctors</h5>
										</div>
									</div>
								</div>
								<div class="card-body p-0">				
									<div class="table-responsive">									
										<table class="datatable table table-borderless hover-table" id="data-tables">
											<thead class="thead-light">
												<tr>
												   <th>ID</th>
												   <th>Doctor</th>
												   <th>Specialities</th>
												   <th>Member Since</th>
												   <th>Number of Appointments</th>
												   <th>Total Income</th>
												   <th>Account Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="#"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name">Dr. Rayan</a>
														</h2>
													</td>
													<td>Gyanoclogist</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>545</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status1">
															<input type="checkbox" class="toggle-switch-input" id="status1">
															<span class="toggle-switch-label">
																<span class="toggle-switch-indicator"></span>
															</span>
														</label>
													</td>
												</tr>
												<tr>
													<td>#8774</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="#"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name">Dr. Monroe</a>
														</h2>
													</td>
													<td>Hair Specialities</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>654</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status2">
															<input type="checkbox" class="toggle-switch-input" id="status2" checked>
															<span class="toggle-switch-label">
																<span class="toggle-switch-indicator"></span>
															</span>
														</label>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="#"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-07.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name">Dr. Lester</a>
														</h2>
													</td>
													<td>Orthopaedics</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>787</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status3">
															<input type="checkbox" class="toggle-switch-input" id="status3" checked>
															<span class="toggle-switch-label">
																<span class="toggle-switch-indicator"></span>
															</span>
														</label>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a class="empty-user" href="{{url('admin/profile')}}"><i class="feather-user"></i> </a>
															<a href="{{url('admin/profile')}}" class="user-name">Dr. Clint</a>
														</h2>
													</td>
													<td>Orthopaedics	</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>454</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status4">
															<input type="checkbox" class="toggle-switch-input" id="status4" checked>
															<span class="toggle-switch-label">
																<span class="toggle-switch-indicator"></span>
															</span>
														</label>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div id="tablepagination"  class="dataTables_wrapper"></div>
			
				</div>
			</div>
			<!-- /Page Wrapper -->
		
		</div>
		<!-- /Main Wrapper -->	
  		  					
@endsection