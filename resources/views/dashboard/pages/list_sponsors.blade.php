@extends('dashboard.layout.app')

@section('title', 'Liste des sponsors')

@section('content')
     <!-- Cell background -->
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Tableaux des sponsors</h5>
						</div>

						<table class="table datatable-excel-background">
							<thead>
								<tr>
									<th>Nom & Prénoms </th>
									<th>Email</th>
									<th>Numéro de téléphone</th>
                                    <th>Poste</th>
									<th>Denomination Sociale de l'entreprise</th>
									<th>pays</th>
								</tr>
							</thead>
                             @php
								$sponsors = $sponsors ?? collect();
							@endphp
							<tbody>
                                @if ($sponsors->count()>0)
                                    @foreach ($sponsors as $sponsor)
                                        <tr>
                                            <td>{{ $sponsor->nom_prenoms }}</td>
                                            <td>{{ $sponsor->email }}</td>
                                            <td>{{ $sponsor->telephone }}</td>
                                            <td>{{ $sponsor->poste }}</td>
                                            <td>{{ $sponsor->denomination_sociale }}</td>
                                            <td>{{ $sponsor->pays }}</td>
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
                                                            <form action="{{ route('list_sponsors.destroy', $sponsor) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?');">
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