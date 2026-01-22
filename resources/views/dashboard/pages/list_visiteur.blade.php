@extends('dashboard.layout.app')

@section('title', 'Liste des visiteurs')

@section('content')
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
									<th>Catégorie</th>
									<th>Actions</th>
								</tr>
							</thead>
                             @php
								$visiteurs = $visiteurs ?? collect();
							@endphp
							<tbody>
                                @if ($visiteurs->count()>0)
                                    @foreach ($visiteurs as $visiteur)
                                        <tr>
                                            <td>{{ $visiteur->nom_prenoms }}</td>
                                            <td>{{ $visiteur->email }}</td>
                                            <td>{{ $visiteur->telephone }}</td>
                                            <td>{{ $visiteur->categorie_visiteur }}</td>
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
                                                            <form action="{{ route('list_visiteurs.destroy', $visiteur) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?');">
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