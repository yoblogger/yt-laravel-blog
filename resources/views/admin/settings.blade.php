@extends('layout.mainlayout_admin')
@section('content')	
@component('admin/components.settings')                
@endcomponent
					
					<div class="row">
						<div class="col-md-12">
							<div class="setting-wrap">
								<h6>General</h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
							<div class="setting-info">
								<h5>Personal Information</h5>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Website Name</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Contact Address</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating">
											<label class="focus-label">Mobile Number</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group form-focus mb-0">
											<input type="email" class="form-control floating">
											<label class="focus-label">Email</label>
										</div>
									</div>
								</div>
								<hr>
								<h5>Currency</h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>								
								<div class="row">
									<div class="col-md-4">
										<div class="form-focus">
											<select class="select">
												<option>Select Currency type</option>
												<option>Dollar</option>
												<option>Euro</option>
											</select>
										</div>
									</div>
								</div>
								<hr>						
								<div class="row">
									<div class="col-md-4">
										<h5>Website Logos</h5>
										<div class="custom-file" id="customFile1">
											<label class="custom-file-upload">
												<input type="file" id="site_logo" name="site_logo">
												<span class="file-upload-text"></span>
												<span class="change-user">
													choose-file
												</span>
											</label>
											<p class="img-text">Recommended image size is 150px x 150px</p>
                                        </div>
									</div>
									<div class="col-md-4">
										<h5>Fav Icon</h5>
										<div class="custom-file" id="customFile2">
											<label class="custom-file-upload">
												<input type="file" id="site_logo1" name="site_logo1">
												<span class="file-upload-text"></span>
												<span class="change-user">
													choose-file
												</span>
											</label>
											<p class="img-text">Recommended image size is 150px x 150px</p>
                                        </div>
									</div>
								</div>
								<hr>
								<h5>Commision Percentage</h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>								
								<div class="row">
									<div class="col-md-4">
										<div class="form-group mb-0">
											<div class="mb-2">
												<input type="text" class="form-control" value="15">
											</div>
											<p>Enter Commsion in %</p>
										</div>
									</div>
								</div>
								<hr>
								<h6>Push Notification</h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>								
								<div class="row">
									<div class="col-md-4">
										<h5>Firebase Server Key</h5>
										<div class="form-group">
											<input type="text" class="form-control" value="AAAA7np-KG4:APA91bF_TPd5S8OmUORHdyuYPei-t_">
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
					<!-- /Settings -->
					
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
		
@endsection