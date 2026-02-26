@extends('layouts.app')

@section('title', 'Detail de l\'actualité')

@section('content')
  <div class="site-breadcrumb" style="background: url({{ Vite::asset('resources/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Actualité</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li class="active">Actualité Détail</li>
                </ul>
            </div>
        </div>


        <div class="blog-single py-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            <div class="blog-single-content">
                                <div class="blog-thumb-img">
                                    <img src="{{ asset('storage/'.$actualite->image) }}" alt="thumb">
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="blog-meta-left">
                                            <ul>
                                                <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                                <li><i class="far fa-comments"></i>{{ $actualite->commentaires_count ?? 0 }} Commentaires</li>
                                                <li><i class="far fa-thumbs-up"></i></li>
                                            </ul>
                                        </div>
                                        <div class="blog-meta-right">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                                            class="share-link" 
                                            target="_blank" 
                                            rel="noopener noreferrer">
                                                <i class="far fa-share-alt"></i> Partager l'article sur facebook
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h3 class="blog-details-title mb-20">{{ $actualite->titre }}
                                        </h3>
                                        <p class="mb-10">
                                            {!! clean($actualite->contenu) !!}
                                        </p>
                              
                                        <hr>
                                        <div class="blog-details-tags pb-20">
                                            <h5>Tags : </h5>
                                            <ul>
                                                <li><a href="#">Events</a></li>
                                                <li><a href="#">Business</a></li>
                                                <li><a href="#">Conference</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                 
                                </div>
                                <div class="blog-comments">
                                    <h3>Commentaires ({{ $actualite->commentaires->count() }})</h3>
                                    <div class="blog-comments-wrapper">
                                        @foreach ($actualite->commentaires->where('is_approved', true) as $commentaire)
                                            
                                        
                                        <div class="blog-comments-single">
                                            <img src="assets/img/blog/com-1.jpg" alt="thumb">
                                            <div class="blog-comments-content">
                                                <h5>{{ $commentaire->nom }}</h5>
                                                <span><i class="far fa-clock"></i> {{ $commentaire->created_at->format('M d, Y')  }}</span>
                                                <p>{{ $commentaire->message }}</p>
                                                <a href="#"><i class="far fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                    
                                    <div class="blog-comments-form">
                                        <h3>Laissez un commentaire</h3>
                                        
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                    <div>{{ $error }}</div>
                                                @endforeach
                                            </div>
                                        @endif

                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        
                                        <form action="{{ route('commentaires.store', ['actualite' => $actualite->id]) }}" method="POST">
                                            @csrf
                                            <!-- Champ caché pour l'ID de l'actualité -->
                                            <input type="hidden" name="actualite_id" value="{{ $actualite->id }}">
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i
                                                                class="far fa-user-tie"></i></span>
                                                        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom"
                                                            placeholder="Votre nom*" value="{{ old('nom') }}" required>
                                                        @error('nom')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i
                                                                class="far fa-envelope"></i></span>
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                                            placeholder="Votre Email*" value="{{ old('email') }}" required>
                                                        @error('email')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="input-group textarea">
                                                        <span class="input-group-text"><i class="far fa-pen"></i></span>
                                                        <textarea name="message" cols="30" rows="5" class="form-control @error('message') is-invalid @enderror"
                                                            placeholder="Votre Commentaire*" required>{{ old('message') }}</textarea>
                                                        @error('message')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div style="margin-bottom: 10px; padding: 10px; background: #f8f9fa; border: 1px solid #ddd;">
                                                        <label for="captcha">Protection anti-spam : <strong>Combien font {{ $n1 ?? 0 }} + {{ $n2 ?? 0 }} ?</strong></label>
                                                        <input type="number" name="captcha_answer" id="captcha" class="form-control @error('captcha_answer') is-invalid @enderror" required style="width: 100%; padding: 5px;">
                                                        @error('captcha_answer')
                                                            <span class="invalid-feedback d-block">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="theme-btn">Envoyez votre Commentaire <i
                                                            class="far fa-paper-plane"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar">

                            <div class="widget search">
                                <h5 class="widget-title">Recherche</h5>
                                <form class="search-form">
                                    <input type="text" class="form-control" placeholder="Rechercher ici...">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>

                            <div class="widget category">
                                <h5 class="widget-title">Categories</h5>
                                <div class="category-list">
                                    @if (!empty($categories))
                                        @foreach ($categories as $categorie => $count)
                                            <a href="#"><i class="far fa-arrow-right"></i>{{ $categorie }}<span>({{ $count }})</span></a>
                                        @endforeach
                                    @else
                                        <p class="text-muted">Aucune catégorie disponible</p>
                                    @endif
                                    
                                </div>
                            </div>

                            <div class="widget recent-post">
                                <h5 class="widget-title">Actualités récentes</h5>
                                @if ($actualitesRecentes->count() > 0)
                                    @foreach ($actualitesRecentes as $post)
                                        <div class="recent-post-single">
                                            <div class="recent-post-img">
                                                @if ($post->image)
                                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->titre }}">
                                                @else
                                                    <img src="assets/img/blog/bs-1.jpg" alt="thumb">
                                                @endif
                                            </div>
                                            <div class="recent-post-bio">
                                                <h6><a href="/actualite_detail/{{ $post->id }}">{{ Str::limit($post->titre, 40) }}</a></h6>
                                                <span><i class="far fa-clock"></i>{{ $post->created_at->format('M d, Y') }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-muted">Aucune actualité disponible</p>
                                @endif
                            </div>

                            <div class="widget social-share">
                                <h5 class="widget-title">Suivez nous</h5>
                                <div class="social-share-link">
                                    <a href="https://www.facebook.com/AGEFOP"><i class="fab fa-facebook"></i></a>
                                    <a href="https://x.com/AgefopInfo"><i class="fab fa-x-twitter"></i></a>
                                    <a href="https://www.instagram.com/agefopci/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/company/agefop-agence-nationale-de-la-formation-professionnelle/"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://www.tiktok.com/@agefopci"><i class="fa-brands fa-tiktok"></i></a>
                                </div>
                            </div>

                           
                        </aside>
                    </div>
                </div>
            </div>
        </div>

@endsection