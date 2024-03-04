<?php $page="setting-notifications";?>
@extends('layout.mainlayout_admin')
@section('content')
@component('admin/components.settings')                
@endcomponent
				
					<div class="row">
						<div class="col-md-12">
							<div class="setting-wrap">
								<h6>Notification</h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="table-responsive">	
										<table class="table table-borderless">
											<tbody>	
												<tr>
													<td>Notifications</td>
													<td>Email</td>
													<td>Mobile</td>
													<td>Push</td>
												</tr>
												<tr>
													<td>Password Changes</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="password" checked>
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="password">
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="password" checked>
															<span class="checkmark"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td>Appointment Confirmation</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="app_conform">
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="app_conform">
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="app_conform" checked>
															<span class="checkmark"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td>Appointment Cancellation</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="password">
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="password">
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="password" checked>
															<span class="checkmark"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td>Payment Success</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="pay_success" checked>
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="pay_success">
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="pay_success" checked>
															<span class="checkmark"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td>Payment Cancellation</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="pay_cancel">
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="pay_cancel">
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="pay_cancel">
															<span class="checkmark"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td>Adding Dependant</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="add_depend">
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="add_depend" checked>
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="add_depend">
															<span class="checkmark"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td>Delete Dependant</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="del_depend">
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="del_depend" checked>
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="del_depend">
															<span class="checkmark"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td>Create Account</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="create_acc">
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="create_acc" checked>
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="create_acc">
															<span class="checkmark"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td>Delete Account</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="del_acc">
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="del_acc" checked>
															<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<label class="custom_check w-100">
															<input type="checkbox" name="del_acc">
															<span class="checkmark"></span>
														</label>
													</td>
												</tr>
											<tbody>	
										</table>
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