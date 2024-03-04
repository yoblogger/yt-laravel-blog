<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout.partials.head_admin')
  </head>
  @if(Route::is(['error-404','error-500']))
  <body class="error-page">
  @endif
  @if(!Route::is(['error-404','error-500']))
  <body>
  @endif
  @if(!Route::is(['login','register','forgot-password','lock-screen','error-404','error-500','conform-email']))
  @include('layout.partials.header_admin')
 @include('layout.partials.nav_admin')
 @endif
 @yield('content')
 @include('layout.partials.footer_admin-scripts')


  </body>
</html>