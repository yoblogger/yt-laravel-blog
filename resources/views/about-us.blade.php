<?php $page="about-us";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') About Us @endslot
    @slot('li_1') Home @endslot
    @slot('li_2') About Us @endslot
@endcomponent
			<!-- Page Content -->
            <section class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <a href="" class="about-titile mb-4">About Doccure</a>
                            <h3 class="mb-4">Company Profile</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta luctus est interdum pretium. Fusce id tortor fringilla, suscipit turpis ac, varius ex. Cras vel metus ligula. Nam enim ligula, bibendum a iaculis ut, cursus id augue. Proin vitae purus id tortor vehicula scelerisque non in libero.</p>
                            <p class="mb-0">Nulla non turpis sit amet purus pharetra sollicitudin. Proin rutrum urna ut suscipit ullamcorper. Proin sapien felis, dignissim non finibus eget, luctus vel purus. Pellentesque efficitur congue orci ornare accumsan. Nullam ultrices libero vel imperdiet scelerisque. Donec vel mauris eros.</p>
                        </div>
                        <div class="col-md-6">                            
                        </div>
                    </div>
                </div>
            </section>

            <!-- Category Section -->
            <section class="select-category">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 category-col d-flex">
							<div class="category-subox pb-0 d-flex flex-wrap w-100">
                                <h4>Visit a Doctor</h4>
                                <p>We hire the best specialists to deliver top-notch diagnostic services for you.</p>
                                <div class="subox-img">
                                    <div class="subox-circle">
                                        <img src="{{ URL::asset('/assets/img/icons/vect-01.png')}}" alt="" width="42">
                                    </div>                                    
                                </div>
							</div>
						</div>
                        <div class="col-lg-4 col-md-6 category-col d-flex">
							<div class="category-subox pb-0 d-flex flex-wrap w-100">
                                <h4>Find a Pharmacy</h4>
                                <p>We provide the a wide range of medical services, so every person could have the opportunity.</p>
                                <div class="subox-img">
                                    <div class="subox-circle">
                                        <img src="{{ URL::asset('/assets/img/icons/vect-02.png')}}" alt="" width="42">
                                    </div>                                    
                                </div>
							</div>
						</div>
                        <div class="col-lg-4 col-md-6 category-col d-flex">
							<div class="category-subox pb-0 d-flex flex-wrap w-100">
                                <h4>Find a Lab</h4>
                                <p>We use the first-class medical equipment for timely diagnostics of various diseases.</p>
                                <div class="subox-img">
                                    <div class="subox-circle">
                                        <img src="{{ URL::asset('/assets/img/icons/vect-03.png')}}" alt="" width="42">
                                    </div>                                    
                                </div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <!-- Category Section -->
            
            <section class="section section-featurebox">
                <div class="container">
					<div class="section-header text-center">
						<h2>Available Features in Our Clinic</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="row justify-content-center">
						<div class="feature-col-list">
							<div class="feature-col">
								<div class="feature-subox d-flex flex-wrap justify-content-center">
									<img src="{{ URL::asset('/assets/img/features/feature-07.jpg')}}" class="img-fluid" alt="Features">
									<h4>Operation</h4>
								</div>
							</div>
							<div class="feature-col">
								<div class="feature-subox d-flex flex-wrap justify-content-center">
									<img src="{{ URL::asset('/assets/img/features/feature-09.jpg')}}" class="img-fluid" alt="Features">
									<h4>Medical</h4>
								</div>
							</div>
							<div class="feature-col">
								<div class="feature-subox d-flex flex-wrap justify-content-center">
									<img src="{{ URL::asset('/assets/img/features/feature-08.jpg')}}" class="img-fluid" alt="Features">
									<h4>Patient Ward</h4>
								</div>
							</div>
							<div class="feature-col">
								<div class="feature-subox d-flex flex-wrap justify-content-center">
									<img src="{{ URL::asset('/assets/img/features/feature-10.jpg')}}" class="img-fluid" alt="Features">
									<h4>Test Room</h4>
								</div>
							</div>
							<div class="feature-col">
								<div class="feature-subox d-flex flex-wrap justify-content-center">
									<img src="{{ URL::asset('/assets/img/features/feature-11.jpg')}}" class="img-fluid" alt="Features">
									<h4>ICU</h4>
								</div>
							</div>
							<div class="feature-col">
								<div class="feature-subox d-flex flex-wrap justify-content-center">
									<img src="{{ URL::asset('/assets/img/features/feature-12.jpg')}}" class="img-fluid" alt="Features">
									<h4>Laboratory</h4>
								</div>
							</div>
						</div>
					</div>
                </div>
                
            </section>

            <!-- Clinic and Specialities -->
			<section class="section section-specialities">
				<div class="container-fluid">
					<div class="section-header text-center">
						<h2>Clinic and Specialities</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-9">
							<!-- Slider -->
							<div class="specialities-slider slider">
							
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="{{ URL::asset('/assets/img/specialities/specialities-01.png')}}" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Urology</p>
								</div>	
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="{{ URL::asset('/assets/img/specialities/specialities-02.png')}}" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Neurology</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="{{ URL::asset('/assets/img/specialities/specialities-03.png')}}" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Orthopedic</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="{{ URL::asset('/assets/img/specialities/specialities-04.png')}}" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Cardiologist</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="{{ URL::asset('/assets/img/specialities/specialities-05.png')}}" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Dentist</p>
								</div>							
								<!-- /Slider Item -->
								
							</div>
							<!-- /Slider -->
							
						</div>
					</div>
				</div>   
			</section>	 
			<!-- Clinic and Specialities -->

            <!-- Testimonial Section -->
			<section class="section section-testimonial">
				<div class="container">
					<div class="section-header text-center mb-4">
						<h2>Testimonials</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<!-- Slider -->
							<div class="testimonial-slider slider">
							
								<!-- Slider Item -->
								<div class="testimonial-item text-center">
									<div class="testimonial-img">
										<img src="{{ URL::asset('/assets/img/patients/patient1.jpg')}}" class="img-fluid" alt="Speciality">
									</div>
                                    <div class="testimonial-content">                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p class="user-name">- Jennifer Robinson</p>
                                        <p class="user-location mb-0">Leland, USA</p>
                                    </div>
								</div>	
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="testimonial-item text-center">
									<div class="testimonial-img">
										<img src="{{ URL::asset('/assets/img/patients/patient2.jpg')}}" class="img-fluid" alt="Speciality">
									</div>
                                    <div class="testimonial-content">                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p class="user-name">- Denise Stevens</p>
                                        <p class="user-location mb-0">Abington, USA</p>
                                    </div>
								</div>	
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="testimonial-item text-center">
									<div class="testimonial-img">
										<img src="{{ URL::asset('/assets/img/patients/patient3.jpg')}}" class="img-fluid" alt="Speciality">
									</div>
                                    <div class="testimonial-content">                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p class="user-name">- Charles Ortega</p>
                                        <p class="user-location mb-0">El Paso, USA</p>
                                    </div>
								</div>	
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="testimonial-item text-center">
									<div class="testimonial-img">
										<img src="{{ URL::asset('/assets/img/patients/patient4.jpg')}}" class="img-fluid" alt="">
									</div>
                                    <div class="testimonial-content">                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p class="user-name">- Jennifer Robinson</p>
                                        <p class="user-location mb-0">Leland, USA</p>
                                    </div>
								</div>	
								<!-- /Slider Item -->
								
							</div>
							<!-- /Slider -->
							
						</div>
					</div>
				</div>   
			</section>	 
			<!-- Testimonial Section -->

			<!-- /Page Content -->			
@endsection