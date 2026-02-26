@extends('dashboard.layout.app')

@section('title', 'Liste des medias')

@section('content')


			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header page-header-light shadow">
					<div class="page-header-content d-lg-flex">
						<div class="d-flex">
							<h4 class="page-title mb-0">
								Gallery - <span class="fw-normal">With Title</span>
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
								<a href="#" class="breadcrumb-item">Gallery</a>
								<span class="breadcrumb-item active">With title</span>
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

					<!-- Image grid -->
					<div class="mb-3">
						<h6 class="mb-0">Image grid</h6>
						<span class="text-muted">Image grid with 4 - 2 - 1 columns</span>
					</div>

					<div class="row">

						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-img-actions mx-1 mt-1">
									<img class="card-img img-fluid" src="../../../assets/images/demo/flat/1.png" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="../../../assets/images/demo/flat/1.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
											<i class="ph-plus"></i>
										</a>
										<a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
											<i class="ph-link"></i>
										</a>
									</div>
								</div>

								<div class="card-body">
									<div class="d-flex align-items-start flex-nowrap">
										<div>
											<div class="fw-semibold me-2">For ostrich much</div>
											<span class="fs-sm text-muted">Size: 432kb</span>
										</div>

										<div class="d-inline-flex ms-auto">
											<a href="#" class="text-body"><i class="ph-download-simple"></i></a>
											<a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-img-actions mx-1 mt-1">
									<img class="card-img img-fluid" src="../../../assets/images/demo/flat/3.png" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="../../../assets/images/demo/flat/3.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
											<i class="ph-plus"></i>
										</a>
										<a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
											<i class="ph-link"></i>
										</a>
									</div>
								</div>

								<div class="card-body">
									<div class="d-flex align-items-start flex-nowrap">
										<div>
											<div class="fw-semibold me-2">An so vulgar</div>
											<span class="fs-sm text-muted">Size: 543kb</span>
										</div>

										<div class="d-inline-flex ms-auto">
											<a href="#" class="text-body"><i class="ph-download-simple"></i></a>
											<a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-img-actions mx-1 mt-1">
									<img class="card-img img-fluid" src="../../../assets/images/demo/flat/2.png" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="../../../assets/images/demo/flat/2.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
											<i class="ph-plus"></i>
										</a>
										<a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
											<i class="ph-link"></i>
										</a>
									</div>
								</div>

								<div class="card-body">
									<div class="d-flex align-items-start flex-nowrap">
										<div>
											<div class="fw-semibold me-2">Not rapturous</div>
											<span class="fs-sm text-muted">Size: 219kb</span>
										</div>

										<div class="d-inline-flex ms-auto">
											<a href="#" class="text-body"><i class="ph-download-simple"></i></a>
											<a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-img-actions mx-1 mt-1">
									<img class="card-img img-fluid" src="../../../assets/images/demo/flat/4.png" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="../../../assets/images/demo/flat/4.png" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
											<i class="ph-plus"></i>
										</a>
										<a href="#" class="btn btn-outline-white btn-icon rounded-pill ms-2">
											<i class="ph-link"></i>
										</a>
									</div>
								</div>

								<div class="card-body">
									<div class="d-flex align-items-start flex-nowrap">
										<div>
											<div class="fw-semibold me-2">He it otherwise</div>
											<span class="fs-sm text-muted">Size: 329kb</span>
										</div>

										<div class="d-inline-flex ms-auto">
											<a href="#" class="text-body"><i class="ph-download-simple"></i></a>
											<a href="#" class="text-body ms-2"><i class="ph-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- /image grid -->


					<!-- Video grid -->
					<div class="mb-3 pt-2">
						<h6 class="mb-0">Videos</h6>
						<span class="text-muted">Video grid with 4 - 2 - 1 columns</span>
					</div>
		
					<div class="row">
					@php
						$videos = $videos ?? collect();
					@endphp
					@if($videos->isNotEmpty())
					@foreach($videos as $video)
						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="mx-1 mt-1">
									@php
										$embedUrl = $video->url;
										// Youtube
										if(preg_match('/(youtube\.com\/watch\?v=|youtu\.be\/)/', $video->url)){
											if(preg_match('/v=([A-Za-z0-9_\-]+)/', $video->url, $m)){
												$vid = $m[1];
											} elseif(preg_match('#youtu\.be\/([A-Za-z0-9_\-]+)#', $video->url, $m)){
												$vid = $m[1];
											}
											if(!empty($vid)) $embedUrl = 'https://www.youtube.com/embed/'.$vid;
										}
										// Vimeo
										if(strpos($video->url, 'vimeo.com') !== false && !str_contains($video->url, 'player.vimeo.com')){
											if(preg_match('#vimeo\.com\/(?:video\/)?(\d+)#', $video->url, $m)){
												$embedUrl = 'https://player.vimeo.com/video/'.$m[1];
											}
										}
									@endphp

									<div class="ratio ratio-16x9">
										<iframe class="rounded" allowfullscreen frameborder="0" src="{{ $embedUrl }}"></iframe>
									</div>
								</div>

								<div class="card-body">
									<div class="d-flex align-items-start flex-nowrap">
										<div>
											<div class="fw-semibold me-2">{{ $video->titre ?? $video->title }}</div>
											<span class="fs-sm text-muted">Size: {{ $video->size ?? 'n/a' }}kb</span>
										</div>

										<div class="d-inline-flex ms-auto">
											<a href="#" class="text-body"><i class="ph-download-simple"></i></a>
											<a href="{{ route('list_medias.destroy', $video->id) }}" class="text-body ms-2" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer cette vidéo ?')) { document.getElementById('delete-form-{{ $video->id }}').submit(); }"><i class="ph-trash"></i></a>
											<form id="delete-form-{{ $video->id }}" action="{{ route('list_medias.destroy', $video->id) }}" method="POST" class="d-none">
												@csrf
												@method('DELETE')
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					@endif
						

					</div>

					
					<!-- /video grid -->

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