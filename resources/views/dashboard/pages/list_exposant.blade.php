@extends('dashboard.layout.app')

@section('title', 'Liste des exposants')

@section('content')
    <!-- Content here -->
  <!-- Cell background -->
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Tableaux des visiteurs</h5>
						</div>

						<div class="card-body">
							The Excel export button saves to an XLSX file and the data can be customised before exporting the file using the customize method of the <code>excelHtml5</code> button type. This example demonstrates how the created file can be customised by giving any cell in the Office column that has a value of 'New York' a blue background.
						</div>

						<table class="table datatable-excel-background">
							<thead>
								<tr>
									<th>Nom & Prénoms </th>
									<th>Email</th>
									<th>Numéro de téléphone</th>
                                    <th>nom_entreprise</th>
									<th>secteur_activite</th>
                                    <th>url_site_web</th>
									<th>Actions</th>
								</tr>
							</thead>
                             @php
								$exposants = $exposants ?? collect();
							@endphp
							<tbody>
                                @if ($exposants->count()>0)
                                    @foreach ($exposants as $exposant)
                                        <tr>
                                            <td>{{ $exposant->nom_prenoms }}</td>
                                            <td>{{ $exposant->email }}</td>
                                            <td>{{ $exposant->telephone }}</td>
                                            <td>{{ $exposant->nom_entreprise }}</td>
                                            <td>{{ $exposant->secteur_activite }}</td>
                                            <td>{{ $exposant->url_site_web }}</td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                        <i class="ph-list"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="#" class="dropdown-item">
                                                            <i class="ph-file-pdf me-2"></i>
                                                            Modifier
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                            <i class="ph-truck me-2"></i>
                                                            Archiver
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                            <form action="{{ route('list_exposants.destroy', $exposant) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            
                                                            <button type="submit" class="btn btn-danger"> <i class="ph-coins me-2"></i>
                                                                Supprimer
                                                            </button>
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
					<!-- /cell background -->
@endsection