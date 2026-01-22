@extends('dashboard.layout.app')

@section('title', 'Ajout de programme')

@section('content')
	        <div class="content-inner">

				<!-- Page header -->
				
				<!-- /page header -->


		

		<div class="flex-fill">
												<a href="{{$programme->lien_flip}}" class="fw-semibold">Programme FIMEC</a>
												<div class="fs-sm text-muted">
													{{$programme->annee}}
												</div>
											</div>
			</div>
@endsection