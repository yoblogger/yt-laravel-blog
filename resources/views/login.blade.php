<?php $page="login";?>
@extends('layout.mainlayout')
@section('content')
	<!-- Page Content -->
    <div class="content" style="min-height:205px;">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="{{ URL::asset('/assets/img/logo3.png')}}" class="img-fluid" alt="Doccure Login">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login <span>Doccure</span></h3>
										</div>
										<form action="index">
											<div class="form-group form-focus">
												<input type="email" class="form-control floating">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating">
												<label class="focus-label">Password</label>
											</div>
											<div class="text-end">
												<a class="forgot-link" href="{{url('forgot-password')}}">Forgot Password ?</a>
											</div>
											<button class="btn btn-primary w-100 w-100 btn-lg login-btn" type="submit">Login</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook w-100 w-100"><i class="fab fa-facebook-f me-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google w-100 w-100"><i class="fab fa-google me-1"></i> Login</a>
												</div>
											</div>
											<div class="text-center dont-have">Don’t have an account? <a href="{{url('register')}}">Register</a></div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
            </div>
@endsection