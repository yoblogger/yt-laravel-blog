<?php $page="add-profile";?>
@extends('layout.mainlayout_admin')
@section('content')

<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid content-wrap">
					
					<!-- Profile Information -->
					<div class="row">
						<div class="col-md-8">
							<div class="setting-info profile-info">
								<h4>Personal Information</h4>
								<label class="avatar profile-cover-avatar" for="avatar_upload">
									<img class="avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-02.jpg')}}" alt="Profile Image">
									<input type="file" id="avatar_upload">
									<span class="avatar-edit">
										<i class="feather-edit"></i>
									</span>
								</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">First Name</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Last Name</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Age</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Date of Birth</label>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="About me" rows="4"></textarea>
										</div>
									</div>
								</div>
								<hr class="mt-0">
								<h5 class="mb-1">Address & Location</h5>
								<p class="mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Address / Street name</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Country</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">City</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">State</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Pincode</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-auto">
						<div class="col-md-12">
							<div class="submit-sec">
								<button type="submit" class="btn btn-primary">Save Changes</button>
								<button class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
					<!-- /Profile Information -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
		
@endsection