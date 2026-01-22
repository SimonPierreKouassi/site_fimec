                <div class="sidebar-section">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header pt-0">
							<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
							<i class="ph-dots-three sidebar-resize-show"></i>
						</li>
						<li class="nav-item">
							<a href="index.html" class="nav-link">
								<i class="ph-house"></i>
								<span>
									Tableau de bord
									<span class="d-block fw-normal opacity-50"></span>
								</span>
							</a>
						</li>
						<!-- Components -->
						<li class="nav-item-header">
							<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Components</div>
							<i class="ph-dots-three sidebar-resize-show"></i>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">
								<i class="ph-squares-four"></i>
								<span>Programme</span>
							</a>
							<ul class="nav-group-sub collapse">
								<li class="nav-item"><a href="{{ route('ajout_programmes.index') }}" class="nav-link">Ajouter le programmme</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">
								<i class="ph-drop"></i>
								<span>Actualités</span>
							</a>
							<ul class="nav-group-sub collapse">
								<li class="nav-item"><a href="{{ route('list_actualites.show') }}" class="nav-link">Liste actualités </a></li>
								<li class="nav-item"><a href="{{ route('ajout_actualites.create') }}" class="nav-link">Ajouter actualités</a></li>
								<li class="nav-item"><a href="{{ route('commentaires.index') }}" class="nav-link">Liste des commentaires</a></li>
								

							</ul>
						</li>
						<!-- /components -->
						<!-- Médiathèques -->
						<li class="nav-item-header">
							<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Médiathèques</div>
							<i class="ph-dots-three sidebar-resize-show"></i>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">
								<i class="ph-circles-three"></i> 
								<span>Documentation</span>
							</a>
							<ul class="nav-group-sub collapse">
								<li class="nav-item"><a href="{{ route('ajout_documentations.index') }}" class="nav-link">Ajout de la documentation</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">
								<i class="ph-circles-three"></i>
								<span>Galerie</span>
							</a>
							<ul class="nav-group-sub collapse">
								<li class="nav-item"><a href="{{ route('list_medias.index') }}" class="nav-link">Liste photos et vidéos</a></li>
								<li class="nav-item"><a href="{{ route('ajout_medias.index') }}" class="nav-link">Ajouter un média</a></li>
							</ul>
						</li>
						<!-- /Médiathèques -->

						<!-- Page kits -->
						<li class="nav-item-header">
							<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Intervenants & Modérateurs</div>
							<i class="ph-dots-three sidebar-resize-show"></i>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">
								<i class="ph-user-focus"></i>
								<span>Intervenants & Modérateurs</span>
							</a>
							<ul class="nav-group-sub collapse">
								<li class="nav-item"><a href="{{ route('list_intervenants.show') }}" class="nav-link">Liste des intervenants</a></li>
								<li class="nav-item"><a href="{{ route('ajout_intervenants.index') }}" class="nav-link">Ajout des intervenants</a></li>
							</ul>
						</li>
						<!-- Les contacts -->
						<li class="nav-item-header">
							<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Contacts</div>
							<i class="ph-dots-three sidebar-resize-show"></i>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">
								<i class="ph-user-focus"></i>
								<span>Liste des contacts</span>
							</a>
							<ul class="nav-group-sub collapse">
								<li class="nav-item"><a href="{{ route('list_intervenants.show') }}" class="nav-link">Liste des visiteurs</a></li>
								<li class="nav-item"><a href="{{ route('ajout_intervenants.index') }}" class="nav-link">Liste des exposants</a></li>
								<li class="nav-item"><a href="{{ route('list_intervenants.show') }}" class="nav-link">Liste de la presse</a></li>
								<li class="nav-item"><a href="{{ route('list_intervenants.show') }}" class="nav-link">Liste des sponsors</a></li>
							</ul>
						</li>
						
						
						<!-- /page kits -->

					</ul>
				</div>