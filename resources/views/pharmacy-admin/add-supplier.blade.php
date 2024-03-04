@extends('layout.mainlayout_pharmacy_admin')
@section('content')

<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					
					<!-- Add Supplier -->					
					<div class="row">
						<div class="col-md-8">
							<h5 class="mb-3">Add Supplier</h5>
							<form method="GET" class="supplier-form">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Name <span class="text-danger">*</span></label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="email" class="form-control floating">
											<label class="focus-label">Email <span class="text-danger">*</span></label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Phone <span class="text-danger">*</span></label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Company <span class="text-danger">*</span></label>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group form-focus">
											<textarea class="form-control bg-grey floating"></textarea>
											<label class="focus-label">Address <span class="text-danger">*</span></label>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<div class="change-photo-btn  bg-grey">
												<div>
													<i class="feather-upload"></i>
													<p>Upload File</p>
												</div>
												<input type="file" class="upload">
											</div>
										</div>
									</div>
										<div class="col-md-4">
											<button type="submit" class="btn btn-primary save-btn">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /Add Supplier -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			</div>
		<!-- /Main Wrapper -->
		
@endsection