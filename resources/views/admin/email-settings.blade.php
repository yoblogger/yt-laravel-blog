<?php $page="email-settings";?>
@extends('layout.mainlayout_admin')
@section('content')
@component('admin/components.settings')                
@endcomponent
					
					<div class="row">
						<div class="col-md-12">
							<div class="setting-wrap">
								<h6>Email Settings</h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
							<div class="accordion setting-accordion" id="email">
								<div class="accordion-item">
									<div class="accordion-header" id="headingOne">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
											<label class="toggle-switch" for="email1">
												<input type="checkbox" class="toggle-switch-input" id="email1" checked>
												<span class="toggle-switch-label">
													<span class="toggle-switch-indicator"></span>
												</span>
											</label>
											<span class="accord-title">PHP Mail</span>
										</div>
									</div>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#email">
										<div class="accordion-body pb-0">
											<div class="row">
												<div class="col-md-4">
													<div class="form-group form-focus">
														<input type="text" class="form-control floating">
														<label class="focus-label">Email From Address</label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group form-focus">
														<input type="text" class="form-control floating">
														<label class="focus-label">Email Password</label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group form-focus">
														<input type="text" class="form-control floating">
														<label class="focus-label">Email Password</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="smtp">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#emailtwo">
											<label class="toggle-switch" for="email2">
												<input type="checkbox" class="toggle-switch-input" id="email2" checked>
												<span class="toggle-switch-label">
													<span class="toggle-switch-indicator"></span>
												</span>
											</label>
											<span class="accord-title">SMTP</span>
										</div>
									</div>
									<div id="emailtwo" class="accordion-collapse collapse" aria-labelledby="smtp" data-bs-parent="#email">
										<div class="accordion-body pb-0">
											<div class="row">
												<div class="col-md-4">
													<div class="form-group form-focus">
														<input type="text" class="form-control floating">
														<label class="focus-label">Email From Address</label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group form-focus">
														<input type="text" class="form-control floating">
														<label class="focus-label">Email Password</label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group form-focus">
														<input type="text" class="form-control floating">
														<label class="focus-label">Email Password</label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group form-focus">
														<input type="text" class="form-control floating">
														<label class="focus-label">Website Name</label>
													</div>
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
					<!-- Email Settings -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
 		
@endsection