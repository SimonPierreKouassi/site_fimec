<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Authentification Admin</title>

	<!-- Global stylesheets -->
	<!-- Global stylesheets -->
	<link href="{{ Vite::asset('resources/assets_admin/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css"> 
	<link href="{{ Vite::asset('resources/assets_admin/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ Vite::asset('resources/assets_ltr/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">

	<!-- Core JS files -->
	<script src="{{ Vite::asset('resources/assets_admin/demo/demo_configurator.js') }}"></script> 
	<script src="{{ Vite::asset('resources/assets_admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ Vite::asset('resources/assets_ltr/js/app.js') }}"></script>
	<!-- /theme JS files -->

</head>

	<!-- Main navbar -->
	<div class="navbar navbar-dark navbar-static py-2">
		<div class="container-fluid">
			<div class="navbar-brand">
				<a href="index.html" class="d-inline-flex align-items-center">
					<img src="../../../assets/images/logo_icon.svg" alt="">
					<img src="../../../assets/images/logo_text_light.svg" class="d-none d-sm-inline-block h-16px ms-3" alt="">
				</a>
			</div>

			<div class="d-flex justify-content-end align-items-center ms-auto">
				<ul class="navbar-nav flex-row">
					<li class="nav-item">
						<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
							<div class="d-flex align-items-center mx-md-1">
							<i class="ph-lifebuoy"></i>
							<span class="d-none d-md-inline-block ms-2">Support</span>
						</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
							<div class="d-flex align-items-center mx-md-1">
							<i class="ph-user-circle-plus"></i>
							<span class="d-none d-md-inline-block ms-2">Register</span>
						</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
							<div class="d-flex align-items-center mx-md-1">
							<i class="ph-user-circle"></i>
							<span class="d-none d-md-inline-block ms-2">Login</span>
						</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Login form -->
					<form class="login-form" action="{{ route('registration.register') }}" method="POST">
                    @csrf
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
										<img src="{{ Vite::asset('resources/img/logo/fimec.png') }}" class="h-48px" alt="">
									</div>
									<h5 class="mb-0">Connexion au dashboard</h5>
									<span class="d-block text-muted">Entrez vos informations pour l'inscription</span>
								</div>

								@if($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif

								@if(session('success'))
									<div class="alert alert-success">
										{{ session('success') }}
									</div>
								@endif

								<div class="mb-3">
									<label class="form-label">Username</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="text" name="name" class="form-control" placeholder="pierre">
										<div class="form-control-feedback-icon">
											<i class="ph-user-circle text-muted"></i>
										</div>
									</div>
								</div>
                                
                                <div class="mb-3">
									<label class="form-label">Email</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="text" name="email" class="form-control" placeholder="john@doe.com">
										<div class="form-control-feedback-icon">
											<i class="ph-user-circle text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">Password</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="password" name="password" class="form-control" placeholder="•••••••••••">
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">Confirm Password</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="password" name="password_confirmation" class="form-control" placeholder="•••••••••••">
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<button type="submit" class="btn btn-primary w-100">Inscription</button>
								</div>

							</div>
						</div>
					</form>
					<!-- /login form -->

				</div>
				<!-- /content area -->

<!-- Footer -->
				<div class="navbar navbar-sm navbar-footer border-top">
					<div class="container-fluid">
						<span>&copy; 2026 <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Agefop</a> Tous droits réservés</span>

						
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
</body>
</html>
