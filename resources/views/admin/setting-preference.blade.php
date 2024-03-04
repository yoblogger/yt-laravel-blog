<?php $page="setting-preference";?>
@extends('layout.mainlayout_admin')
@section('content')
@component('admin/components.settings')                
@endcomponent

					<div class="row">
						<div class="col-md-12">
							<div class="setting-wrap">
								<h6>Preferences</h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="preference-option">
										<div class="row align-items-center">
											<div class="col-md-10">
												<h6>Allow Camera Access</h6>
												<p>This is need for all Consultation</p>
											</div>
											<div class="col-md-2">
												<div class="d-flex flex-wrap justify-content-md-end">
													<label class="toggle-switch" for="status1">
														<input type="checkbox" class="toggle-switch-input" id="status1" checked>
														<span class="toggle-switch-label">
															<span class="toggle-switch-indicator"></span>
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="preference-option">
										<div class="row align-items-center">
											<div class="col-md-10">
												<h6>Allow Location Access</h6>
												<p>This is need for all Consultation</p>
											</div>
											<div class="col-md-2">
												<div class="d-flex flex-wrap justify-content-md-end">
													<label class="toggle-switch" for="status2">
														<input type="checkbox" class="toggle-switch-input" id="status2" checked>
														<span class="toggle-switch-label">
															<span class="toggle-switch-indicator"></span>
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
									<hr>						
									<div class="preference-option">
										<div class="row align-items-center">
											<div class="col-md-10">
												<h6>Allow Stoage Access</h6>
												<p>This is need for all Consultation</p>
											</div>
											<div class="col-md-2">
												<div class="d-flex flex-wrap justify-content-md-end">
													<label class="toggle-switch" for="status3">
														<input type="checkbox" class="toggle-switch-input" id="status3" checked>
														<span class="toggle-switch-label">
															<span class="toggle-switch-indicator"></span>
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
					<div class="row mt-auto">
						<div class="col-md-12">
							<div class="submit-sec">
								<button class="btn btn-primary">Save Changes</button>
								<button class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
	
@endsection