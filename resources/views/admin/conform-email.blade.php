<?php $page="conform-email";?>
@extends('layout.mainlayout_admin')
@section('content')
<!-- Main Wrapper -->
        <div class="main-wrapper">
			
			<div class="header d-none">
				<!-- Header Menu -->
				<ul class="nav nav-tabs user-menu">
					<!-- Flag -->
					<li class="nav-item">
						<a href="#" id="dark-mode-toggle" class="dark-mode-toggle">
							<i class="feather-sun light-mode"></i><i class="feather-moon dark-mode"></i>
						</a>
					</li>
					<!-- /Flag -->
				</ul>
				<!-- Header Menu -->
			</div>
			
			<div class="row">
				
				<div class="col-md-12 login-wrap-bg">		
				
					<!-- Restart Password -->
					<div class="login-wrapper">
						<div class="loginbox email-confirm">
							<div class="success-icon">
								<i class="feather-check-circle"></i>
							</div>
							<h3>Success !</h3>
							<p class="account-subtitle">A email has been send to youremail@domain.com. Please check for an email from company and click on the included link to reset your password.</p>		
							<a href="{{url('admin/forgot-password')}}" class="btn btn-primary"><i class="feather-home"></i> Back to Home</a>
						</div>
					</div>
					<!-- /Restart Password -->
					
				</div>
				
			</div>
        </div>
		<!-- /Main Wrapper -->
		
@endsection