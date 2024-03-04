<?php $page="user-reports";?>
@extends('layout.mainlayout_admin')
@section('content')
	
<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid content-wrap">
					
					<!-- User Reports -->
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
											<form action="user-reports">
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
												<label class="custom_radio w-100 mb-3">
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
								<div class="card-header border-bottom-0">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">User Reports</h5>
										</div>
										<div class="col-auto d-flex">
											<div class="form-custom me-2">
												<div id="tableSearch"  class="dataTables_wrapper"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body p-0">				
									<div class="table-responsive">									
										<table class="datatable table table-borderless hover-table" id="data-table">
											<thead class="thead-light">
												<tr>
												   <th>ID</th>
												   <th>Patient Name</th>
												   <th>Number of Appointments</th>
												   <th>Total Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-07.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Bess Twishes</span></a>
														</h2>
													</td>
													<td>54</td>
													<td>30</td>
												</tr>
												<tr>
													<td>#8774</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-04.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Bess Twishes</span></a>
														</h2>
													</td>
													<td>$2330.00</td>
													<td>$330.00</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
															<a href="{{url('profile')}}"><span class="user-name">Abdul Aziz Lazis</span></a>
														</h2>
													</td>
													<td>54</td>
													<td>$9330.00</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('profile')}}"><span class="user-name">Alex Siauw</span></a>
														</h2>
													</td>
													<td>54</td>
													<td>$3430.00</td>
												</tr>
												<tr>
													<td>#4534</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-13.jpg')}}" alt="User Image"></a>
															<a href="{{url('profile')}}"><span class="user-name">Gobbs Siauw</span></a>
														</h2>
													</td>
													<td>34</td>
													<td>$3430.00</td>
												</tr>
												<tr>
													<td>#2345</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-11.jpg')}}" alt="User Image"></a>
															<a href="{{url('profile')}}"><span class="user-name">Deborah</span></a>
														</h2>
													</td>
													<td>45</td>
													<td>$3430.00</td>
												</tr>
												<tr>
													<td>#5677</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-03.jpg')}}" alt="User Image"></a>
															<a href="{{url('profile')}}"><span class="user-name">Sofia</span></a>
														</h2>
													</td>
													<td>54</td>
													<td>$3430.00</td>
												</tr>
												<tr>
													<td>#4544</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-13.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Paul</span></a>
														</h2>
													</td>
													<td>67</td>
													<td>$3430.00</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
					
							<div id="tablepagination"  class="dataTables_wrapper"></div>
			
						</div>
					</div>
					<!-- /User Reports -->
				</div>
			</div>
			<!-- /Page Wrapper -->
		
		</div>
		<!-- /Main Wrapper -->
 		
@endsection