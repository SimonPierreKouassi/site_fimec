@extends('dashboard.layout.app')

@section('title', 'Détail d\'une actualité')


@section('content')

<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header page-header-light shadow">
					<div class="page-header-content d-lg-flex">
						<div class="d-flex">
							<h4 class="page-title mb-0">
								Blog - <span class="fw-normal">Single</span>
							</h4>

							<a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
								<i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
							</a>
						</div>

						<div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
							<div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
								<div class="dropdown w-100 w-sm-auto">
									<a href="#" class="d-flex align-items-center text-body lh-1 dropdown-toggle py-sm-2" data-bs-toggle="dropdown" data-bs-display="static">
										<img src="../../../assets/images/brands/tesla.svg" class="w-32px h-32px me-2" alt="">
										<div class="me-auto me-lg-1">
											<div class="fs-sm text-muted mb-1">Customer</div>
											<div class="fw-semibold">Tesla Motors Inc</div>
										</div>
									</a>

									<div class="dropdown-menu dropdown-menu-lg-end w-100 w-lg-auto wmin-300 wmin-sm-350 pt-0">
										<div class="d-flex align-items-center p-3">
											<h6 class="fw-semibold mb-0">Customers</h6>
											<a href="#" class="ms-auto">
												View all
												<i class="ph-arrow-circle-right ms-1"></i>
											</a>
										</div>
										<a href="#" class="dropdown-item active py-2">
											<img src="../../../assets/images/brands/tesla.svg" class="w-32px h-32px me-2" alt="">
											<div>
												<div class="fw-semibold">Tesla Motors Inc</div>
												<div class="fs-sm text-muted">42 users</div>
											</div>
										</a>
										<a href="#" class="dropdown-item py-2">
											<img src="../../../assets/images/brands/debijenkorf.svg" class="w-32px h-32px me-2" alt="">
											<div>
												<div class="fw-semibold">De Bijenkorf</div>
												<div class="fs-sm text-muted">49 users</div>
											</div>
										</a>
										<a href="#" class="dropdown-item py-2">
											<img src="../../../assets/images/brands/klm.svg" class="w-32px h-32px me-2" alt="">
											<div>
												<div class="fw-semibold">Royal Dutch Airlines</div>
												<div class="fs-sm text-muted">18 users</div>
											</div>
										</a>
										<a href="#" class="dropdown-item py-2">
											<img src="../../../assets/images/brands/shell.svg" class="w-32px h-32px me-2" alt="">
											<div>
												<div class="fw-semibold">Royal Dutch Shell</div>
												<div class="fs-sm text-muted">54 users</div>
											</div>
										</a>
										<a href="#" class="dropdown-item py-2">
											<img src="../../../assets/images/brands/bp.svg" class="w-32px h-32px me-2" alt="">
											<div>
												<div class="fw-semibold">BP plc</div>
												<div class="fs-sm text-muted">23 users</div>
											</div>
										</a>
									</div>
								</div>

								<div class="vr d-none d-sm-block flex-shrink-0 my-2 mx-3"></div>

								<div class="d-inline-flex mt-3 mt-sm-0">
									<a href="#" class="status-indicator-container ms-1">
										<img src="../../../assets/images/demo/users/face24.jpg" class="w-32px h-32px rounded-pill" alt="">
										<span class="status-indicator bg-warning"></span>
									</a>
									<a href="#" class="status-indicator-container ms-1">
										<img src="../../../assets/images/demo/users/face1.jpg" class="w-32px h-32px rounded-pill" alt="">
										<span class="status-indicator bg-success"></span>
									</a>
									<a href="#" class="status-indicator-container ms-1">
										<img src="../../../assets/images/demo/users/face3.jpg" class="w-32px h-32px rounded-pill" alt="">
										<span class="status-indicator bg-danger"></span>
									</a>
									<a href="#" class="btn btn-outline-primary btn-icon w-32px h-32px rounded-pill ms-3">
										<i class="ph-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="page-header-content d-lg-flex border-top">
						<div class="d-flex">
							<div class="breadcrumb py-2">
								<a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
								<a href="#" class="breadcrumb-item">Blog</a>
								<span class="breadcrumb-item active">Single</span>
							</div>

							<a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
								<i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
							</a>
						</div>

						<div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
							<div class="d-lg-flex mb-2 mb-lg-0">
								<a href="#" class="d-flex align-items-center text-body py-2">
									<i class="ph-lifebuoy me-2"></i>
									Support
								</a>

								<div class="dropdown ms-lg-3">
									<a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
										<i class="ph-gear me-2"></i>
										<span class="flex-1">Settings</span>
									</a>

									<div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
										<a href="#" class="dropdown-item">
											<i class="ph-shield-warning me-2"></i>
											Account security
										</a>
										<a href="#" class="dropdown-item">
											<i class="ph-chart-bar me-2"></i>
											Analytics
										</a>
										<a href="#" class="dropdown-item">
											<i class="ph-lock-key me-2"></i>
											Privacy
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">
											<i class="ph-gear me-2"></i>
											All settings
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Inner container -->
					<div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">

						<!-- Left content -->
						<div class="flex-1 order-2 order-lg-1">

							<!-- Post -->
							<div class="card">
								<div class="card-body">
									<div class="mb-4">
										<div class="mb-3 text-center">
											<a href="#" class="d-inline-block">
												<img src="{{ asset('storage/'.$actualite->image) }}" class="img-fluid rounded" alt="">
											</a>
										</div>

										<h3 class="card-title pt-2 mb-1">
											<a href="#" class="text-body">{{$actualite->titre}}</a>
										</h3>

										<ul class="list-inline list-inline-bullet text-muted mb-3">
											<li class="list-inline-item">By <a href="#">Eugene</a></li>
											<li class="list-inline-item">July 5th, 2016</li>
											<li class="list-inline-item"><a href="#">12 comments</a></li>
											<li class="list-inline-item"><a href="#"><i class="ph-heart text-pink me-1"></i> 281</a></li>
										</ul>

										<div class="mb-3">
											<p>Attachment apartments in delightful by motionless it no. And now she burst sir learn total. Hearing hearted shewing own ask. Solicitude uncommonly use her motionless not collecting age. The properly servants required mistaken outlived bed and. Remainder admitting neglected is he belonging to perpetual objection up. Has widen too you decay begin which asked equal any.</p>

											<p>Started his hearted any civilly. So me by marianne admitted speaking. Men bred fine call ask. Cease one miles truth day above seven. Suspicion sportsmen provision suffering mrs saw engrossed something. Snug soon he on plan in be dine some.</p>

											<p>Death there mirth way the noisy merit. Piqued shy spring nor six though mutual living ask extent. Replying of dashwood advanced ladyship smallest disposal or. Attempt offices own improve now see. Called person are around county talked her esteem. Those fully these way nay thing seems.</p>
										</div>

										<div class="bg-light border-start border-start-width-3 border-start-primary rounded-end p-3">
											<blockquote class="blockquote d-flex mb-0">
						                    	<div class="me-3">
							                    	<img class="rounded-circle" src="../../../assets/images/demo/users/face1.jpg" width="46" height="46" alt="">
						                    	</div>

						                    	<div>
													Dear far dove lynx inaudibly between after under after on some far warthog.
													<footer class="blockquote-footer mb-0">Someone famous in <cite title="Source Title">Source Title</cite></footer>
												</div>
											</blockquote>
										</div>
									</div>

									<div class="mb-4">
										<h5>Insipidity the sufficient discretion</h5>

										<p>Raising say express had chiefly detract demands she. Quiet led own cause three him. Front no party young abode state up. Saved he do fruit woody of to. Met defective are allowance two perceived listening consulted contained. It chicken oh colonel pressed excited suppose to shortly. He improve started no we manners however effects. Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything. Up help home head spot an he room in.</p>

										<p>Unpleasant nor diminution excellence apartments imprudence the met new. Draw part them he an to he roof only. Music leave say doors him. Tore bred form if sigh case as do. Staying he no looking if do opinion. Sentiments way understood end partiality and his.</p>
									</div>

									<div>
										<h5>Out believe has request not how comfort evident</h5>

										<p class="mb-3">Up delight cousins we feeling minutes. Genius has looked end piqued spring. Down has rose feel find man. Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose.</p>

										<div class="row">
											<div class="col-lg-4">
												<ul class="list list-unstyled">
													<li>
														<i class="ph-check-circle text-success me-2"></i>
														Style never met and those among great
													</li>
													<li>
														<i class="ph-check-circle text-success me-2"></i>
														At no or september sportsmen
													</li>
													<li>
														<i class="ph-check-circle text-success me-2"></i>
														Depending listening delivered
													</li>
													<li>
														<i class="ph-check-circle text-success me-2"></i>
														Person plenty answer to exeter it
													</li>
												</ul>
											</div>

											<div class="col-lg-4">
												<ul class="list list-unstyled">
													<li>
														<i class="ph-check-circle text-success me-2"></i>
														Law use assistance especially resolution
													</li>
													<li>
														<i class="ph-check-circle text-success me-2"></i>
														Way necessary had intention happiness
													</li>
													<li>
														<i class="ph-check-circle text-success me-2"></i>
														Furniture furnished or on strangers
													</li>
													<li>
														<i class="ph-check-circle text-success me-2"></i>
														But why smiling man her imagine
													</li>
												</ul>
											</div>

											<div class="col-lg-4">
												<ul class="list list-unstyled">
													<li>
														<i class="ph-check-circle text-success me-2"></i>
														Chiefly can man her out believe
													</li>
													<li>
														<i class="ph-check-circle text-success me-2"></i>
														Solicitude it introduced companions
													</li>
													<li>
														<i class="ph-check-circle text-success me-2"></i>
														My almost or horses period
													</li>
													<li>
														<i class="ph-check-circle text-success me-2"></i>
														Motionless are six terminated man
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /post -->


							<!-- About author -->
							<div class="card">
								<div class="card-header d-sm-flex border-bottom-0 pb-0">
									<h5 class="mb-0">About the author</h5>

									<div class="d-inline-flex align-items-center ms-sm-auto">
										<a href="#" class="text-body ms-2" data-bs-popup="tooltip" title="Google Drive"><i class="ph-google-logo"></i></a>
										<a href="#" class="text-body ms-2" data-bs-popup="tooltip" title="Twitter"><i class="ph-twitter-logo"></i></a>
										<a href="#" class="text-body ms-2" data-bs-popup="tooltip" title="Github"><i class="ph-github-logo"></i></a>
										<a href="#" class="text-body ms-2" data-bs-popup="tooltip" title="Linked In"><i class="ph-linkedin-logo"></i></a>
									</div>
								</div>

								<div class="card-body d-flex flex-column flex-lg-row">
									<div class="me-lg-3 mb-2 mb-lg-0">
										<a href="#">
											<img src="../../../assets/images/demo/users/face1.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>

									<div class="flex-fill">
										<h6 class="mb-1">James Alexander</h6>
										<p>So slit more darn hey well wore submissive savage this shark aardvark fumed thoughtfully much drank when angelfish so outgrew some alas vigorously therefore warthog superb less oh groundhog less alas gibbered barked some hey despicably with aesthetic hamster jay by luckily</p>

										<ul class="list-inline mb-0">
											<li class="list-inline-item"><a href="#">Author profile</a></li>
											<li class="list-inline-item"><a href="#">All posts by James</a></li>
											<li class="list-inline-item"><a href="#">https://website.com</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /about author -->


							<!-- Comments -->
							<div class="card">
								<div class="card-header d-sm-flex">
									<h6 class="mb-0">Discussion</h6>
									<ul class="list-inline text-muted mb-0 ms-sm-auto">
										<li class="list-inline-item">42 comments</li>
										<li class="list-inline-item">75 pending review</li>
									</ul>
								</div>

								<div class="card-body">
									<div class="d-flex flex-column flex-lg-row mb-3">
										<div class="me-lg-3 mb-2 mb-lg-0">
											<a href="#"><img src="../../../assets/images/demo/users/face2.jpg" class="rounded-circle" width="40" height="40" alt=""></a>
										</div>

										<div class="flex-fill">
											<a href="#" class="fw-semibold">William Jennings</a>
											<span class="fs-sm text-muted ms-3">Just now</span>

											<p>He moonlight difficult engrossed an it sportsmen. Interested has all devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to.</p>

											<ul class="list-inline mb-0">
												<li class="list-inline-item d-inline-flex align-items-center">
													<a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
													114
												</li>
												<li class="list-inline-item ms-2">
													<a href="#">Reply</a>
												</li>
												<li class="list-inline-item">
													<a href="#">Edit</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="d-flex flex-column flex-lg-row mb-3">
										<div class="me-lg-3 mb-2 mb-lg-0">
											<a href="#"><img src="../../../assets/images/demo/users/face3.jpg" class="rounded-circle" width="40" height="40" alt=""></a>
										</div>

										<div class="flex-fill">
											<a href="#" class="fw-semibold">Margo Baker</a>
											<span class="fs-sm text-muted ms-3">5 minutes ago</span>

											<p>Place voice no arise along to. Parlors waiting so against me no. Wishing calling are warrant settled was luckily. Express besides it present if at an opinion visitor.</p>

											<ul class="list-inline mb-0">
												<li class="list-inline-item d-inline-flex align-items-center">
													<a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
													90
												</li>
												<li class="list-inline-item ms-2">
													<a href="#">Reply</a>
												</li>
												<li class="list-inline-item">
													<a href="#">Edit</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="d-flex flex-column flex-lg-row mb-3">
										<div class="me-lg-3 mb-2 mb-lg-0">
											<a href="#"><img src="../../../assets/images/demo/users/face1.jpg" class="rounded-circle" width="40" height="40" alt=""></a>
										</div>

										<div class="flex-fill">
											<a href="#" class="fw-semibold">James Alexander</a>
											<span class="fs-sm text-muted ms-3">7 minutes ago</span>

											<p>Savings her pleased are several started females met. Short her not among being any. Thing of judge fruit charm views do. Miles mr an forty along as he.</p>

											<ul class="list-inline mb-0">
												<li class="list-inline-item d-inline-flex align-items-center">
													<a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
													70
												</li>
												<li class="list-inline-item ms-2">
													<a href="#">Reply</a>
												</li>
												<li class="list-inline-item">
													<a href="#">Edit</a>
												</li>
											</ul>

											<div class="d-flex flex-column flex-lg-row mt-3">
												<div class="me-lg-3 mb-2 mb-lg-0">
													<a href="#"><img src="../../../assets/images/demo/users/face9.jpg" class="rounded-circle" width="40" height="40" alt=""></a>
												</div>

												<div class="flex-fill">
													<a href="#" class="fw-semibold">Jack Cooper</a>
													<span class="fs-sm text-muted ms-3">10 minutes ago</span>

													<p>She education get middleton day agreement performed preserved unwilling. Do however as pleased offence outward beloved by present. By outward neither he so covered.</p>

													<ul class="list-inline mb-0">
														<li class="list-inline-item d-inline-flex align-items-center">
															<a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
															67
														</li>
														<li class="list-inline-item ms-2">
															<a href="#">Reply</a>
														</li>
														<li class="list-inline-item">
															<a href="#">Edit</a>
														</li>
													</ul>

													<div class="d-flex flex-column flex-lg-row mt-3">
														<div class="me-lg-3 mb-2 mb-lg-0">
															<a href="#"><img src="../../../assets/images/demo/users/face11.jpg" class="rounded-circle" width="40" height="40" alt=""></a>
														</div>

														<div class="flex-fill">
															<a href="#" class="fw-semibold">Natalie Wallace</a>
															<span class="fs-sm text-muted ms-3">1 hour ago</span>

															<p>Juvenile proposal betrayed he an informed weddings followed. Precaution day see imprudence sympathize principles. At full leaf give quit to in they up.</p>

															<ul class="list-inline mb-0">
																<li class="list-inline-item d-inline-flex align-items-center">
																	<a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
																	54
																</li>
																<li class="list-inline-item ms-2">
																	<a href="#">Reply</a>
																</li>
																<li class="list-inline-item">
																	<a href="#">Edit</a>
																</li>
															</ul>
														</div>
													</div>

													<div class="d-flex flex-column flex-lg-row mt-3">
														<div class="me-lg-3 mb-2 mb-lg-0">
															<a href="#"><img src="../../../assets/images/demo/users/face13.jpg" class="rounded-circle" width="40" height="40" alt=""></a>
														</div>

														<div class="flex-fill">
															<a href="#" class="fw-semibold">Nicolette Grey</a>
															<span class="fs-sm text-muted ms-3">2 hours ago</span>

															<p>Although moreover mistaken kindness me feelings do be marianne. Son over own nay with tell they cold upon are. Cordial village and settled she ability law herself.</p>

															<ul class="list-inline mb-0">
																<li class="list-inline-item d-inline-flex align-items-center">
																	<a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
																	41
																</li>
																<li class="list-inline-item ms-2">
																	<a href="#">Reply</a>
																</li>
																<li class="list-inline-item">
																	<a href="#">Edit</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="d-flex flex-column flex-lg-row">
										<div class="me-lg-3 mb-2 mb-lg-0">
											<a href="#"><img src="../../../assets/images/demo/users/face4.jpg" class="rounded-circle" width="40" height="40" alt=""></a>
										</div>

										<div class="flex-fill">
											<a href="#" class="fw-semibold">Victoria Johnson</a>
											<span class="fs-sm text-muted ms-3">3 hours ago</span>

											<p>Finished why bringing but sir bachelor unpacked any thoughts. Unpleasing unsatiable particular inquietude did nor sir.</p>

											<ul class="list-inline mb-0">
												<li class="list-inline-item d-inline-flex align-items-center">
													<a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>
													32
												</li>
												<li class="list-inline-item ms-2">
													<a href="#">Reply</a>
												</li>
												<li class="list-inline-item">
													<a href="#">Edit</a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="border-top border-bottom">
									<div id="add-comment">Get his declared appetite distance his together now families. Friends am himself at on norland it viewing. Suspected elsewhere you belonging continued commanded she...</div>									
								</div>

								<div class="card-body text-end">
									<button type="button" class="btn btn-primary">
										Submit
										<i class="ph-paper-plane-tilt ms-2"></i>
									</button>
								</div>
							</div>
							<!-- /comments -->

						</div>
						<!-- /left content -->


						<!-- Right sidebar component -->
						<div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none order-1 order-lg-2 ms-lg-3 mb-3">

							<!-- Sidebar content -->
							<div class="sidebar-content">

								<!-- Search -->
								<div class="card">
									<div class="sidebar-section-header border-bottom">
										<span class="fw-semibold">Search articles</span>
									</div>

									<div class="sidebar-section-body">
										<div class="form-control-feedback form-control-feedback-end">
											<input type="search" class="form-control" placeholder="Search...">
											<div class="form-control-feedback-icon">
												<i class="ph-magnifying-glass"></i>
											</div>
										</div>
									</div>
								</div>
								<!-- /search -->


								<!-- Categories -->
								<div class="card">
									<div class="sidebar-section-header border-bottom">
										<span class="fw-semibold">Categories</span>
									</div>

									<div class="nav nav-sidebar">
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="ph-file-text me-2"></i>
												Posts
												<span class="text-muted fs-sm fw-normal ms-auto">12</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="ph-file-video me-2"></i>
												Video
												<span class="text-muted fs-sm fw-normal ms-auto">26</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="ph-file-image me-2"></i>
												Images
												<span class="text-muted fs-sm fw-normal ms-auto">83</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="ph-files me-2"></i>
												Articles
												<span class="text-muted fs-sm fw-normal ms-auto">43</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="ph-camera me-2"></i>
												Photography
												<span class="text-muted fs-sm fw-normal ms-auto">72</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="ph-books me-2"></i>
												Books
												<span class="text-muted fs-sm fw-normal ms-auto">97</span>
											</a>
										</li>
									</div>
								</div>
								<!-- /categories -->


								<!-- Share -->
								<div class="card">
									<div class="sidebar-section-header border-bottom">
										<span class="fw-semibold">Share</span>
									</div>

									<div class="sidebar-section-body pb-0">
										<ul class="list-inline text-center mb-0">
											<li class="list-inline-item">
												<a href="#" class="btn btn-primary btn-icon btn-lg rounded-pill mb-3">
													<i class="ph-facebook-logo"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a href="#" class="btn btn-danger btn-icon btn-lg rounded-pill mb-3">
													<i class="ph-youtube-logo"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a href="#" class="btn btn-info btn-icon btn-lg rounded-pill mb-3">
													<i class="ph-twitter-logo"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a href="#" class="btn btn-warning btn-icon btn-lg rounded-pill mb-3">
													<i class="ph-rss"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- /share -->


								<!-- Recent comments -->
								<div class="card">
									<div class="sidebar-section-header border-bottom">
										<span class="fw-semibold">Recent comments</span>
									</div>

									<div class="sidebar-section-body">
										<li class="d-flex mb-3">
											<div class="me-3">
												<img src="../../../assets/images/demo/users/face10.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>

											<div class="flex-fill">
												<a href="#" class="fw-semibold">James Alexander</a>
												<div class="text-muted">Who knows, maybe that...</div>
											</div>
										</li>

										<li class="d-flex mb-3">
											<div class="me-3">
												<img src="../../../assets/images/demo/users/face3.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>

											<div class="flex-fill">
												<a href="#" class="fw-semibold">Margo Baker</a>
												<div class="text-muted">That was something he...</div>
											</div>
										</li>

										<li class="d-flex mb-3">
											<div class="me-3">
												<img src="../../../assets/images/demo/users/face24.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>

											<div class="flex-fill">
												<a href="#" class="fw-semibold">Jeremy Victorino</a>
												<div class="text-muted">But that would be...</div>
											</div>
										</li>

										<li class="d-flex mb-3">
											<div class="me-3">
												<img src="../../../assets/images/demo/users/face4.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>

											<div class="flex-fill">
												<a href="#" class="fw-semibold">Beatrix Diaz</a>
												<div class="text-muted">What a strenuous career...</div>
											</div>
										</li>

										<li class="d-flex">
											<div class="me-3">
												<img src="../../../assets/images/demo/users/face25.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>

											<div class="flex-fill">
												<a href="#" class="fw-semibold">Richard Vango</a>
												<div class="text-muted">Other travelling salesmen...</div>
											</div>
										</li>
									</div>
								</div>
								<!-- /recent comments -->


								<!-- Photos from Flickr -->
								<div class="card">
									<div class="sidebar-section-header border-bottom">
										<span class="fw-semibold">Photos from Flickr</span>
									</div>

									<div class="sidebar-section-body">
										<div class="row g-0">
											<div class="col">
												<div class="card-img-actions">
													<a href="../../../assets/images/demo/flat/8.png" class="text-white" data-bs-popup="lightbox">
														<img class="img-fluid rounded-top-start" src="../../../assets/images/demo/flat/8.png" alt="">
														<span class="card-img-actions-overlay rounded-top-start">
															<i class="ph-plus"></i>
														</span>
													</a>
												</div>

												<div class="card-img-actions">
													<a href="../../../assets/images/demo/flat/4.png" class="text-white" data-bs-popup="lightbox">
														<img class="img-fluid" src="../../../assets/images/demo/flat/4.png" alt="">
														<span class="card-img-actions-overlay">
															<i class="ph-plus"></i>
														</span>
													</a>
												</div>

												<div class="card-img-actions">
													<a href="../../../assets/images/demo/flat/5.png" class="text-white" data-bs-popup="lightbox">
														<img class="img-fluid rounded-bottom-start" src="../../../assets/images/demo/flat/5.png" alt="">
														<span class="card-img-actions-overlay rounded-bottom-start">
															<i class="ph-plus"></i>
														</span>
													</a>
												</div>
											</div>

											<div class="col">
												<div class="card-img-actions">
													<a href="../../../assets/images/demo/flat/6.png" class="text-white" data-bs-popup="lightbox">
														<img class="img-fluid rounded-top-end" src="../../../assets/images/demo/flat/6.png" alt="">
														<span class="card-img-actions-overlay rounded-top-end">
															<i class="ph-plus"></i>
														</span>
													</a>
												</div>

												<div class="card-img-actions">
													<a href="../../../assets/images/demo/flat/7.png" class="text-white" data-bs-popup="lightbox">
														<img class="img-fluid" src="../../../assets/images/demo/flat/7.png" alt="">
														<span class="card-img-actions-overlay">
															<i class="ph-plus"></i>
														</span>
													</a>
												</div>

												<div class="card-img-actions">
													<a href="../../../assets/images/demo/flat/8.png" class="text-white" data-bs-popup="lightbox">
														<img class="img-fluid rounded-bottom-end" src="../../../assets/images/demo/flat/8.png" alt="">
														<span class="card-img-actions-overlay rounded-bottom-end">
															<i class="ph-plus"></i>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /photos from Flickr -->


								<!-- Online users -->
								<div class="card">
									<div class="sidebar-section-header border-bottom">
										<span class="fw-semibold">Online users</span>
									</div>

									<div class="sidebar-section-body">
										<div class="d-flex mb-3">
											<div class="me-3">
												<img src="../../../assets/images/demo/users/face1.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>

											<div class="flex-fill">
												<a href="#" class="fw-semibold">James Alexander</a>
												<div class="fs-sm text-muted">Santa Ana, CA.</div>
											</div>

											<div class="align-self-center">
												<div class="bg-success border-success rounded-pill p-1"></div>
											</div>
										</div>

										<div class="d-flex mb-3">
											<div class="me-3">
												<img src="../../../assets/images/demo/users/face2.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>

											<div class="flex-fill">
												<a href="#" class="fw-semibold">Jeremy Victorino</a>
												<div class="fs-sm text-muted">Dowagiac, MI.</div>
											</div>

											<div class="align-self-center">
												<div class="bg-danger border-danger rounded-pill p-1"></div>
											</div>
										</div>

										<div class="d-flex mb-3">
											<div class="me-3">
												<img src="../../../assets/images/demo/users/face3.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>

											<div class="flex-fill">
												<a href="#" class="fw-semibold">Margo Baker</a>
												<div class="fs-sm text-muted">Kasaan, AK.</div>
											</div>

											<div class="align-self-center">
												<div class="bg-success border-success rounded-pill p-1"></div>
											</div>
										</div>

										<div class="d-flex mb-3">
											<div class="me-3">
												<img src="../../../assets/images/demo/users/face4.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>

											<div class="flex-fill">
												<a href="#" class="fw-semibold">Beatrix Diaz</a>
												<div class="fs-sm text-muted">Neenah, WI.</div>
											</div>

											<div class="align-self-center">
												<div class="bg-warning border-warning rounded-pill p-1"></div>
											</div>
										</div>

										<div class="d-flex">
											<div class="me-3">
												<img src="../../../assets/images/demo/users/face5.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>

											<div class="flex-fill">
												<a href="#" class="fw-semibold">Richard Vango</a>
												<div class="fs-sm text-muted">Grapevine, TX.</div>
											</div>

											<div class="align-self-center">
												<div class="bg-secondary border-secondary rounded-pill p-1"></div>
											</div>
										</div>
									</div>
								</div>
								<!-- /online users -->


								<!-- Tags -->
								<div class="card">
									<div class="sidebar-section-header border-bottom">
										<span class="fw-semibold">Tags</span>
									</div>

									<div class="sidebar-section-body pb-2">
										<ul class="list-inline mb-0">
											<li class="list-inline-item">
												<a href="#">
													<span class="badge bg-light border-start border-width-3 text-body border-primary rounded-start-0 mb-2">Audio</span>
												</a>
											</li>
											<li class="list-inline-item">
												<a href="#">
													<span class="badge bg-light border-start border-width-3 text-body border-warning rounded-start-0 mb-2">Gallery</span>
												</a>
											</li>
											<li class="list-inline-item">
												<a href="#">
													<span class="badge bg-light border-start border-width-3 text-body border-indigo rounded-start-0 mb-2">Image</span>
												</a>
											</li>
											<li class="list-inline-item">
												<a href="#">
													<span class="badge bg-light border-start border-width-3 text-body border-teal rounded-start-0 mb-2">Music</span>
												</a>
											</li>
											<li class="list-inline-item">
												<a href="#">
													<span class="badge bg-light border-start border-width-3 text-body border-pink rounded-start-0 mb-2">Blog</span>
												</a>
											</li>
											<li class="list-inline-item">
												<a href="#">
													<span class="badge bg-light border-start border-width-3 text-body border-purple rounded-start-0 mb-2">Learn</span>
												</a>
											</li>
											<li class="list-inline-item">
												<a href="#">
													<span class="badge bg-light border-start border-width-3 text-body border-primary rounded-start-0 mb-2">Youtube</span>
												</a>
											</li>
											<li class="list-inline-item">
												<a href="#">
													<span class="badge bg-light border-start border-width-3 text-body border-secondary rounded-start-0 mb-2">Twitter</span>
												</a>
											</li>
											<li class="list-inline-item">
												<a href="#">
													<span class="badge bg-light border-start border-width-3 text-body border-warning rounded-start-0 mb-2">Eugene</span>
												</a>
											</li>
											<li class="list-inline-item">
												<a href="#">
													<span class="badge bg-light border-start border-width-3 text-body border-indigo rounded-start-0 mb-2">Limitless</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- /tags -->


								<!-- Archive -->
								<div class="card">
									<div class="sidebar-section-header border-bottom">
										<span class="fw-semibold">Archive</span>
									</div>

									<div class="nav nav-sidebar">
										<li class="nav-item">
											<a href="#" class="nav-link">January 2018</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">December 2017</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">November 2017</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">October 2017</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">September 2017</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">August 2017</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">July 2017</a>
										</li>
									</div>
								</div>
								<!-- /archive -->

							</div>
							<!-- /sidebar content -->

						</div>
						<!-- /right sidebar component -->

					</div>
					<!-- /inner container -->

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-sm navbar-footer border-top">
					<div class="container-fluid">
						<span>&copy; 2022 <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Limitless Web App Kit</a></span>

						<ul class="nav">
							<li class="nav-item">
								<a href="https://kopyov.ticksy.com/" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-lifebuoy"></i>
										<span class="d-none d-md-inline-block ms-2">Support</span>
									</div>
								</a>
							</li>
							<li class="nav-item ms-md-1">
								<a href="https://demo.interface.club/limitless/demo/Documentation/index.html" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-file-text"></i>
										<span class="d-none d-md-inline-block ms-2">Docs</span>
									</div>
								</a>
							</li>
							<li class="nav-item ms-md-1">
								<a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-shopping-cart"></i>
										<span class="d-none d-md-inline-block ms-2">Purchase</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

@endsection