        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        @if(!Route::is(['appointment-list','blog','specialities','doctor-list','patient-list','reviews','transactions-list','settings','invoice-report','profile','login','register','forgot-password','lock-screen','error-404','error-500','blank-page','components','form-basic','form-inputs','form-horizontal','form-vertical','form-mask','form-validation','tables-basic','data-tables','invoice','calendar','blog-details','edit-blog','product-list','pharmacy-list']))
        <title>YoBlogger - Dashboard</title>
        @endif
        @if(Route::is(['appointment-list']))
        <title>YoBlogger - Appointment List Page</title>
        @endif
        @if(Route::is(['specialities']))
        <title>YoBlogger - Specialities Page</title>
        @endif
        @if(Route::is(['doctor-list']))
        <title>YoBlogger - Doctor List Page</title>
        @endif
        @if(Route::is(['patient-list']))
        <title>YoBlogger - Patient List Page</title>
        @endif
        @if(Route::is(['reviews']))
        <title>YoBlogger - Reviews Page</title>
        @endif
        @if(Route::is(['transactions-list']))
        <title>YoBlogger - Transactions List Page</title>
        @endif
        @if(Route::is(['settings']))
        <title>YoBlogger - Settings Page</title>
        @endif
        @if(Route::is(['invoice-report']))
        <title>YoBlogger - Invoice Report Page</title>
        @endif
        @if(Route::is(['profile']))
        <title>YoBlogger - Profile</title>
        @endif
        @if(Route::is(['login']))
        <title>YoBlogger - Login</title>
	@endif
        @if(Route::is(['register']))
        <title>YoBlogger - Register</title>
        @endif
        @if(Route::is(['forgot-password']))
        <title>YoBlogger - Forgot Password</title>
        @endif
        @if(Route::is(['lock-screen']))
        <title>YoBlogger - Lock Screen</title>
        @endif
        @if(Route::is(['error-404']))
        <title>YoBlogger - Error 404</title>
	@endif
        @if(Route::is(['error-500']))
        <title>YoBlogger - Error 500</title>
	@endif
        @if(Route::is(['blank-page']))
        <title>YoBlogger - Blank Page</title>
        @endif
        @if(Route::is(['components']))
        <title>YoBlogger - Components</title>
        @endif
        @if(Route::is(['form-basic']))
        <title>YoBlogger - Basic Inputs</title>
        @endif
        @if(Route::is(['form-inputs']))
        <title>YoBlogger - Form Input Groups</title>
        @endif
        @if(Route::is(['form-horizontal']))
        <title>YoBlogger - Horizontal Form</title>
        @endif
        @if(Route::is(['form-vertical']))
        <title>YoBlogger - Vertical Form</title>
        @endif
        @if(Route::is(['form-mask']))
        <title>YoBlogger - Form Mask</title>
        @endif
        @if(Route::is(['form-validation']))
        <title>YoBlogger - Form Validation</title>
        @endif
        @if(Route::is(['tables-basic']))
        <title>YoBlogger - Tables Basic</title>
        @endif
        @if(Route::is(['data-tables']))
        <title>YoBlogger - Data Tables</title>
        @endif
        @if(Route::is(['invoice']))
        <title>YoBlogger - Invoice</title>
        @endif
        @if(Route::is(['calendar']))
        <title>YoBlogger - Calendar</title>
        @endif
        @if(Route::is(['blog','blog-details']))
        <title>YoBlogger - Blog Page</title>
        @endif
        @if(Route::is(['add-blog']))
        <title>YoBlogger - Add Blog Page</title>
	@endif
        @if(Route::is(['edit-blog']))
        <title>YoBlogger - Edit Blog Page</title>
        @endif
        @if(Route::is(['product-list']))
        <title>YoBlogger - Product List Page</title>
        @endif
        @if(Route::is(['pharmacy-list']))
        <title>YoBlogger - Pharmacy List Page</title>
        @endif
        @if(Route::is(['pending-blog']))
        <title>YoBlogger - Pending Blog Page</title>
        @endif
        @if(Route::is(['account-settings','income-report','active-blog']))
        <title>YoBlogger - Bootstrap Admin HTML Template</title>
        @endif
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets_admin/img/favicon.png')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/libs/bootstrap/css/bootstrap.min.css')}}">
        <!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/libs/feather/feather.css')}}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{url('assets_admin/libs/fontawesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{url('assets_admin/libs/fontawesome/css/all.min.css')}}">
        <!-- Daterangepicker CSS -->
        <link rel="stylesheet" href="{{url('/assets_admin/libs/daterangepicker/daterangepicker.css')}}">
        <!-- Apecharts CSS -->
        <link rel="stylesheet" href="{{url('/assets_admin/libs/apex/apexcharts.css')}}">   
        <!-- Datatables CSS -->
        <link rel="stylesheet" href="{{url('/assets_admin/libs/datatables/css/datatables.min.css')}}">    
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{url('/assets_admin/libs/select2/dist/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{url('/assets_admin/css/owl.carousel.min.css')}}"> 
	    <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/app.css')}}">	

