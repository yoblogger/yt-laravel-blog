<?php $page="blog-grid";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Blog Grid @endslot
    @slot('li_1') Home @endslot
    @slot('li_2') Blog @endslot
@endcomponent
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-lg-8 col-md-12">
						
							<div class="row blog-grid-row">
								<div class="col-md-6 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog1.jpeg')}}" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="{{url('doctor-profile')}}"><img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="Post Author"> <span> Ruby Perrin</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 4 Dec 2019</li>
											</ul>
											<h3 class="blog-title"><a href="{{url('blog-details')}}">Will Humans Be Able to Live in Mars in the Future?</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>
								<div class="col-md-6 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog2.jpeg')}}" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="{{url('doctor-profile')}}"><img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="Post Author"> <span> Darren Elder</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 3 Dec 2019</li>
											</ul>
											<h3 class="blog-title"><a href="{{url('blog-details')}}">Mistakes You Might Be Making With Your Watch</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>
								<div class="col-md-6 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog3.jpeg')}}" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="{{url('doctor-profile')}}"><img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg')}}" alt="Post Author"> <span> Deborah Angel</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 3 Dec 2019</li>
											</ul>
											<h3 class="blog-title"><a href="{{url('blog-details')}}">Winter Dressing Tips When It’s Really Cold Out</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>
								<div class="col-md-6 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog4.jpeg')}}" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="{{url('doctor-profile')}}"><img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-04.jpg')}}" alt="Post Author"> <span>Sofia Brient</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 2 Dec 2019</li>
											</ul>
											<h3 class="blog-title"><a href="{{url('blog-details')}}">Surprising Benefits of Honeydew Melon</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>
								<div class="col-md-6 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog5.jpeg')}}" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="{{url('doctor-profile')}}"><img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-05.jpg')}}" alt="Post Author"> <span> Marvin Campbell</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 1 Dec 2019</li>
											</ul>
											<h3 class="blog-title"><a href="{{url('blog-details')}}">Spicy Crispy Chicken Burger Recipe</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>
								<div class="col-md-6 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog6.jpeg')}}" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="{{url('doctor-profile')}}"><img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-06.jpg')}}" alt="Post Author"> <span>Katharine Berthold</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 30 Nov 2019</li>
											</ul>
											<h3 class="blog-title"><a href="{{url('blog-details')}}">Headsets Are Better if You’re Playing Games</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>
								<div class="col-md-6 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog7.jpeg')}}" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="{{url('doctor-profile')}}"><img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-07.jpg')}}" alt="Post Author"> <span>Linda Tobin</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 28 Nov 2019</li>
											</ul>
											<h3 class="blog-title"><a href="{{url('blog-details')}}">Top Men’s Fashion Trends From Spring</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>
								<div class="col-md-6 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog8.jpeg')}}" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="{{url('doctor-profile')}}"><img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-08.jpg')}}" alt="Post Author"> <span>Paul Richard </span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 25 Nov 2019</li>
											</ul>
											<h3 class="blog-title"><a href="{{url('blog-details')}}">For Good Results Must Be Make Good Plan</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>
								<div class="col-md-6 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog9.jpeg')}}" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="{{url('doctor-profile')}}"><img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-09.jpg')}}" alt="Post Author"> <span>John Gibbs</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 24 Nov 2019</li>
											</ul>
											<h3 class="blog-title"><a href="{{url('blog-details')}}">Fashion, Tips, Trends and Celebrity Style</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>
								<div class="col-md-6 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog10.jpeg')}}" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="{{url('doctor-profile')}}"><img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-10.jpg')}}" alt="Post Author"> <span>Olga Barlow</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 23 Nov 2019</li>
											</ul>
											<h3 class="blog-title"><a href="{{url('blog-details')}}">Laugh, Cry and Learn Within Virtual Reality</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>
							</div>
							
							<!-- Blog Pagination -->
							<div class="row">
								<div class="col-md-12">
									<div class="blog-pagination">
										<nav>
											<ul class="pagination justify-content-center">
												<li class="page-item disabled">
													<a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
												</li>
												<li class="page-item">
													<a class="page-link" href="#">1</a>
												</li>
												<li class="page-item active">
													<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
												</li>
												<li class="page-item">
													<a class="page-link" href="#">3</a>
												</li>
												<li class="page-item">
													<a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<!-- /Blog Pagination -->
							
						</div>
						
						<!-- Blog Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

							<!-- Search -->
							<div class="card search-widget">
								<div class="card-body">
									<form class="search-form">
										<div class="input-group">
											<input type="text" placeholder="Search..." class="form-control">
											<div class="input-group-append">
												<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /Search -->

							<!-- Latest Posts -->
							<div class="card post-widget">
								<div class="card-header">
									<h4 class="card-title">Latest Posts</h4>
								</div>
								<div class="card-body">
									<ul class="latest-posts">
										<li>
											<div class="post-thumb">
												<a href="{{url('blog-details')}}">
													<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-thumb-01.jpg')}}" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('blog-details')}}">Doccure – Making your clinic painless visit?</a>
												</h4>
												<p>4 Dec 2019</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="{{url('blog-details')}}">
													<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-thumb-02.jpg')}}" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('blog-details')}}">What are the benefits of Online Doctor Booking?</a>
												</h4>
												<p>3 Dec 2019</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="{{url('blog-details')}}">
													<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-thumb-03.jpg')}}" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('blog-details')}}">Benefits of consulting with an Online Doctor</a>
												</h4>
												<p>3 Dec 2019</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="{{url('blog-details')}}">
													<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-thumb-04.jpg')}}" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('blog-details')}}">5 Great reasons to use an Online Doctor</a>
												</h4>
												<p>2 Dec 2019</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="{{url('blog-details')}}">
													<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-thumb-05.jpg')}}" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('blog-details')}}">Online Doctor Appointment Scheduling</a>
												</h4>
												<p>1 Dec 2019</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Latest Posts -->

							<!-- Categories -->
							<div class="card category-widget">
								<div class="card-header">
									<h4 class="card-title">Blog Categories</h4>
								</div>
								<div class="card-body">
									<ul class="categories">
										<li><a href="#">Cardiology <span>(62)</span></a></li>
										<li><a href="#">Health Care <span>(27)</span></a></li>
										<li><a href="#">Nutritions <span>(41)</span></a></li>
										<li><a href="#">Health Tips <span>(16)</span></a></li>
										<li><a href="#">Medical Research <span>(55)</span></a></li>
										<li><a href="#">Health Treatment <span>(07)</span></a></li>
									</ul>
								</div>
							</div>
							<!-- /Categories -->

							<!-- Tags -->
							<div class="card tags-widget">
								<div class="card-header">
									<h4 class="card-title">Tags</h4>
								</div>
								<div class="card-body">
									<ul class="tags">
										<li><a href="#" class="tag">Children</a></li>
										<li><a href="#" class="tag">Disease</a></li>
										<li><a href="#" class="tag">Appointment</a></li>
										<li><a href="#" class="tag">Booking</a></li>
										<li><a href="#" class="tag">Kids</a></li>
										<li><a href="#" class="tag">Health</a></li>
										<li><a href="#" class="tag">Family</a></li>
										<li><a href="#" class="tag">Tips</a></li>
										<li><a href="#" class="tag">Shedule</a></li>
										<li><a href="#" class="tag">Treatment</a></li>
										<li><a href="#" class="tag">Dr</a></li>
										<li><a href="#" class="tag">Clinic</a></li>
										<li><a href="#" class="tag">Online</a></li>
										<li><a href="#" class="tag">Health Care</a></li>
										<li><a href="#" class="tag">Consulting</a></li>
										<li><a href="#" class="tag">Doctors</a></li>
										<li><a href="#" class="tag">Neurology</a></li>
										<li><a href="#" class="tag">Dentists</a></li>
										<li><a href="#" class="tag">Specialist</a></li>
										<li><a href="#" class="tag">Doccure</a></li>
									</ul>
								</div>
							</div>
							<!-- /Tags -->
							
						</div>
						<!-- /Blog Sidebar -->
						
					</div>
				</div>
			</div>	
			<!-- /Page Content -->
            </div>              
@endsection