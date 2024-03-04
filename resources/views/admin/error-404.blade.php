@extends('layout.mainlayout_admin')
@section('content')	
@component('admin/components.header-menu')                
@endcomponent
			<!-- Error 404 -->
			<div class="error-box">
				<img src="{{ URL::asset('/assets_admin/img/404.png')}}" class="img-fluid" alt="404">
				<h2>Oops! This Page is Not Found.</h3>
				<p>The requested page dose not exist.</p>
				<a href="{{url('admin/index_admin')}}"class="btn btn-primary"><i class="feather-home me-2"></i>Back to Home</a>
			</div>
			<!-- /Error 404 -->
			
        </div>
		<!-- /Main Wrapper -->
@endsection