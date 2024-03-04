<?php $page="login-settings";?>
@extends('layout.mainlayout_admin')
@section('content')
@component('admin/components.settings')                
@endcomponent

					
					<div class="row">
						<div class="col-md-12">
							<div class="setting-wrap">
								<h6>Options</h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="login-option">
										<div class="row">
											<div class="col-md-4">
												<h6>Cancellation</h6>
											</div>
											<div class="col-md-8">
												<div class="d-flex flex-wrap">
													<label class="toggle-switch" for="status1">
														<input type="checkbox" class="toggle-switch-input" id="status1" checked>
														<span class="toggle-switch-label">
															<span class="toggle-switch-indicator"></span>
														</span>
													</label>
													<p>Allow Patients cancel their bookings</p>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="login-option">
										<div class="row">
											<div class="col-md-4">
												<h6>Authentication</h6>
											</div>
											<div class="col-md-8">
												<div class="d-flex flex-wrap mb-2">
													<label class="toggle-switch" for="status2">
														<input type="checkbox" class="toggle-switch-input" id="status2" checked>
														<span class="toggle-switch-label">
															<span class="toggle-switch-indicator"></span>
														</span>
													</label>
													<p>Allow Forget password </p>
												</div>
												<div class="d-flex flex-wrap">
													<label class="toggle-switch" for="status3">
														<input type="checkbox" class="toggle-switch-input" id="status3" checked>
														<span class="toggle-switch-label">
															<span class="toggle-switch-indicator"></span>
														</span>
													</label>
													<p>Login Attempt (More than 3 times)</p>
												</div>
											</div>
										</div>
									</div>
									<hr>						
									<div class="login-option">
										<div class="row">
											<div class="col-md-4">
												<h6>Social Login</h6>
											</div>
											<div class="col-md-8">
												<div class="d-flex flex-wrap mb-2">
													<label class="toggle-switch" for="status4">
														<input type="checkbox" class="toggle-switch-input" id="status4">
														<span class="toggle-switch-label">
															<span class="toggle-switch-indicator"></span>
														</span>
													</label>
													<p>Enable Login with Google</p>
												</div>
												<div class="d-flex flex-wrap">
													<label class="toggle-switch" for="status9">
														<input type="checkbox" class="toggle-switch-input" id="status9" checked>
														<span class="toggle-switch-label">
															<span class="toggle-switch-indicator"></span>
														</span>
													</label>
													<p> Enable Login with Facebook</p>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="login-option">
										<div class="row">
											<div class="col-md-4">
												<h6>Login Type</h6>
												<h5>(one time setup)</h5>
											</div>
											<div class="col-md-8">
												<div class="d-flex flex-wrap mb-2">
													<label class="toggle-switch" for="status5">
														<input type="checkbox" class="toggle-switch-input" id="status5">
														<span class="toggle-switch-label">
															<span class="toggle-switch-indicator"></span>
														</span>
													</label>
													<p>Mobile No</p>
												</div>
												<div class="d-flex flex-wrap">
													<label class="toggle-switch" for="status6">
														<input type="checkbox" class="toggle-switch-input" id="status6" checked>
														<span class="toggle-switch-label">
															<span class="toggle-switch-indicator"></span>
														</span>
													</label>
													<p>Email ID</p>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="login-option">
										<div class="row">
											<div class="col-md-4">
												<h6>OTP By</h6>
											</div>
											<div class="col-md-8">
												<div class="d-flex flex-wrap mb-2">
													<label class="toggle-switch" for="status7">
														<input type="checkbox" class="toggle-switch-input" id="status7">
														<span class="toggle-switch-label">
															<span class="toggle-switch-indicator"></span>
														</span>
													</label>
													<p>Mobile No</p>
												</div>
												<div class="d-flex flex-wrap">
													<label class="toggle-switch" for="status8">
														<input type="checkbox" class="toggle-switch-input" id="status8" checked>
														<span class="toggle-switch-label">
															<span class="toggle-switch-indicator"></span>
														</span>
													</label>
													<p>Email ID</p>
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
								<button type="submit" class="btn btn-primary">Save Changes</button>
								<button class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
					<!-- /Login Settings -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
		
@endsection