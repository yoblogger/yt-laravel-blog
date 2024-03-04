@extends('layout.mainlayout_pharmacy_admin')
@section('content')

			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					
					<!-- Edit Purchase -->					
					<div class="row">
						<div class="col-md-8">
							<h5 class="mb-3">Edit Purchase</h5>
							<form method="GET" class="supplier-form">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Medicine Name <span class="text-danger">*</span></label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-focus form-group">
											<select class="form-control select" name="category" required=""> 
												<option value="1">Category</option>
												<option value="2">Injuries</option>
												<option value="3">Cancer</option>
												<option value="4">Animal diseases</option>
												<option value="5">Growth disorders</option>
												<option value="6">Rare diseases</option>
												<option value="7">Neoplasms</option>
												<option value="8">Inflammations</option>
												<option value="9">Sleep disorders</option>
												<option value="10">Infectious diseases</option>
												<option value="11">Phytopathology</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Price <span class="text-danger">*</span></label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Quantity <span class="text-danger">*</span></label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Expire Date <span class="text-danger">*</span></label>
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
					<!-- /Edit Purchase -->
				</div>
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
	
@endsection