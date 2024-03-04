@extends('layout.mainlayout_admin')
@section('content')	
@component('admin/components.page-header') 
    @slot('li_1') Total Transactions @endslot
    @slot('li_2') Order by @endslot               
@endcomponent		
			
					
					<!-- Transaction List -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header border-bottom-0">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">Transaction</h5>
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
												   <th>Date</th>
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
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-03.jpg')}}" alt="User Image"></a>
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
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-13.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Paul</span></a>
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
					<!-- /Transaction List -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
@component('admin/components.modal-popup') 
@endcomponent

@endsection