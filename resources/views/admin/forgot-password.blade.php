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
				
					<!-- Restart Password -->
					<div class="login-wrapper">
						<div class="loginbox">
							<div class="img-logo">
								<img src="{{ URL::asset('/assets_admin/img/logo.png')}}" class="img-fluid" alt="Logo">
							</div>
							<h3>Restart Password</h3>
							<p class="account-subtitle">Enter your email to get a password reset link</p>
										
							<form action="conform-email">
								<div class="form-group form-focus">
									<input type="email" class="form-control floating">
									<label class="focus-label">Enter Email</label>
								</div>
								<div class="d-grid">
									<button class="btn btn-primary" type="submit">Restart Password</button>
								</div>
								<div class="dont-have">Remember your password?  <a href="{{url('admin/login')}}">Login</a></div>
							</form>
						</div>
					</div>
					<!-- /Restart Password -->
					
				</div>
				
			</div>
        </div>
		<!-- /Main Wrapper -->
@endsection