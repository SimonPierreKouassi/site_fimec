@extends('dashboard.layout.app')

@section('title', 'Liste des actualités')

@section('content')
<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header page-header-light shadow">
					<div class="page-header-content d-lg-flex">
						<div class="d-flex">
							<h4 class="page-title mb-0">
								<span class="fw-normal">Liste des actualités</span>
							</h4>
							<a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
								<i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
							</a>
						</div>

						
					</div>

					<div class="page-header-content d-lg-flex border-top">
						<div class="d-flex">
							<div class="breadcrumb py-2">
								<a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
								<a href="#" class="breadcrumb-item">Blog</a>
								<span class="breadcrumb-item active">Grid</span>
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

					<!-- Post grid -->
					<div class="row">
						<div class="col-lg-12">
							@php
                                $actualites = $actualites ?? collect();
                            @endphp
							@if ($actualites->isNotEmpty())
								@foreach ( $actualites as $actualite )
									<div class="card">
										<div class="card-body">
											<div class="card-img-actions mb-3">
												<img class="card-img img-fluid" src="{{ asset('storage/'.$actualite->image) }}" alt="">
												<div class="card-img-actions-overlay card-img">
													<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
														<i class="ph-link"></i>
													</a>
												</div>
											</div>

											<h5 class="card-title pt-1 mb-1">
												<a href="blog_single.html" class="text-body">{{ $actualite->titre }}</a>
											</h5>

											<ul class="list-inline list-inline-bullet text-muted mb-3">
												<li class="list-inline-item">By <a href="#">Admin</a></li>
												<li class="list-inline-item">{{$actualite->created_at->format('M d, Y')}}</li>
											</ul>

											<p>{{ Str::limit($actualite->contenu, 150, '...') }}</p>
										</div>
										
										<div class="card-footer d-flex">
											<a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 29</a>
											<a href="{{ route('list_actualites.destroy', $actualite) }}" class="d-inline-flex align-items-center ms-auto">Supprimer <i class="ph ph-trash"></i></a>
											<a href="{{ route('actualites.edit', $actualite) }}" class="d-inline-flex align-items-center ms-auto">Modifier <i class="ph-arrow-circle-right ms-2"></i></a>
										</div>
									</div>
								@endforeach
							@endif
							
						</div>

						

					
					</div>
					<!-- /post grid -->


					<!-- Pagination -->
					<div class="d-flex justify-content-center pt-3 mb-3">
						<ul class="pagination pagination-flat">
							{{-- Bouton Précédent --}}
							<li class="page-item {{ $actualites->onFirstPage() ? 'disabled' : '' }}" ><a href="{{ $actualites->previousPageUrl() }}" class="page-link rounded-pill"><i class="ph-arrow-left"></i></a></li>
							
							{{-- Boucle pour les numéros de page --}}
							@foreach ( $actualites->getUrlRange(1, $actualites->lastPage()) as $page => $url )
								<li class="page-item  {{ $page == $actualites->currentPage() ? 'active' : '' }}"><a href="{{ $url }}" class="page-link rounded-pill">{{ $page }}</a></li>
							@endforeach
							{{-- Bouton Suivant --}}
							<li class="page-item {{ !$actualites->hasMorePages() ? 'disabled' : '' }}"><a href="{{ $actualites->nextPageUrl() }}" class="page-link rounded-pill"><i class="ph-arrow-right"></i></a></li>
						</ul>
					</div>
					<!-- /pagination -->

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