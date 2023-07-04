@extends('layouts/client_master')
@section('content')

<style>

.testimonial-item {
    transition: background-color 0.3s ease;
}

.testimonial-item:hover {
    background-color: #FEF4F1; /* Couleur de fond au survol */
}

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

    .testimonials .testimonial-item {
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 20px;
}

.testimonials .testimonial-avatar {
  border-radius: 50%;
}

.testimonials .testimonial-author {
  font-weight: bold;
  margin-top: 10px;
}

.testimonials .testimonial-company {
  font-style: italic;
  color: #888;
}

.testimonials .testimonial-avatar {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
  width: 200px;
  border: 2px solid #ccc;
  border-radius: 50%;
  overflow: hidden;
}

.testimonials .testimonial-avatar img { 
  max-width: 100%;
  max-height: 100%;
  object-fit: cover;
  border-radius: 50%;
}

</style>
<!-- hero section -->
<section id='hero' >
    <div class='container-xl'>
        <div class='row gy-4'>
            <div class='col-lg-8'>
                <div class='post-carousel-lg'>
                    <!-- post -->
                    @foreach($bannieres as $banniere)
                        <div class='post featured-post-xl'>
                            <a href='#'>
                                <div class='thumb rounded'>
                                    <div class='inner data-bg-image' data-bg-image="{{asset('storage/'.$banniere->image_banniere)}}">
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class='col-lg-4'  style="background-image:url('{{ asset('admin/assets/img/corner-2.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">

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
                                    {{-- <a href='blog-single.html'>
                                        <div class='inner rounded'>
                                            <img src="{{ asset('storage/'.$article->image_article) }}" alt='post-title' />
                                        </div>
                                    </a> --}}
                                    <a href="{{route('blog',['id' => $article->id ]) }}">
                                        <div class="inner">
                                            <img style="height:50px" src="{{ asset('storage/'.$article->image_article) }}" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class='details clearfix'>
                                    <h6 class='post-title my-0'><a style="font-size:12px" href='{{ route('blog',['id' => $article->id ])  }}'>{{ substr(strip_tags($article->courte_description),0,60) }}...</a></h6>
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

<!-- Tous les produits n'zassa présentés -->

@foreach ($formules as $formule )

<div class="m-5" data-height="50" id='{{ $formule->nom_formule }}'></div>
<section class='main-content '  style="background-image:url('{{ asset('client/images/images/vector_page/vector-row-bg-5.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class='container-xl'>
        <div class='row gy-4'>
            <div class='col-lg-12'>
                <!-- section header -->
                <div class='section-header'>
                    <h3 class='title text-center'>{{ $formule->nom_formule }}</h3>
                </div>
                <div class="padding-30 rounded bordered ">
                    <div class="row gy-5">
                        @if($cpt%2==0) 
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post">
                                <div class="thumb rounded">                
                                    <div class="inner ">
                                        <img src="{{ asset('storage/'.$formule->image_formule) }}" alt="post-title" />
                                    </div>
                                </div>
                                <h5 class="post-title mb-3 mt-3">{{ $formule->titre_formule }}
                                    </h5>
                                <p class="excerpt mb-0">{{ $formule->description_formule }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6" >
                            <!-- post -->
                            @foreach (getFonctionnalite($formule->id) as $item)
                            <div class="post post-list-sm square">
                                <div class="thumb rounded">
                                   
                                        <div class="inner">
                                            <img src="{{ asset('storage/'.$item->image_fonctionnalite) }}" alt="post-title" />
                                        </div>
                                    </a>
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
                            @endforeach
                        </div>
                        @php
                            {{ $cpt++; }}
                        @endphp
                        <div class="float-end d-none d-md-block">
                            <a href="{{ route('detail_formule', ['id' => $formule->id]) }}" class="more-link">En savoir plus<i class="icon-arrow-right"></i></a>
                        </div>
                        @else 
                        <div class="col-sm-6">
                            <!-- post -->
                            @foreach (getFonctionnalite($formule->id) as $item)
                            <div class="post post-list-sm square">
                                <div class="thumb rounded">
                                    <a >
                                        <div class="inner">
                                            <img src="{{ asset('storage/'.$item->image_fonctionnalite) }}" alt="post-title" />
                                        </div>
                                    </a>
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
                                    {{-- <a href="category.html" class="category-badge position-absolute">- 50%</a> --}}
                                    {{-- <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span> --}}
                                    <a>
                                        <div class="inner">
                                            <img src="{{ asset('storage/'.$formule->image_formule) }}" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                {{-- <ul class="meta list-inline mt-4 mb-0">
                                    <li class="list-inline-item"><a href="#"><img src="{{asset('client/images/other/author-sm.png')}}" class="author" alt="author" />Katen Doe</a></li>
                                    <li class="list-inline-item">29 March 2021</li>
                                </ul> --}}
                                <h5 class="post-title mb-3 mt-3"><a>{{ $formule->titre_formule }}
                                    </a></h5>
                                <p class="excerpt mb-0">{{ $formule->description_formule }}</p>
                            </div>
                        </div>
                        @php
                            {{ $cpt++; }}
                        @endphp
                        <div class="float-end d-none d-md-block">
                            <a href="{{ route('detail_formule', ['id' => $formule->id]) }}" class="more-link">En savoir plus<i class="icon-arrow-right"></i></a>
                        </div>
                        @endif 
                    </div>
                </div>
            </div>
        </div>
</section>
@endforeach
<div class="" data-height="50" id="team"></div>
<h3 class="section-title text-center prod_nzassa m-5 "> La Team Innoving</h3>
      <!-- Notre team  -->
        @include('../../layouts/client/team')
            
<!-- Notre Galerie -->
<div class="" data-height="50" id="galerie"></div>
<h3 class="section-title text-center prod_nzassa m-5 ">  La galerie Innoving</h3>
<section class="hero-carousel m-5">
    <div class="row post-carousel-featured post-carousel ">
        @foreach ($galeries as $galerie )
            <div class="post">
                <div class=" rounded">
                    <div class="inner data-bg-image" data-bg-image="{{asset('storage/.$galerie->image_galerie')}}">
                        <img src="{{ asset('storage/'.$galerie->image_galerie) }}" alt="" style="width:260px; height:196px; border-radius: 10px;">
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
                <section class="testimonials" style="background-image:url('{{ asset('admin/assets/img/corner-3.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-inner">
                            @foreach ($temoignages as $key => $temoignage)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <div class="testimonial-item text-center bg-gradient border rounded p-4">
                                        <div class="testimonial-avatar mx-auto">
                                            <img src="{{ asset('storage/'.$temoignage->image_temoignage) }}" alt="Avatar du client">
                                        </div>
                                        <p class="testimonial-text">{{ $temoignage->detail_temoignage }}</p>
                                        <h5 style="color: #ff3100" class="testimonial-author">{{ $temoignage->nom_temoignage }}</h5>
                                        <p  class="testimonial-company">{{ $temoignage->profession_temoignage }}</p>
                                    </div>
                                </div>
                            @endforeach
                        {{--                             
                            <div class="carousel-item">
                                <div class="testimonial-item text-center bg-gradient border rounded p-4">
                                    <div class="testimonial-avatar mx-auto">
                                        <img src="{{ asset('client/images/bg1.jpg') }}" alt="Avatar du client">
                                    </div>
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis justo sem. Vestibulum ullamcorper, lacus eu consequat rutrum, lectus neque condimentum enim, et facilisis odio odio nec urna.</p>
                                    <h5 class="testimonial-author">John Doe</h5>
                                    <p class="testimonial-company">ABC Company</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-item text-center bg-gradient border rounded p-4">
                                    <div class="testimonial-avatar mx-auto">
                                        <img src="{{ asset('client/images/bg1.jpg') }}" alt="Avatar du client">
                                    </div>
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis justo sem. Vestibulum ullamcorper, lacus eu consequat rutrum, lectus neque condimentum enim, et facilisis odio odio nec urna.</p>
                                    <h5 class="testimonial-author">John Doe</h5>
                                    <p class="testimonial-company">ABC Company</p>
                                </div>
                            </div> --}}
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Suivant</span>
                        </button>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section><br>

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
    </div>
</section>

<!-- footer -->

@endsection