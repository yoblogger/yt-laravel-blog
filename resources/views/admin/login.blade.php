@extends('layout.mainlayout_admin')
@section('content')	
@component('admin/components.header-menu')                
@endcomponent	

			
			<div class="row">
			
				<!-- Login Banner -->
				<div class="col-md-6 login-bg">
					<div class="login-banner"></div>
				</div>
				<!-- /Login Banner -->
				
				<div class="col-md-6 login-wrap-bg">		
				
					<!-- Login -->
					<div class="login-wrapper">
						<div class="loginbox">
							<div class="img-logo">
								<img src="{{ URL::asset('/assets_admin/img/logo3.png')}}" class="img-fluid" alt="Logo">
							</div>
							<h3>Login</h3>
							<p class="account-subtitle">login to your account to continue</p>
										
							<form method="POST" action="{{ route('login.custom') }}">
								@csrf
								<div class="form-group form-focus">
									<input type="text" class="form-control floating" name="email" id="Email" value="admin@example.com">
									<label class="focus-label">Enter Email</label>
									<div class="text-danger pt-2">
										@error('0')
					            			{{$message}}
					                	@enderror
					                	@error('email')
					            			{{$message}}
					                	@enderror
					            	</div>
								</div>
								<div class="form-group form-focus">
									<input type="password" class="form-control floating pass-input" name="password" id="password" value="123456">
									<label class="focus-label">Enter Password</label><span class="fa fa-eye-slash toggle-password pt-4"></span>
									<div class="text-danger pt-2">
										@error('0')
					            			{{$message}}
					                	@enderror
			                        	@error('password')
			                    			{{$message}}
			                        	@enderror
			                    	</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-6">
											<label class="custom_check mr-2 mb-0 d-inline-flex"> Remember me  
												<input type="checkbox" name="radio">
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="col-6 text-end">
											<a class="forgot-link" href="{{url('admin/forgot-password')}}">Forgot Password ?</a>
										</div>
									</div>
								</div>
								<div class="d-grid">
									<button class="btn btn-primary" type="submit">Login</button>
								</div>
								<div class="dont-have">Don't have an account? <a href="{{url('admin/register')}}">Sign up</a></div>
								
							</form>
						</div>
					</div>
					<!-- /Login -->
					
				</div>
				
			</div>
        </div>
		<!-- /Main Wrapper -->

@endsection