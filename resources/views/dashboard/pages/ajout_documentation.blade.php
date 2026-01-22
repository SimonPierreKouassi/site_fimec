@extends('dashboard.layout.app')

@section('title', 'Ajout de documentation')

@section('content')
<div class="content-inner">
			<div class="page-header page-header-light shadow">
					<div class="page-header-content d-lg-flex">
						<div class="d-flex">
							<h4 class="page-title mb-0">
								ECommerce - <span class="fw-normal">Customers</span>
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
								<a href="#" class="breadcrumb-item">ECommerce</a>
								<span class="breadcrumb-item active">Customers</span>
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

					<!-- Customers -->
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Ajout de la documentation</h5>
						</div>

						<div class="card-body">
							<div class="chart-container">
								 <div class="card-body">
		                	<div class="card-body border-top">

							<form method="POST" action="{{ Route('ajout_documentations.store') }}"  enctype="multipart/form-data">
								@csrf
								<div class="mb-3">
									<label class="form-label">Nom du document:</label>
									<input type="text" class="form-control" placeholder="Plaquette FIMEC" name="nom_document">
								</div>

								<div class="mb-3">
									<label class="form-label">Année de parution</label>
									<input type="text" class="form-control" placeholder="2025" name="annee_parution">
								</div>

								<!--
								<div class="mb-3">
									<label class="form-label">Publié:</label>
									<div>
										<label class="form-check form-check-inline">
											<input type="radio" class="form-check-input" name="gender" checked>
											<span class="form-check-label">Oui</span>
										</label>

										<label class="form-check form-check-inline">
											<input type="radio" class="form-check-input" name="gender">
											<span class="form-check-label">Non</span>
										</label>
									</div>
								</div>
								-->
								<div class="mb-3">
									<label class="form-label">Image de couverture:</label>
									<input type="file" class="form-control" name="image_couverture">
									<div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
								</div>
								<div class="mb-3">
									<label class="form-label">Ajouter le fichier</label>
									<input type="file" class="form-control" name="fichier">
									<div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
								</div>
								<div class="text-end">
									<button type="submit" class="btn btn-primary">Ajouter <i class="ph-paper-plane-tilt ms-2"></i></button>
								</div>
							</form>

						</div>
					    </div>
							</div>
						</div>

						<table class="table table-striped text-nowrap table-customers">
							<thead>
								<tr>
									<th>Nom du document</th>
									<th>annee de parution</th>
									<th>
										Date d'ajout
									</th>
									<th>État</th>
									<th>Actions</th>
									<th></th>
								</tr>
							</thead>
							@php
								$documentations = $documentations ?? collect();
							@endphp
							<tbody>
							@if ($documentations->count() > 0)
								@foreach ($documentations as $documentation)
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<a href="user_pages_profile_tabbed.html" class="d-block me-3">
												<img src="{{ asset('storage/'.$documentation->image_couverture) }}" width="40" height="40" class="rounded-circle" alt="">
											</a>

											<div class="flex-fill">
												<a href="user_pages_profile_tabbed.html" class="fw-semibold">{{$documentation->nom_document}}</a>
												
											</div>
										</div>
									</td>
									<td>{{$documentation->annee_parution}}</td>
									<td>{{$documentation->created_at}}</td>
									<td>
										<div>
											<i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
											Non publié
										</div>

										<div>
											<i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
											Publié
										</div>
									</td>
									<td class="text-end">
										<div class="dropdown">
											<a href="#" class="text-body" data-bs-toggle="dropdown">
												<i class="ph-list"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-file-pdf me-2"></i>
													Archiver
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-truck me-2"></i>
													Modifier
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-coins me-2"></i>
													Supprimer
												</a>
											</div>
										</div>
									</td>
									<td class="pl-0"></td>
								</tr>
								@endforeach
							@else
								<tr>
									<td colspan="6" class="text-center">Aucun doucument disponible.</td>
								</tr>
							@endif
							</tbody>
						</table>
					</div>
					<!-- /customers -->

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
@endsection