@extends('layout.mainlayout_pharmacy_admin')
@section('content')
@component('pharmacy-admin/components.page-header')                
    @slot('title') Settings @endslot
@endcomponent
					
					<div class="row">
						
						<div class="col-12">
							
							<!-- General -->
							
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">General</h4>
									</div>
									<div class="card-body">
										<form action="#">
									
											<div class="form-group">
												<label>Website Name</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label>Website Logo</label>
												<div class="custom-file" id="customFile2">
													<label class="custom-file-upload">
														<input type="file" id="site_logo1" name="site_logo1">
														<span class="file-upload-text"></span>
														<span class="change-user">
															Choose File
														</span>
													</label>
		                                        </div>
												<small class="text-secondary">Recommended image size is <b>150px x 150px</b></small>
											</div>
											<div class="form-group mb-0">
												<label>Favicon</label>
												<div class="custom-file" id="customFile2">
													<label class="custom-file-upload">
														<input type="file" id="site_logo1" name="site_logo1">
														<span class="file-upload-text"></span>
														<span class="change-user">
															Choose File
														</span>
													</label>
		                                        </div>
												<small class="text-secondary">Recommended image size is <b>16px x 16px</b> or <b>32px x 32px</b></small><br>
												<small class="text-secondary">Accepted formats : only png and ico</small>
											</div>
											
										</form>
									</div>
								</div>
							
							<!-- /General -->
								
						</div>
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
@endsection