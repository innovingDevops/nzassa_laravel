@extends('layouts/client_master')
@section('content')
  <!-- section main content -->
	<section class="main-content mt-3">
		<div class="container-xl">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('actualite') }}">Article</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#">Inspiration</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">{{ $article->titre_article }}</li>
                </ol>
            </nav>

			<div class="row gy-4">

				<div class="col-lg-8">
					<!-- post single -->
                    <div class="post post-single">
						<!-- post header -->
						<div class="post-header">
							<h1 class="title mt-0 mb-3">{{ $article->titre_article }}</h1>
							<ul class="meta list-inline mb-0">
								{{-- <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li> --}}
								<li class="list-inline-item"><a href="#">{{ getcateoriebyid($article->id_categorie)->nom_categorie }}</a></li>
								<li class="list-inline-item">
									@php
									setlocale(LC_TIME, 'fr_FR.utf8');
									 $timestamp = strtotime($article->created_at ); 
									 $date_str = date('j F Y', $timestamp);  
									@endphp
									 {{ $date_str }}	
								</li>
							</ul>
						</div>
						<!-- featured image -->
						<div class="featured-image">
							<img src="{{ asset('storage/'.$article->image_article) }}" alt="post-title" />
						</div>
						<!-- post content -->
						<div class="post-content clearfix">{{ strip_tags($article->detail_article) }}</div>
						<!-- post bottom section -->
                    </div>

					<div class="spacer" data-height="50"></div>
                </div>

				<div class="col-lg-4">

					<!-- sidebar -->
					<div class="sidebar">
						
						<!-- widget categories -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Catégories</h3>
								<img src="{{ asset('client/images/wave.svg') }}" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<ul class="list">
									@foreach ( $categories as $categorie )
										<li><a href="{{ route('articlebycat', ['id' => $categorie->id]) }}">{{ $categorie->nom_categorie }}</a><span>{{ getArticleByCat($categorie->id)->count() }}</span></li>
									@endforeach
								</ul>
							</div>
						</div>
						
					</div>

				</div>

			</div>

		</div>
	</section>
	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">
	
			<div class="row gy-4">
	
				<div class="col-lg-12">
					@if($article->id)
						<!-- section header -->
						<div class="section-header">
							<h3 class="section-title">Commentaires </h3>
							<img src="{{ asset('client/images/wave.svg') }}" class="wave" alt="wave" />
						</div>
						<!-- post comments -->
						<div class="comments bordered padding-30 rounded">
		
							<ul class="comments">
								<?php 
								$cpt = 0;
								?>
								@foreach ($commentaires as $commentaire )
									<!-- comment item -->
									<?php if($cpt % 2==0){ ?>
										<li class="comment rounded">
											<div class="thumb">
												{{-- <img src="images/other/comment-2.png" alt="John Doe" /> --}}
												<i style="font-size: 60px" class="far fa-user-circle"></i>
											</div>
											<div class="details">
												<h4 class="name"><a href="#">{{ $commentaire->nom }}</a></h4>
												<span class="date">{{ $commentaire->created_at }}</span>
												<p>{{ $commentaire->commentaire }}</p>
												<a href="#" class="btn btn-default btn-sm">Reply</a>
											</div>
										</li>
										<?php $cpt++; ?>
									<?php }else  {?>
											<!-- comment item -->
											<li class="comment child rounded">
												<div class="thumb">
													<i style="font-size: 60px" class="far fa-user-circle"></i>
												</div>
												<div class="details">
													<h4 class="name"><a href="#">{{ $commentaire->nom }}</a></h4>
													<span class="date">{{ $commentaire->created_at }}</span>
													<p>{{ $commentaire->commentaire }}</p>
													<a href="#" class="btn btn-default btn-sm">Reply</a>
												</div>
											</li>
									<?php $cpt++; ?>
									<?php } ?>
								@endforeach
							</ul>
						</div>
					@endif
					<div class="spacer" data-height="50"></div>
	
					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Laissez un commentaire</h3>
						<img src="{{ asset('client/images/wave.svg') }}" class="wave" alt="wave" />
					</div>
					<!-- comment form -->
					<div class="comment-form rounded bordered padding-30">
	
						<form id="comment-form" class="comment-form" action="{{ route('save_commentaire') }}" method="post">
						@csrf
							<div class="messages"></div>
	
							<div class="row">

								<div class="column col-md-6">
									<!-- Email input -->
									<div class="form-group">
										<input hidden type="number" class="form-control" id="InputEmail" name="id_article"
											placeholder="Adresse Email" value="{{ $article->id }}" required="required">
									</div>
								</div>

								<div class="column col-md-12">
									<!-- Comment textarea -->
									<div class="form-group">
										<textarea name="commentaire" id="InputComment" class="form-control" rows="4"
											placeholder="Faites votre commentaire ici..." required="required"></textarea>
									</div>
								</div>
	
								<div class="column col-md-6">
									<!-- Email input -->
									<div class="form-group">
										<input type="email" class="form-control" id="InputEmail" name="email"
											placeholder="Adresse Email" required="required">
									</div>
								</div>
	
								<div class="column col-md-6">
									<!-- Email input -->
									<div class="form-group">
										<input type="text" class="form-control" id="InputName" name="nom"
											placeholder="Votre Nom" required="required">
									</div>
								</div>
							</div>
	
							<button type="submit" name="submit" id="submit" value="Submit"
								class="btn btn-default">Envoyer</button><!-- Submit Button -->
	
						</form>
					</div>
				</div>
	
			</div>
		</div>
	</section>
@include('../../layouts/client/produit_nzassa')
@endsection
