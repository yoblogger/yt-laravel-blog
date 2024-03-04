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
							<h3>Hi, Rayan</h3>
							<p class="account-subtitle">Enter your password to access the admin.</p>
										
							<form action="conform-email">
								<div class="form-group form-focus focused">
									<input type="password" class="form-control floating" value="**********">
									<label class="focus-label">Password</label>
								</div>
								<div class="d-grid">
									<button class="btn btn-primary" type="submit">Enter</button>
								</div>
								<div class="dont-have">Sign in as a different user? <a href="{{url('admin/login')}}">Login</a></div>
							</form>
						</div>
					</div>
					<!-- /Restart Password -->
					
				</div>
				
			</div>
        </div>
		<!-- /Main Wrapper -->
@endsection