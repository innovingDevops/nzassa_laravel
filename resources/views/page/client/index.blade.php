@extends('layouts/client_master')
@section('content')

<style>
.prod_nzassa {
    font-size: 35px;
}

	.actualite {
		font-size: 20px;
	}

	/* Pour les écrans dont la largeur est supérieure ou égale à 768 pixels */
	@media screen and (min-width: 768px) {
		.monElement {
			width: 500px;
			left: 25%;
			top: 50%;
			/* transform: translate(-50%, -50%); */
		}
	}

	/* Pour les écrans dont la largeur est supérieure ou égale à 1200 pixels */
	@media screen and (min-width: 1200px) {
		.monElement {
			width: 600px;
			left: 25%;
			top: 50%;
			/* transform: translate(-50%, -50%); */
		}
	}

	.img_team {
		width: 200px;
		border-radius: 30px;
        padding: 25px;
	}
    .img_galerie{
    height: 250px;
    }
</style>
<!-- hero section -->
<section id='hero' >

    <div class='container-xl'>

        <div class='row gy-4'>

            <div class='col-lg-8'>

                <div class='post-carousel-lg'>
                    <!-- post -->
                    <div class='post featured-post-xl'>
                        <div class='details clearfix'>
                            <a href='#' class='category-badge lg'>N'zassa</a>
                            <h4 class="post-title"><a href="blog-single.html">N'Zassa Shop</a></h4>
                            <ul class='meta list-inline mb-0'>
                                <li class='list-inline-item'><a href='#'>Katen Doe</a></li>
                                <li class='list-inline-item'>29 March 2021</li>
                            </ul>
                        </div>
                        <a href='#'>
                            <div class='thumb rounded'>
                                <div class='inner data-bg-image' data-bg-image="{{asset('client/images/bg1.jpg')}}">
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- post -->
                    <div class='post featured-post-xl'>
                        <div class='details clearfix'>
                            <a href='category.html' class='category-badge lg'>N'zassa</a>
                            <h4 class="post-title"><a href="blog-single.html">N'Zassa Gescom</a></h4>
                            <ul class='meta list-inline mb-0'>
                                <li class='list-inline-item'><a href='#'>Katen Doe</a></li>
                                <li class='list-inline-item'>29 March 2021</li>
                            </ul>
                        </div>
                        <a href='blog-single.html'>
                            <div class='thumb rounded'>
                                <div class='inner data-bg-image' data-bg-image="{{asset('client/images/bg2.jpg')}}">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Notre team  -->
            <div class='col-lg-4'>

                <!-- post tabs -->
                <div class='post-tabs rounded bordered'>
                    <!-- tab navs -->
                    <ul class='nav nav-tabs nav-pills nav-fill' id='postsTab' role='tablist'>
                        <li class='nav-item' role='presentation'>
                            <button class='nav-link active actualite' role='tab' type='button'>Notre actualité</button>
                        </li>
                    </ul>
                    <!-- tab contents -->
                    <div class='tab-content' id='postsTabContent'>
                        <!-- loader -->
                        <!-- <div class = 'lds-dual-ring'></div> -->
                        <!-- popular posts -->
                        <div aria-labelledby='popular-tab' class=' fade show active' id='popular' role='tabpanel'>
                            <!-- post -->
                          
                            @foreach ($articles as $article)
                            <div class='post post-list-sm circle'>
                                <div class='thumb circle'>
                                    <a href='blog-single.html'>
                                        <div class='inner rounded'>
                                            <img src="{{ asset('storage/'.$article->image_article) }}" alt='post-title' />
                                        </div>
                                    </a>
                                </div>
                                <div class='details clearfix'>
                                    <h6 class='post-title my-0'><a style="font-size:12px" href='blog-single.html'>{{ substr(strip_tags($article->courte_description),0,60) }}...</a></h6>
                                    <ul class='meta list-inline mt-1 mb-0'>
                                        <li class='list-inline-item'>
                                            <i class="far fa-calendar-alt"></i>
                                            @php
                                            setlocale(LC_TIME, 'fr_FR.utf8');
                                             $timestamp = strtotime($article->created_at ); 
                                             $date_str = date('j F Y', $timestamp);  
                                            @endphp
                                             {{ $date_str }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- les produits N'Zassa -->

@include('../../layouts/client/produit_nzassa')
@php
{{ $cpt=0;  }}
@endphp

@foreach ($formules as $formule )

<div class="m-5" data-height="50" id="{{ $formule->nom_formule }}"></div>
<!-- Tous les produits n'zassa présentés -->

<section class='main-content' style="background-image:url('{{ asset('admin/assets/img/corner-1.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class='container-xl'>
        <div class='row gy-4'>
            <div class='col-lg-12'>
                <!-- section header -->
                <div class='section-header'>
                    <h3 class='title text-center'>{{ $formule->nom_formule }}</h3>
                </div>
                <div class="padding-30 rounded bordered">
                    <div class="row gy-5 ">
                        @if($cpt%2==0) 
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post">
                                <div class="thumb rounded">
                                    {{-- <a href="category.html" class="category-badge position-absolute">- 50%</a> --}}
                                    {{-- <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span> --}}
                                    
                                        <div class="inner " >
                                            <img src="{{ asset('storage/'.$formule->image_formule) }}" alt="post-title" />
                                        </div>
                                </div>
                                {{-- <ul class="meta list-inline mt-4 mb-0">
                                    <li class="list-inline-item"><a href="#"><img src="{{asset('client/images/other/author-sm.png')}}" class="author" alt="author" />Katen Doe</a></li>
                                    <li class="list-inline-item">29 March 2021</li>
                                </ul> --}}
                                <h5 class="post-title mb-3 mt-3">{{ $formule->titre_formule }}</h5>
                                <p class="excerpt mb-0">{{ $formule->description_formule }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- post -->
                            @foreach (getFonctionnalite($formule->id) as $item)
                            <div class="post post-list-sm square">
                                <div class="thumb rounded">
                                    <div class="inner">
                                        <img src="{{ asset('storage/'.$formule->image_formule) }}" alt="post-title" />
                                    </div>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0">
                                        <a href="blog-single.html">{{ $item->libelle_fonctionnalite }}</a>
                                    </h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">{{ $item->description_fonctionnalite }}</li>
                                    </ul>
                                </div>
                            </div>   
                            @endforeach
                        </div>
                        @php
                            {{ $cpt++; }}
                        @endphp
                        @else 
                        <div class="col-sm-6">
                            <!-- post -->
                            @foreach (getFonctionnalite($formule->id) as $item)
                            <div class="post post-list-sm square">
                                <div class="thumb rounded">
                                    
                                        <div class="inner">
                                            <img src="{{ asset('storage/'.$formule->image_formule) }}" alt="post-title" />
                                        </div>
                                  
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0">
                                        <a>{{ $item->libelle_fonctionnalite }}</a>
                                    </h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">{{ $item->description_fonctionnalite }}</li>
                                    </ul>
                                </div>
                            </div>   
                            @php
                                {{ $cpt++; }}
                            @endphp
                            @endforeach
                        </div>
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post">
                                <div class="thumb rounded">
                                    <a href="category.html" class="category-badge position-absolute">- 50%</a>
                                    {{-- <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span> --}}
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{ asset('storage/'.$formule->image_formule) }}" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                {{-- <ul class="meta list-inline mt-4 mb-0">
                                    <li class="list-inline-item"><a href="#"><img src="{{asset('client/images/other/author-sm.png')}}" class="author" alt="author" />Katen Doe</a></li>
                                    <li class="list-inline-item">29 March 2021</li>
                                </ul> --}}
                                <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">{{ $formule->titre_formule }}
                                    </a></h5>
                                <p class="excerpt mb-0">{{ $formule->description_formule }}</p>
                            </div>
                        </div>
                        @php
                            {{ $cpt++; }}
                        @endphp
                        @endif 
                    </div>
                </div>
            </div>
        </div>
</section>

@endforeach

    
<!-- Notre Galerie -->
<div class="" data-height="50" id="galerie"></div>
<h3 class="section-title text-center prod_nzassa m-5 "> La galerie Innoving</h3>
<section class="hero-carousel m-5">
    <div class="row post-carousel-featured post-carousel ">
        @foreach ($galeries as $galerie )
        <div class="post">
            <div class=" rounded">
                <div class="inner data-bg-image" data-bg-image="{{asset('storage/.$galerie->image_galerie')}}">
                    <img src="{{ asset('storage/'.$galerie->image_galerie) }}" alt="" style="width:260px; height:250px; border-radius: 10px;">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Les témoignages  -->
<h3 class="section-title text-center prod_nzassa m-5 "> Les Témoignages </h3>
<section class="main-content">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner monElement">
                        @foreach ($temoignages as $key => $temoignage )
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" >
                                {{-- <div  class="card mb-3 shadow-sm">
                                    <div class="row g-0 m-2 align-items-center">
                                        <div class="thumb col-4">
                                            <img class="img_team" src="{{asset('storage/'.$temoignage->image_temoignage)}}" alt="{{ $temoignage->nom_temoignage}}" />
                                        </div>
                                        <div class="details col-8">
                                            <h4 class="name mb-0"><a href="#">{{ $temoignage->nom_temoignage}}</a></h4>
                                            <small class="text-muted date">{{ $temoignage->profession_temoignage }}</small>
                                            <p class="mt-2 mb-0">{{ $temoignage->detail_temoignage }}</p>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                                    <div class="card-img-top"><img class="img-fluid" src="{{asset('storage/'.$temoignage->image_temoignage)}}" alt="Card image" /></div>
                                    <div class="card-img-overlay d-flex align-items-end">
                                      <div>
                                        <h4  class="card-title text-white">{{ $temoignage->nom_temoignage}}</h4>
                                        <h5 class="card-title text-white">{{ $temoignage->profession_temoignage }}</h5>
                                        <p class="card-text">{{ $temoignage->detail_temoignage }}</p>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            
                        @endforeach
                    </div>
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Nos Partenaires   -->
<h3 class="section-title text-center prod_nzassa m-2 "> Nos Partenaires</h3>
<section class="hero-carousel m-5">
    <div class="row post-carousel-featured post-carousel">
        @foreach ($partenaires as $partenaire)
            <div class="post featured-post-md">
                <div class=" rounded">
                    <img src="{{ asset('storage/'.$partenaire->image_partenaire) }}" alt="">
                </div>
            </div>
        @endforeach
    {{-- 
        <div class="post featured-post-md">

            <a href="blog-single.html">
                <div class=" rounded">
                    <img src="{{asset('client/images/partenaire/2.jpeg')}}" alt="">
                </div>
            </a>
        </div>

        <div class="post featured-post-md">
            <!-- <div class="details clearfix">
						<a href="category.html" class="category-badge">Inspiration</a>
						<h4 class="post-title"><a href="blog-single.html">9 Most Awesome Blue Lake With Snow Mountain</a></h4>
						<ul class="meta list-inline mb-0">
							<li class="list-inline-item"><a href="#">Katen Doe</a></li>
							<li class="list-inline-item">29 March 2021</li>
						</ul>
					</div> -->
            <a href="blog-single.html">
                <div class=" rounded">
                    <img src="{{asset('client/images/partenaire/3.jpeg')}}" alt="">
                </div>
            </a>
        </div>

        <div class="post featured-post-md">
            <!-- <div class="details clearfix">
						<a href="category.html" class="category-badge">Trending</a>
						<h4 class="post-title"><a href="blog-single.html">Open The Gates For Chair By Using These Tips</a></h4>
						<ul class="meta list-inline mb-0">
							<li class="list-inline-item"><a href="#">Katen Doe</a></li>
							<li class="list-inline-item">29 March 2021</li>
						</ul>
					</div> -->
            <a href="blog-single.html">
                <div class=" rounded">
                    <img src="{{asset('client/images/partenaire/4.jpeg')}}" alt="">
                </div>
            </a>
        </div>

        <div class="post featured-post-md">
            <!-- <div class="details clearfix">
						<a href="category.html" class="category-badge">Politic</a>
						<h4 class="post-title"><a href="blog-single.html">Feel Like A Pro With The Help Of These 7 Tips</a></h4>
						<ul class="meta list-inline mb-0">
							<li class="list-inline-item"><a href="#">Katen Doe</a></li>
							<li class="list-inline-item">29 March 2021</li>
						</ul>
					</div> -->
            <a href="blog-single.html">
                <div class=" rounded">
                    <img src="{{asset('client/images/partenaire/7.jpeg')}}" alt="">
                </div>
            </a>
        </div>

        <div class="post featured-post-md">
            <!-- <div class="details clearfix">
						<a href="category.html" class="category-badge">Culture</a>
						<h4 class="post-title"><a href="blog-single.html">Your Light Is About To Stop Being Relevant</a></h4>
						<ul class="meta list-inline mb-0">
							<li class="list-inline-item"><a href="#">Katen Doe</a></li>
							<li class="list-inline-item">29 March 2021</li>
						</ul>
					</div> -->
            <a href="blog-single.html">
                <div class=" rounded">
                    <img src="{{asset('client/images/partenaire/6.jpeg')}}" alt="">
                </div>
            </a>
        </div> 
    --}}
    </div>
</section>

<!-- footer -->

@endsection