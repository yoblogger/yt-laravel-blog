@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					
					<!-- Blog List -->
					<div class="row">
						<div class="col-md-9">
							<ul class="list-links mb-4">
								<li><a href="{{url('admin/active-blog')}}">Active Blog</a></li>
								<li class="active"><a href="{{url('admin/pending-blog')}}">Pending Blog</a></li>
							</ul>
						</div>
						<div class="col-md-3 text-md-end">
							<a href="{{url('admin/add-blog')}}" class="btn btn-primary btn-blog mb-3">Add Blog</a>
						</div>
					</div>
					
					<div class="row">				
						
						<!-- Blog Post -->
						<div class="col-md-6 col-xl-4 col-sm-12 d-flex">
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('admin/blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/blog/blog-03.jpg')}}" alt="Post Image"></a>
									<div class="fav-btn">
										<img src="{{ URL::asset('/assets_admin/img/icon/eye-icon.png')}}" alt="icon"> 225
									</div>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('admin/profile')}}">
													<img src="{{ URL::asset('/assets_admin/img/profiles/avatar-08.jpg')}}" alt="Post Author"> 
													<span>
														<span class="post-title">Dr. Jeffrey</span>
														<span class="post-date"><i class="far fa-clock"></i>  11 Nov 2022</span>
													</span>
												</a>
											</div>
										</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('admin/blog-details')}}">5 Great reasons to use an Online Doctor</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed   do eiusmod tempor...</p>
								</div>
								<div class="row">
									<div class="col"><a href="{{url('admin/edit-blog')}}" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a></div>
									<div class="col text-end">
										<label class="toggle-switch justify-content-end" for="blog4">
											<input type="checkbox" class="toggle-switch-input" id="blog4">
											<span class="toggle-switch-label">
												<span class="toggle-switch-indicator"></span>
											</span> 
											<span class="active-text ms-1">Inactive</span>
										</label>
									</div>
								</div>
							</div>										
						</div>
						<!-- /Blog Post -->
						
						<!-- Blog Post -->
						<div class="col-md-6 col-xl-4 col-sm-12 d-flex">
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('admin/blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/blog/blog-04.jpg')}}" alt="Post Image"></a>
									<div class="fav-btn">
										<img src="{{ URL::asset('/assets_admin/img/icon/eye-icon.png')}}" alt="icon"> 103
									</div>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('admin/profile')}}">
													<img src="{{ URL::asset('/assets_admin/img/profiles/avatar-10.jpg')}}" alt="Post Author"> 
													<span>
														<span class="post-title">Dr. Charles</span>
														<span class="post-date"><i class="far fa-clock"></i> 06 Nov 2022</span>
													</span>
												</a>
											</div>
										</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('admin/blog-details')}}">Online Doctor Appointment Scheduling</a></h3>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore pariatur...</p>
								</div>
								<div class="row">
									<div class="col"><a href="{{url('admin/edit-blog')}}" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a></div>
									<div class="col text-end">
										<label class="toggle-switch justify-content-end" for="blog5">
											<input type="checkbox" class="toggle-switch-input" id="blog5" checked>
											<span class="toggle-switch-label">
												<span class="toggle-switch-indicator"></span>
											</span> 
											<span class="active-text ms-1">Active</span>
										</label>
									</div>
								</div>
							</div>										
						</div>
						<!-- /Blog Post -->
						
						<!-- Blog Post -->
						<div class="col-md-6 col-xl-4 col-sm-12 d-flex">
							<div class="blog grid-blog flex-fill">
								<div class="blog-image">
									<a href="{{url('admin/blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/blog/blog-01.jpg')}}" alt="Post Image"></a>
									<div class="fav-btn">
										<img src="{{ URL::asset('/assets_admin/img/icon/eye-icon.png')}}" alt="icon"> 225
									</div>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('admin/profile')}}">
													<img src="{{ URL::asset('/assets_admin/img/profiles/avatar-02.jpg')}}" alt="Post Author"> 
													<span>
														<span class="post-title">Dr. Ruby Perrin</span>
														<span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
													</span>
												</a>
											</div>
										</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('admin/blog-details')}}">Doccure – Making your clinic painless visit?</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
								<div class="row">
									<div class="col"><a href="{{url('admin/edit-blog')}}" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a></div>
									<div class="col text-end">
										<label class="toggle-switch justify-content-end" for="blog1">
											<input type="checkbox" class="toggle-switch-input" id="blog1" checked>
											<span class="toggle-switch-label">
												<span class="toggle-switch-indicator"></span>
											</span> 
											<span class="active-text ms-1">Active</span>
										</label>
									</div>
								</div>
							</div>										
						</div>
						<!-- /Blog Post -->
						
						<!-- Blog Post -->
						<div class="col-md-6 col-xl-4 col-sm-12 d-flex">
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('admin/blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/blog/blog-02.jpg')}}" alt="Post Image"></a>
									<div class="fav-btn">
										<img src="{{ URL::asset('/assets_admin/img/icon/eye-icon.png')}}" alt="icon"> 103
									</div>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('admin/profile')}}">
													<img src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="Post Author"> 
													<span>
														<span class="post-title">Dr. Lester </span>
														<span class="post-date"><i class="far fa-clock"></i>  2 Dec 2022</span>
													</span>
												</a>
											</div>
										</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('admin/blog-details')}}">Doccure – Making your clinic painless visit?</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
								<div class="row">
									<div class="col"><a href="{{url('admin/edit-blog')}}" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a></div>
									<div class="col text-end">
										<label class="toggle-switch justify-content-end" for="blog2">
											<input type="checkbox" class="toggle-switch-input" id="blog2">
											<span class="toggle-switch-label">
												<span class="toggle-switch-indicator"></span>
											</span> 
											<span class="active-text ms-1">Inactive</span>
										</label>
									</div>
								</div>
							</div>										
						</div>
						<!-- /Blog Post -->
						
						<!-- Blog Post -->
						<div class="col-md-6 col-xl-4 col-sm-12 d-flex">
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('admin/blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/blog/blog-03.jpg')}}" alt="Post Image"></a>
									<div class="fav-btn">
										<img src="{{ URL::asset('/assets_admin/img/icon/eye-icon.png')}}" alt="icon"> 80
									</div>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('admin/profile')}}">
													<img src="{{ URL::asset('/assets_admin/img/profiles/avatar-07.jpg')}}" alt="Post Author"> 
													<span>
														<span class="post-title">Dr. Stephen</span>
														<span class="post-date"><i class="far fa-clock"></i>  12 Dec 2022</span>
													</span>
												</a>
											</div>
										</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('admin/blog-details')}}">Doccure – Making your clinic painless visit?</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
								<div class="row">
									<div class="col"><a href="{{url('admin/edit-blog')}}" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a></div>
									<div class="col text-end">
										<label class="toggle-switch justify-content-end" for="blog3">
											<input type="checkbox" class="toggle-switch-input" id="blog3" checked>
											<span class="toggle-switch-label">
												<span class="toggle-switch-indicator"></span>
											</span> 
											<span class="active-text ms-1">Active</span>
										</label>
									</div>
								</div>
							</div>										
						</div>
						<!-- /Blog Post -->
						
						<!-- Blog Post -->
						<div class="col-md-6 col-xl-4 col-sm-12 d-flex">
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('admin/blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/blog/blog-08.jpg')}}" alt="Post Image"></a>
									<div class="fav-btn">
										<img src="{{ URL::asset('/assets_admin/img/icon/eye-icon.png')}}" alt="icon"> 103
									</div>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('admin/profile')}}">
													<img src="{{ URL::asset('/assets_admin/img/profiles/avatar-10.jpg')}}" alt="Post Author"> 
													<span>
														<span class="post-title">Dr. Paul</span>
														<span class="post-date"><i class="far fa-clock"></i> 15 Oct 2022</span>
													</span>
												</a>
											</div>
										</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('admin/blog-details')}}">Top 15 types of doctors you should know</a></h3>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...</p>
								</div>
								<div class="row">
									<div class="col"><a href="{{url('admin/edit-blog')}}" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a></div>
									<div class="col text-end">
										<label class="toggle-switch justify-content-end" for="blog8">
											<input type="checkbox" class="toggle-switch-input" id="blog8" checked>
											<span class="toggle-switch-label">
												<span class="toggle-switch-indicator"></span>
											</span> 
											<span class="active-text ms-1">Active</span>
										</label>
									</div>
								</div>
							</div>										
						</div>
						<!-- /Blog Post -->
						
						<!-- Blog Post -->
						<div class="col-md-6 col-xl-4 col-sm-12 d-flex">
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('admin/blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/blog/blog-07.jpg')}}" alt="Post Image"></a>
									<div class="fav-btn">
										<img src="{{ URL::asset('/assets_admin/img/icon/eye-icon.png')}}" alt="icon"> 225
									</div>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('admin/profile')}}">
													<img src="{{ URL::asset('/assets_admin/img/profiles/avatar-03.jpg')}}" alt="Post Author"> 
													<span>
														<span class="post-title">Dr. Jennifer</span>
														<span class="post-date"><i class="far fa-clock"></i> 14 Oct 2022</span>
													</span>
												</a>
											</div>
										</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('admin/blog-details')}}">Choose your own Online Doctor Appointment</a></h3>
									<p>LLorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor...</p>
								</div>
								<div class="row">
									<div class="col"><a href="{{url('admin/edit-blog')}}" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a></div>
									<div class="col text-end">
										<label class="toggle-switch justify-content-end" for="blog7">
											<input type="checkbox" class="toggle-switch-input" id="blog7" checked>
											<span class="toggle-switch-label">
												<span class="toggle-switch-indicator"></span>
											</span> 
											<span class="active-text ms-1">Active</span>
										</label>
									</div>
								</div>
							</div>										
						</div>
						<!-- /Blog Post -->
						
						<!-- Blog Post -->
						<div class="col-md-6 col-xl-4 col-sm-12 d-flex">
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('admin/blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/blog/blog-09.jpg')}}" alt="Post Image"></a>
									<div class="fav-btn">
										<img src="{{ URL::asset('/assets_admin/img/icon/eye-icon.png')}}" alt="icon"> 80
									</div>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('admin/profile')}}">
													<img src="{{ URL::asset('/assets_admin/img/profiles/avatar-04.jpg')}}" alt="Post Author"> 
													<span>
														<span class="post-title">Dr. Elizabeth</span>
														<span class="post-date"><i class="far fa-clock"></i> 20 Oct 2022</span>
													</span>
												</a>
											</div>
										</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('admin/blog-details')}}">How to Keep Your Brain Sharp as You Age</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor...</p>
								</div>
								<div class="row">
									<div class="col"><a href="{{url('admin/edit-blog')}}" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a></div>
									<div class="col text-end">
										<label class="toggle-switch justify-content-end" for="blog9">
											<input type="checkbox" class="toggle-switch-input" id="blog9" checked>
											<span class="toggle-switch-label">
												<span class="toggle-switch-indicator"></span>
											</span> 
											<span class="active-text ms-1">Active</span>
										</label>
									</div>
								</div>
							</div>										
						</div>
						<!-- /Blog Post -->
						
						<!-- Blog Post -->
						<div class="col-md-6 col-xl-4 col-sm-12 d-flex">
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('admin/blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets_admin/img/blog/blog-06.jpg')}}" alt="Post Image"></a>
									<div class="fav-btn">
										<img src="{{ URL::asset('/assets_admin/img/icon/eye-icon.png')}}" alt="icon"> 80
									</div>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('admin/profile')}}">
													<div class="empty-user"><i class="feather-user"></i> </div>
													<span>
														<span class="post-title">Dr. Daniel</span>
														<span class="post-date"><i class="far fa-clock"></i>   22 Nov 2022</span>
													</span>
												</a>
											</div>
										</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('admin/blog-details')}}">Simple steps to make your doctor visits excep....</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor...</p>
								</div>
								<div class="row">
									<div class="col"><a href="{{url('admin/edit-blog')}}" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a></div>
									<div class="col text-end">
										<label class="toggle-switch justify-content-end" for="blog6">
											<input type="checkbox" class="toggle-switch-input" id="blog6" checked>
											<span class="toggle-switch-label">
												<span class="toggle-switch-indicator"></span>
											</span> 
											<span class="active-text ms-1">Active</span>
										</label>
									</div>
								</div>
							</div>										
						</div>
						<!-- /Blog Post -->
						
					</div>
					
					<!-- Pagination -->
					<div class="row ">
						<div class="col-md-12">
							<div class="pagination-tab mt-md-5 d-flex justify-content-center">
								<ul class="pagination mb-0">
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1"><i class="feather-chevron-left mr-2"></i>Previous</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active">
										<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
									</li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item">
										<a class="page-link" href="#">Next<i class="feather-chevron-right ml-2"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Pagination -->
					
				</div>
				<!-- /Blog List -->
				
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
@endsection