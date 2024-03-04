@extends('layout.mainlayout_admin')
@section('content')

		<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">			
					<div class="row justify-content-center">			
						<div class="col-lg-10 col-xl-8">			
					
							<!-- Blog Details-->
							<div class="blog-view">
								<div class="blog-single-post">
									<a href="{{url('admin/active-blog')}}" class="back-btn"><i class="feather-chevron-left"></i> Back</a>
									<div class="blog-image">
										<a href="javascript:void(0);"><img alt="" src="{{ URL::asset('/assets_admin/img/blog/blog-01.jpg')}}" class="img-fluid"></a>
									</div>
									<h3 class="blog-title">What are the benefits of Online Doctor Booking?</h3>
									<div class="blog-info">
										<div class="post-list">
											<ul>
												<li>
													<div class="post-author">
														<a href="{{url('admin/profile')}}"><img src="{{ URL::asset('/assets_admin/img/profiles/avatar-02.jpg')}}" alt="Post Author"> <span>by Dr. Lester </span></a>
													</div>
												</li>
												<li><i class="feather-clock"></i> 40 Comments</li>
												<li><i class="feather-message-square"></i> 40 Comments</li>
												<li><i class="feather-grid"></i> Topical chemotherapy, Gynacologist</li>
											</ul>
										</div>
									</div>
									<div class="blog-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
									</div>
								</div>
								
								<!-- About Author -->
								<div class="card author-widget clearfix">
									<div class="card-header">
										<h4 class="card-title">About Author</h4>
									</div>
									<div class="card-body">
										<div class="about-author">
											<div class="about-author-img">
												<div class="author-img-wrap">
													<a href="{{url('admin/profile')}}"><img class="img-fluid" alt="" src="{{ URL::asset('/assets_admin/img/profiles/avatar-02.jpg')}}"></a>
												</div>
											</div>
											<div class="author-details">
												<a href="{{url('admin/profile')}}" class="blog-author-name">Dr. Darren Elder <span>Orthopaedics, Male, 40 Years Old</span></a>
												<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- /About Author -->
								
								<!-- Comments -->
								<div class="card blog-comments">
									<div class="card-header">
										<h4 class="card-title">Comments (5)</h4>
									</div>
									<div class="card-body pb-0">
										<ul class="comments-list">
											<li>
												<div class="comment">
													<div class="comment-author">
														<img class="avatar" alt="" src="{{ URL::asset('/assets_admin/img/profiles/avatar-06.jpg')}}">
													</div>
													<div class="comment-block">
														<div class="comment-by">
															<h5 class="blog-author-name">Michelle Fairfax <span class="blog-date"> <i class="feather-clock me-2"></i>Dec 6, 2017</span></h5>
														</div>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>											
														<a class="comment-btn" href="#">
															<img class="me-1" alt="icon" src="{{ URL::asset('/assets_admin/img/icon/reply-icon.png')}}"> Reply
														</a>
													</div>
												</div>
												<ul class="comments-list reply">
													<li>
														<div class="comment">
															<div class="comment-author">
																<img class="avatar" alt="" src="{{ URL::asset('/assets_admin/img/profiles/avatar-07.jpg')}}">
															</div>
															<div class="comment-block">
																<div class="comment-by">
																	<h5 class="blog-author-name">Gina Moore <span class="blog-date"> <i class="feather-clock me-2"></i> 6 Dec 2022</span></h5>
																</div>
																<p>gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur</p>
																<a class="comment-btn" href="#">
																	<img class="me-1" alt="icon" src="{{ URL::asset('/assets_admin/img/icon/reply-icon.png')}}"> Reply
																</a>
															</div>
														</div>
													</li>
													<li>
														<div class="comment">
															<div class="comment-author">
																<img class="avatar" alt="" src="{{ URL::asset('/assets_admin/img/profiles/avatar-08.jpg')}}">
															</div>
															<div class="comment-block">
																<div class="comment-by">
																	<h5 class="blog-author-name">Carl Kelly <span class="blog-date"> <i class="feather-clock me-2"></i> 7 Dec 2022</span></h5>
																</div>
																<p> pellentesque urna varius vitae, gravida pellentesque urna  consectetur adipiscing elit. Nam viverra euismod.</p>
																<a class="comment-btn" href="#">
																	<img class="me-1" alt="icon" src="{{ URL::asset('/assets_admin/img/icon/reply-icon.png')}}"> Reply
																</a>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li>
												<div class="comment">
													<div class="comment-author">
														<img class="avatar" alt="" src="{{ URL::asset('/assets_admin/img/profiles/avatar-09.jpg')}}">
													</div>
													<div class="comment-block">
														<div class="comment-by">
															<h5 class="blog-author-name">Elsie Gilley <span class="blog-date"> <i class="feather-clock me-2"></i> 7 Dec 2022</span></h5>
														</div>
														<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="comment">
													<div class="comment-author">
														<img class="avatar" alt="" src="{{ URL::asset('/assets_admin/img/profiles/avatar-10.jpg')}}">
													</div>
													<div class="comment-block">
														<div class="comment-by">
															<h5 class="blog-author-name">Joan Gardner <span class="blog-date"> <i class="feather-clock me-2"></i>  12 Dec 2022</span></h5>
														</div>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														<a class="comment-btn" href="#">
															<img class="me-1" alt="icon" src="{{ URL::asset('/assets_admin/img/icon/reply-icon.png')}}"> Reply
														</a>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Comments -->
								
								<!-- Leave Comment -->
								<div class="card new-comment clearfix">
									<div class="card-header">
										<h4 class="card-title">Leave Comment</h4>
									</div>
									<div class="card-body">
										<form>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating">
												<label class="focus-label">Name <span class="text-danger">*</span></label>
											</div>
											<div class="form-group form-focus">
												<input type="email" class="form-control floating">
												<label class="focus-label">Your Email Address  <span class="text-danger">*</span></label>
											</div>
											<div class="form-group">
												<textarea rows="4" class="form-control bg-grey" placeholder="Comments"></textarea>
											</div>
											<div class="submit-section">
												<button class="btn btn-primary submit-btn" type="submit">Submit</button>
											</div>
										</form>
									</div>
								</div>
								<!-- /Leave Comment -->
								
								<div class="card blog-share clearfix">
									<div class="card-header">
										<h4 class="card-title">Share the post</h4>
									</div>
									<div class="card-body">
										<ul class="social-share">
											<li><a href="#"><i class="feather-twitter"></i></a></li>
											<li><a href="#"><i class="feather-facebook"></i></a></li>
											<li><a href="#"><i class="feather-linkedin"></i></a></li>
											<li><a href="#"><i class="feather-instagram"></i></a></li>
											<li><a href="#"><i class="feather-youtube"></i></a></li>
										</ul>
									</div>
								</div>
						
							</div>
						</div>
					</div>
					<!-- /Blog Details-->
			
				</div>
			</div>
			<!-- /Page Wrapper -->
		
		</div>
		<!-- /Main Wrapper -->
	
@endsection