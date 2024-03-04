<?php $page="payment-gateway";?>
@extends('layout.mainlayout_admin')
@section('content')
@component('admin/components.settings')                
@endcomponent
					
					<div class="row">
						<div class="col-md-12">
							<div class="setting-wrap">
								<h6>Payment Gateway </h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
							<div class="accordion setting-accordion" id="payment">
							
								<!-- Payment Accordion -->
								<div class="accordion-item">
									<div class="accordion-header" id="paymentOne">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
											<label class="toggle-switch" for="email1">
												<input type="checkbox" class="toggle-switch-input" id="email1" checked>
												<span class="toggle-switch-label">
													<span class="toggle-switch-indicator"></span>
												</span>
											</label>
											<span class="accord-title">Stripe</span>
										</div>
									</div>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="paymentOne" data-bs-parent="#payment">
										<div class="accordion-body p-0">
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Stripe Option</h6>
													</div>
													<div class="col-md-4">
														<label class="custom_radio w-100">
															<input type="radio" name="del_acc" checked>
															<span class="checkmark"></span> Live
														</label>
														<label class="custom_radio w-100">
															<input type="radio" name="del_acc">
															<span class="checkmark"></span> Sandbox
														</label>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Gateway Name</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="Stripe">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">API Key</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="pk_live_Hu79b4EVkFuCkEXNrLVQ7JTv000ibhh2NX">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Rest Key</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="sk_live_juEOItnRuTNTkHuijyJCdSdt">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Payment Accordion -->
								
								<!-- Payment Accordion -->
								<div class="accordion-item">
									<div class="accordion-header" id="paymentOnes">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOnes">
											<label class="toggle-switch" for="email2">
												<input type="checkbox" class="toggle-switch-input" id="email2">
												<span class="toggle-switch-label">
													<span class="toggle-switch-indicator"></span>
												</span>
											</label>
											<span class="accord-title">Razorpay</span>
										</div>
									</div>
									<div id="collapseOnes" class="accordion-collapse collapse" aria-labelledby="paymentOnes" data-bs-parent="#payment">
										<div class="accordion-body p-0">
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Stripe Option</h6>
													</div>
													<div class="col-md-4">
														<label class="custom_radio w-100">
															<input type="radio" name="razor" checked>
															<span class="checkmark"></span> Live
														</label>
														<label class="custom_radio w-100">
															<input type="radio" name="razor">
															<span class="checkmark"></span> Sandbox
														</label>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Gateway Name</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="Stripe">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">API Key</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="pk_live_Hu79b4EVkFuCkEXNrLVQ7JTv000ibhh2NX">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Rest Key</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="sk_live_juEOItnRuTNTkHuijyJCdSdt">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Payment Accordion -->
								
								<!-- Payment Accordion -->
								<div class="accordion-item">
									<div class="accordion-header" id="paymentTwo">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
											<label class="toggle-switch" for="email3">
												<input type="checkbox" class="toggle-switch-input" id="email3">
												<span class="toggle-switch-label">
													<span class="toggle-switch-indicator"></span>
												</span>
											</label>
											<span class="accord-title">Paypal</span>
										</div>
									</div>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="paymentTwo" data-bs-parent="#payment">
										<div class="accordion-body p-0">
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Paypal Optionn</h6>
													</div>
													<div class="col-md-4">
														<label class="custom_radio w-100">
															<input type="radio" name="paypal" checked>
															<span class="checkmark"></span> Live
														</label>
														<label class="custom_radio w-100">
															<input type="radio" name="paypal">
															<span class="checkmark"></span> Sandbox
														</label>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Braintree Tokenization key</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="sandbox_pgjcppvs_pd6gznv7zbrx9hb8">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Braintree Merchant ID</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="pd6gznv7zbrx9hb8">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Braintree Public key</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="h8bydrz7gcjkp7d4">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Braintree Private key</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="47b83ae8fdcf23342f71b21c1a9a6223">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Paypal APP ID</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="AWqKYC88TnJUTdaSdDApPX9yOVYHMfpD0jNgsa......">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Paypal Secret Key</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="ECnp_IiRpufsnkYH3kIl9ZOHszL_YO_59AVdeRZWs9.....">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Payment Accordion -->
								
								<!-- Payment Accordion -->
								<div class="accordion-item">
									<div class="accordion-header" id="paymentThree">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
											<label class="toggle-switch" for="email4">
												<input type="checkbox" class="toggle-switch-input" id="email4">
												<span class="toggle-switch-label">
													<span class="toggle-switch-indicator"></span>
												</span>
											</label>
											<span class="accord-title">Paystack</span>
										</div>
									</div>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="paymentThree" data-bs-parent="#payment">
										<div class="accordion-body p-0">
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Paystack Gateway</h6>
													</div>
													<div class="col-md-4">
														<label class="custom_radio w-100">
															<input type="radio" name="paystack" checked>
															<span class="checkmark"></span> Live
														</label>
														<label class="custom_radio w-100">
															<input type="radio" name="paystack">
															<span class="checkmark"></span> Sandbox
														</label>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Gateway Name</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="Paystack">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">API Key</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="sk_test_4ec9c41e6c2f29d6ea1f1420b44026605d59.....">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Secret key</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="pk_test_eb3a128d1fcabd55b1fdb61fb479cd586c.....">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Payment Accordion -->
								
								<!-- Payment Accordion -->
								<div class="accordion-item">
									<div class="accordion-header">
										<div class="accordion-button">
											<label class="toggle-switch" for="email5">
												<input type="checkbox" class="toggle-switch-input" id="email5">
												<span class="toggle-switch-label">
													<span class="toggle-switch-indicator"></span>
												</span>
											</label>
											<span class="accord-title">Cash on Delivery</span>
										</div>
									</div>
								</div>
								<!-- /Payment Accordion -->
								
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