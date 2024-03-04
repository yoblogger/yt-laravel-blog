@extends('layout.mainlayout_admin')
@section('content')	

			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid content-wrap">
					
					<!-- Total Invoice -->
					<div class="row">
						<div class="col-md-12">							
							<div class="card">
								<div class="card-header">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">Invoice Report</h5>
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
									<div class="income-rev float-none mb-0">Todays Total Invoice : <span>45</span></div>
									<div id="totsales_chart"></div>
								</div>
							</div>
						</div>						
					</div>
					<!-- /Total Invoice -->
					
					<!-- Invoice Report -->
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
											<form action="invoice-report">
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
								<div class="card-header border-bottom-0">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">Ratings</h5>
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
												   <th>Invoice Number</th>
												   <th>Patient</th>
												   <th>Created Date</th>
												   <th>Total Amount</th>
												   <th></th>
												   <th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#4546</td>
													<td><a href="#" data-bs-toggle="modal" data-bs-target="#transaction"><span class="text-primary user-name">INV 0001</span></a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-07.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Bess Twishes</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$330.00</td>
													<td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Paid</span></td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#8774</td>
													<td><a href="#" data-bs-toggle="modal" data-bs-target="#transaction"><span class="text-primary user-name">INV 0002</span></a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-04.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Bess Twishes</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$330.00</td>
													<td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Paid</span></td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td><a href="#" data-bs-toggle="modal" data-bs-target="#transaction"><span class="text-primary user-name">INV 0003</span></a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Abdul Aziz Lazis</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$330.00</td>
													<td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Paid</span></td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td><a href="#" data-bs-toggle="modal" data-bs-target="#transaction"><span class="text-primary user-name">INV 0004</span></a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Alex Siauw</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$330.00</td>
													<td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Paid</span></td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td><a href="#" data-bs-toggle="modal" data-bs-target="#transaction"><span class="text-primary user-name">INV 0005</span></a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-13.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Gobbs Siauw</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$330.00</td>
													<td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Paid</span></td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td><a href="#" data-bs-toggle="modal" data-bs-target="#transaction"><span class="text-primary user-name">INV 0006</span></a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-11.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Deborah</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$330.00</td>
													<td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Paid</span></td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td><a href="#" data-bs-toggle="modal" data-bs-target="#transaction"><span class="text-primary user-name">INV 0007</span></a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Sofia</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$330.00</td>
													<td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Paid</span></td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td><a href="#" data-bs-toggle="modal" data-bs-target="#transaction"><span class="text-primary user-name">INV 0008</span></a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Sofia</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$330.00</td>
													<td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Paid</span></td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
					
							<div id="tablepagination"  class="dataTables_wrapper"></div>
			
						</div>
					</div>
					<!-- /Invoice Report -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
@component('admin/components.modal-popup') 
@endcomponent
			
@endsection