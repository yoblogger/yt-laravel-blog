<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout.partials.head')
  </head>
  @if(Route::is(['map-grid','map-list-1','map-list']))
  <body class="map-page">
  @endif
  @if(Route::is(['chat-doctor','chat']))
  <body class="chat-page">
  @endif
  @if(Route::is(['doctor-register','forgot-password','login','register','patient-register-step2','patient-register-step1','doctor-register-step1','doctor-register-step2','doctor-register-step3','patient-register-step3','patient-register-step4','patient-register-step5','pharmacy-register','pharmacy-register-step1','pharmacy-register-step2','pharmacy-register-step3']))
  <body class="account-page">
  @endif
  @if(Route::is(['video-call','voice-call']))
  <body class="call-page">
  @endif
  @if(Route::is(['about-us']))
  <body class="about-page">
  @endif
  @if(Route::is(['index-13']))
  <body class="home-four">
  @endif 
  @if(Route::is(['onboarding-verification']))
  <body class="onboard-page">
  @endif 
  @if(!Route::is(['doctor-register-step1','patient-password','patient-phone','patient-phone-otp','patient-personalize','patient-other-details','patient-details','patient-email','patient-family-details','patient-email-otp','patient-dependant-details','onboarding-verify-account','onboarding-preferences','onboarding-verification','onboarding-payments','onboarding-password','onboarding-phone-otp','onboarding-personalize','onboarding-availability','onboarding-phone','onboarding-lock','onboarding-identity','onboarding-email-step-2-verify','onboarding-cost','onboarding-email','onboarding-email-otp','onboarding-consultation','doctor-register-step2','doctor-register-step3','patient-register-step1','patient-register-step2','patient-register-step3','patient-register-step4','patient-register-step5','pharmacy-register-step1','pharmacy-register-step2','pharmacy-register-step3','index-2']))
@include('layout.partials.header')
@endif
@yield('content')
@if(!Route::is(['chat-doctor','patient-details','patient-phone','patient-phone-otp','patient-password','patient-personalize','patient-other-details','patient-email','patient-family-details','patient-email-otp','patient-dependant-details','onboarding-verify-account','map-grid','map-list','onboarding-preferences','onboarding-verification','onboarding-payments','onboarding-password','onboarding-personalize','onboarding-phone-otp','onboarding-phone','onboarding-availability','onboarding-lock','onboarding-identity','onboarding-email-step-2-verify','onboarding-email-otp','onboarding-email','onboarding-cost','onboarding-consultation','chat','voice-call','video-call','doctor-register-step1','doctor-register-step2','doctor-register-step3','patient-register-step1','patient-register-step2','patient-register-step3','patient-register-step4','patient-register-step5','pharmacy-register-step1','pharmacy-register-step2','pharmacy-register-step3']))
@include('layout.partials.footer')
@endif
@include('layout.partials.footer-scripts')
  </body>
</html>
<script>
$(document).ready(function(){
  // alert(1);
 /*$('.submenu li a').click(function(){
   $(.submenu li a).removeClass("active");
   $(this).addClass("active");
   $('.has-submenu a').removeClass("active");
   $('.has-submenu a').addClass("active");
   
   //$(this).toggleClass("active");
 });*/
});
</script>