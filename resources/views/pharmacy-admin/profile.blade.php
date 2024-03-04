@extends('layout.mainlayout_pharmacy_admin')
@section('content')
	<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					
					<!-- Profile Information -->
					<div class="row">
						<div class="col-md-8 col-lg-8 col-xl-6">
							<div class="profile-info">
								<h4>Profile</h4>
								<div class="profile-list">
									<div class="profile-detail">
										<label class="avatar profile-cover-avatar">
											<img class="avatar-img" src="{{ URL::asset('/assets_pharmacy/img/profiles/avatar-02.jpg')}}" alt="Profile Image">
										</label>
										<div class="pro-name">
											<p>@ Johnson223</p>
											<h4>Johnson Samuel</h4>
										</div>
										<a href="#" class="edit-pro"><i class="feather-edit"></i> Edit</a>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h6 class="pro-title">Personal Information</h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Turpis adipiscing arcu praesent tellus aliquam quam volutpat. Etiam tincidunt habitant sit maecenas feugiat eget convallis. Aliquam non viverra accumsan vulputate id aliquam et enim vivamus. </p>
										</div>
										<div class="col-md-4 mb-3">
											<h5>Date of Birth</h5>
											<p>15/12/2022</p>
										</div>
										<div class="col-md-4 mb-3">
											<h5>Gender</h5>
											<p>Male</p>
										</div>
										<div class="col-md-4 mb-3">
											<h5>Age</h5>
											<p>46</p>
										</div>
										<div class="col-md-12">
											<h6 class="pro-title">Address & Location</h6>
										</div>
										<div class="col-md-4">
											<h5>Address</h5>
											<p>4663 Agriculture Lane, Miami,</p>
										</div>
										<div class="col-md-4">
											<h5>Country</h5>
											<p>United States</p>
										</div>
										<div class="col-md-4">
											<h5>State</h5>
											<p>Florida</p>
										</div>
									</div>
								</div>
								<div class="profile-list">
									<div class="row">
										<div class="col-md-12">
											<div class="pro-title d-flex justify-content-between">
												<h6>Account Information</h6>
												<a href="#" class="edit-pro"><i class="feather-edit"></i> Edit</a>
											</div>
										</div>
										<div class="col-md-6 mb-3">
											<h5>Email Address</h5>
											<p>johsonsamuel2023@gmail.com</p>
										</div>
										<div class="col-md-6 mb-3">
											<h5>Phone Number</h5>
											<p>+1 534883 487843</p>
										</div>
									</div>
								</div>
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