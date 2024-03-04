<?php $page="pharmacy-category";?>
@extends('layout.mainlayout_admin')
@section('content')
@component('admin/components.page-header') 
@slot('li_1') Total Pharmacies @endslot            
@endcomponent
	
					<!-- Pharmacy List -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header border-bottom-0">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">Pharmacy List</h5>
										</div>
										<div class="col-auto d-flex">
											<div class="form-custom me-2">
												<div id="tableSearch"  class="dataTables_wrapper"></div>
											</div>
											<div class="SortBy">
												<div class="selectBoxes order-by">
													<p class="mb-0"><img src="{{ URL::asset('/assets_admin/img/icon/sort.png')}}" class="me-2" alt="icon"> Order by </p>
													<span class="down-icon"><i class="feather-chevron-down"></i></span>
												</div>						  
												<div id="checkBox">
													<form action="pharmacy-category">
														<p class="lab-title">Order By </p>
														<label class="custom_radio w-100">
															<input type="radio" name="sort">
															<span class="checkmark"></span> ID
														</label>
														<label class="custom_radio w-100">
															<input type="radio" name="sort">
															<span class="checkmark"></span> Date Created
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
									</div>
								</div>
								<div class="card-body p-0">				
									<div class="table-responsive">									
										<table class="datatable table table-borderless hover-table" id="data-table">
											<thead class="thead-light">
												<tr>
												   <th>ID</th>
												   <th>Icons</th>
												   <th>Category </th>
												   <th>Date</th>
												   <th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#4546</td>
													<td><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/icon/icon-01.png')}}" alt="User Image"></td>
													<td>
														<h2 class="table-avatar">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/products/product1.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><span>Community pharmacy</span></a>
														</h2>
													</td>
													<td>12/20/2022</td>
													<td class="text-end">
														<div class="actions">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal" class="text-black">
																<i class="feather-edit-3 me-1"></i> Edit
															</a>
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2 me-1"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#8774</td>
													<td><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/icon/icon-02.png')}}" alt="User Image"></td>
													<td>
														<h2 class="table-avatar">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/products/product2.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><span>Hospital Pharmacy</span></a>
														</h2>
													</td>
													<td>12/20/2022</td>
													<td class="text-end">
														<div class="actions">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal" class="text-black">
																<i class="feather-edit-3 me-1"></i> Edit
															</a>
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2 me-1"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/icon/icon-03.png')}}" alt="User Image"></td>
													<td>
														<h2 class="table-avatar">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/products/product3.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><span>Clinical Pharmacy</span></a>
														</h2>
													</td>
													<td>12/20/2022</td>
													<td class="text-end">
														<div class="actions">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal" class="text-black">
																<i class="feather-edit-3 me-1"></i> Edit
															</a>
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2 me-1"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#5656</td>
													<td><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/icon/icon-01.png')}}" alt="User Image"></td>
													<td>
														<h2 class="table-avatar">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/products/product4.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><span>Pills pharmacy</span></a>
														</h2>
													</td>
													<td>12/20/2022</td>
													<td class="text-end">
														<div class="actions">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal" class="text-black">
																<i class="feather-edit-3 me-1"></i> Edit
															</a>
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2 me-1"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#5543</td>
													<td><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/icon/icon-02.png')}}" alt="User Image"></td>
													<td>
														<h2 class="table-avatar">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/products/product5.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><span>Hospital Pharmacy</span></a>
														</h2>
													</td>
													<td>12/20/2022</td>
													<td class="text-end">
														<div class="actions">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal" class="text-black">
																<i class="feather-edit-3 me-1"></i> Edit
															</a>
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2 me-1"></i> Delete
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
					<!-- /Pharmacy List -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
@component('admin/components.modal-popup') 
@endcomponent 
			
@endsection