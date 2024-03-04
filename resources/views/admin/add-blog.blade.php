@extends('layout.mainlayout_admin')
@section('content')

<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					
					<!-- Add Blog -->					
					<div class="row">
						<div class="col-md-12">
							<h5 class="mb-3">Add Blog</h5>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" class="form-control floating">
										<label class="focus-label">Blog Title <span class="text-danger">*</span></label>
									</div>
									<div class="form-group form-focus">
										<select class="select">
											<option>Category</option>
											<option>Dermotology</option>
											<option>Neurology</option>
										</select>
									</div>
									<div class="form-group form-focus">
										<select class="select" id="selectval">
											<option>Blog Type</option>
											<option>Standard Blog</option>
											<option value="video">Video Blog</option>
										</select>
									</div>
									<div class="form-group form-focus">
										<textarea rows="4" class="form-control bg-grey floating"></textarea>
										<label class="focus-label">Blog Title <span class="text-danger">*</span></label>
									</div>
									<div class="form-group">
										<div class="change-photo-btn  bg-grey">
											<div>
												<i class="feather-upload"></i>
												<p>Upload File</p>
											</div>
											<input type="file" class="upload">
										</div>
									</div>
									<div id="videoId" style="display: none">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Video ID <span class="text-danger">*</span></label>
										</div>
									</div>
									<button type="submit" class="btn btn-primary save-btn">Save Changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Add Blog -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
	
@endsection