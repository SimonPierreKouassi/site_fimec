@extends('dashboard.layout.app')

@section('title', 'Ajout d\'intervenants')

@section('content')
<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Tableaux des visiteurs</h5>
						</div>

						<div class="card-body">
							The Excel export button saves to an XLSX file and the data can be customised before exporting the file using the customize method of the <code>excelHtml5</code> button type. This example demonstrates how the created file can be customised by giving any cell in the Office column that has a value of 'New York' a blue background.
						</div>

						<div class="table-responsive" style="max-height: 500px; overflow-y: auto; overflow-x: auto;">
							<table class="table datatable-excel-background mb-0">
								<thead>
									<tr>
										<th>Nom & Prénoms</th>
										<th>Facebook</th>
										<th>Linkedin</th>
										<th>Twitter</th>
										<th>Instagram</th>
										<th>TikTok</th>
										
										<th>
											Status
										</th>
										<th>Categorie</th>
										<th>Actions</th>
										
									</tr>
								</thead>
								@php
									$intervenants = $intervenants ?? collect();
								@endphp
								<tbody>
									@if ($intervenants->count()>0)
										@foreach ($intervenants as $intervenant)
											<tr>
												<td>{{ $intervenant->nom_intervenant }}</td>
												<td><a href="{{ $intervenant->facebook }}" target="_blank">{{ $intervenant->facebook }}</a></td>
												<td><a href="{{ $intervenant->linkedin }}" target="_blank">{{ $intervenant->linkedin }}</a></td>
												<td><a href="{{ $intervenant->twitter }}" target="_blank">{{ $intervenant->twitter }}</a></td>
												<td><a href="{{ $intervenant->instagram }}" target="_blank">{{ $intervenant->instagram }}</a></td>
												<td><a href="{{ $intervenant->tiktok }}" target="_blank">{{ $intervenant->tiktok }}</a></td>
												@if ($intervenant->publie == 1)
												<td>
													<span class="badge bg-success bg-opacity-10 text-success">Active</span>
												</td>
												@else
												<td>
													<span class="badge bg-danger bg-opacity-10 text-danger">Inactive</span>
												</td>  
												@endif
												<td>{{ $intervenant->categorie }}</td>
												<td class="text-end">
													<div class="dropdown">
														<a href="#" class="text-body" data-bs-toggle="dropdown">
															<i class="ph-list"></i>
														</a>

														<div class="dropdown-menu dropdown-menu-end">
															<a href="{{ route('intervenants.edit', $intervenant) }}" class="dropdown-item">
																<i class="ph-pencil me-2"></i>
																Modifier
															</a>
															<a href="#" class="dropdown-item">
																<form action="{{ route('list_intervenants.destroy', $intervenant) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?');">
																	@csrf
																	@method('DELETE')
																	
																	<button type="submit" class="btn btn-danger"><i class="ph-trash me-2"></i>Supprimer</button>
																</form>
															</a>

															<div class="dropdown-divider"></div>
														</div>
													</div>
												</td>
											</tr>
										@endforeach
									@endif
								</tbody>
							</table>
						</div>
					</div>
			
@endsection