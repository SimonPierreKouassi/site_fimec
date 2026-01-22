@extends('dashboard.layout.app')

@section('title', 'Ajout d\'une actualité')

@section('content')
<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header page-header-light shadow">
					<div class="page-header-content d-lg-flex">
						<div class="d-flex">
							<h4 class="page-title mb-0">
								Form Layouts - <span class="fw-normal">Horizontal</span>
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
								<a href="#" class="breadcrumb-item">Form layouts</a>
								<span class="breadcrumb-item active">Horizontal</span>
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

					<!-- Basic layout -->
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Formulaire d'ajout d'actualité</h5>
						</div>

						<div class="card-body">
						</div>

						<div class="card-body border-top">
							<form action="{{ route('ajout_actualites.store') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="row mb-3">
									<label class="col-lg-3 col-form-label">Titre :</label>
									<div class="col-lg-9">
										<input type="text" class="form-control" placeholder="Cérémonie de lancement du FIMEC 2026" name="titre">
									</div>
								</div>
								<div class="row mb-3">
									<label class="col-lg-3 col-form-label">Catégories</label>
									<div class="col-lg-9">
										<select class="form-control form-control-select2" name="categorie">
											<optgroup label="">
												<option value="Cérémonie">Cérémonie</option>
												<option value="Panel">Panel</option>
												<option value="Masterclass">Masterclass</option>
												<option value="Rencontrer B to B">Rencontrer B to B</option>
											</optgroup>
										</select>
									</div>
								</div>

								<div class="row mb-3">
									<label class="col-lg-3 col-form-label">Publié :</label>
									<div class="col-lg-9">
										<div class="form-check-horizontal">
											<label class="form-check form-check-inline">
												<input name="is_published" type="radio" class="form-check-input" value="1" checked>
												<span class="form-check-label">Oui</span>
											</label>
											<label class="form-check form-check-inline">
												<input name="is_published" type="radio" class="form-check-input" value="0">
												<span class="form-check-label">Non</span>
											</label>
										</div>
									</div>
								</div>

								<div class="row mb-3">
									<label class="col-lg-3 col-form-label">Image de couverture:</label>
									<div class="col-lg-9">
										<input type="file" name="image" class="form-control">
										<div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
									</div>
								</div>

								<div class="row mb-3">
									<label class="col-lg-3 col-form-label">Tags:</label>
									<div class="col-lg-9">
										<select multiple="multiple" data-placeholder="Enter tags" name="tags" class="form-control form-control-select2-icons">
											<option value="Stands" data-icon="slack-logo">Stands</option>
											<option value="Prestations" data-icon="instagram-logo">Prestations</option>
											<option value="Plateau TV" data-icon="telegram-logo">Plateau TV</option>
											<option value="Networking" data-icon="whatsapp-logo">Networking</option>
										</select>
									</div>
								</div>

								<div class="row mb-3">
									<label class="col-lg-3 col-form-label">Contenu:</label>
									<div class="col-lg-9">
									<textarea class="form-control" id="ckeditor_classic_prefilled" name="contenu">
										<h1></h1>
										<figure class="image image-style-side">
											<img src="https://c.cksource.com/a/1/img/sample.jpg" alt="Saturn V carrying Apollo 11.">
											<figcaption></figcaption>
										</figure>

										<p><strong></strong> </a> <a href="#"></a></p>

										

										<h5> </h5>
										<p><strong></strong>   <a href="#"><a href="#"></a> </p>
										<ol>
											<li><strong></strong> </li>
											<li><strong></li>
											<li><strong></strong></li>
										</ol>
										

										

										
									</textarea>									</div>
								</div>
								<!-- Basic editor <div class="card-body">
									<p class="mb-3">Classic editor is what most users traditionally learnt to associate with a rich text editor — a toolbar with an editing area placed in a specific position on the page, usually as a part of a form that you use to submit some content to the server. During its initialization the editor hides the used editable element on the page and renders “instead” of it. This is why it is usually used to replace <code>&lt;textarea></code> elements.</p>

									<form action="#">
										<div class="mb-3">
											<textarea class="form-control" id="ckeditor_classic_prefilled">
												<h1>Apollo 11</h1>
												<figure class="image image-style-side">
													<img src="https://c.cksource.com/a/1/img/sample.jpg" alt="Saturn V carrying Apollo 11.">
													<figcaption>Leaving your comfort zone might lead you to such beautiful sceneries like this one.</figcaption>
												</figure>

												<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>

												<p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>

												<h5>Technical details</h5>
												<p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
												<ol>
													<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
													<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
													<li><strong>Lunar Module</strong> for landing on the Moon.</li>
												</ol>
												<p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>

												<h5>Mission crew</h5>

												<table style="width: 100%">
													<thead>
														<tr>
															<th>Position</th>
															<th>Astronaut</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Commander</td>
															<td>Neil A. Armstrong</td>
														</tr>
														<tr>
															<td>Command Module Pilot</td>
															<td>Michael Collins</td>
														</tr>
														<tr>
															<td>Lunar Module Pilot</td>
															<td>Edwin "Buzz" E. Aldrin, Jr.</td>
														</tr>
													</tbody>
												</table>

												Source: <a href="https://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
											</textarea>
										</div>

										<div class="text-end">
											<button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
										</div>
									</form>
								</div>-->
								<div class="text-end">
									<button type="submit" class="btn btn-primary">Ajouter l'actualité <i class="ph-paper-plane-tilt ms-2"></i></button>
								</div>
							</form>
						</div>
					</div>
					
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