@extends('layouts/client_master')
@section('content')

{{-- <section class="single-cover data-bg-image" data-bg-image="{{ asset('admin/assets/img/ecommerce/1.jpg') }}">

    <div class="container-xl">

        <div class="cover-content post">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Inspiration</a></li>
                    <li class="breadcrumb-item active" aria-current="page">3 Easy Ways To Make Your iPhone Faster</li>
                </ol>
            </nav>

            <!-- post header -->
            <div class="post-header">
                <h1 class="title mt-0 mb-3">Rencontrez notre équipe exceptionnelle, dévouée à fournir les meilleurs services et solutions à nos clients. </h1>
                <ul class="meta list-inline mb-0">
                    <li class="list-inline-item"><a href="{{route('blog')}}"><img src="images/other/author-sm.png" class="author"
                                alt="author" />Katen Doe</a></li>
                    <li class="list-inline-item"><a href="#">Trending</a></li>
                    <li class="list-inline-item">29 March 2021</li>
                </ul>
            </div>
        </div>
    </div>
</section><br> --}}
<h3 style="font-size: 35px" class=" text-center fw-light overflow-hidden"> Explorez la gamme de nos produits N'Zassa : <span class="element fw-bold ms-1" data-typed-text='["NZassa School.","NZassa RH&PAIE.","NZassa Auto+.","NZassa GESCOM."]'></span></h3>

<div class="container-xl" >
    <div class="widget rounded " >
        <div class="widget-content d-flex">
            @foreach ( $departements as $departement )
            <a  href="{{ route('teambydep', ['id' => $departement->id]) }}" class="tag">{{ $departement->libelle_departement }}</a>
            @endforeach
        </div>		
        <section class="main-content" id="team">
            <div class="container-xl">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <div class="row gy-4">
                            @foreach ( $teams as $team )
                                <div class="col-sm-4">
                                    <!-- post -->
                                    <div class="post post-grid rounded bordered" style="background-image:url('{{ asset('admin/assets/img/corner-1.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                        <div class="thumb top-rounded">
                                            {{-- <a href="#" class="category-badge position-absolute">{{ getcateoriebyid($team->id_categorie)->nom_categorie }}</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span> --}}
                                            <a>
                                                <div class="inner" >
                                                    <img width="100%"  src="{{ asset('storage/'.$team->image) }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            {{-- <ul class="meta list-inline mb-0">
                                                <li class="list-inline-item"><i class="far fa-calendar-alt"></i>   {{ $team->created_at }}</li>
                                            </ul> --}}
                                            <h5 class="post-title mb-3 mt-3"><a href="{{route('blog',['id' => $team->id ]) }}">{{ $team->nom }}</a></h5>
                                            <p class="excerpt mb-0">{{ $team->fonction }}</p>
                                        </div>
                                        {{-- <div class="post-bottom clearfix d-flex align-items-center">
                                            <div class="social-share me-auto">
                                                <button class="toggle-button far fa-list-alt"></button>
                                                
                                                <ul class="icons list-unstyled list-inline mb-0">                         
                                                    <li class="list-inline-item"><a href="{{ getSetting('facebook') }}"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="list-inline-item"><a href="{{ getSetting('twitter') }}"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a href="{{ getSetting('instagram') }}"><i class="fab fa-instagram"></i></a></li>
                                                    <li class="list-inline-item"><a href="{{ getSetting('youtube') }}"><i class="fab fa-youtube"></i></a></li>
                                                </ul>
                                            </div>
                                            {{-- <div class="more-button float-end">
                                                <a href="{{route('blog')}}"><span class="icon-options"></span></a>
                                            </div> 
                                        </div> --}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $teams->links() }}
                        {{-- <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">1</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="{{route('blog')}}#">2</a></li>
                                <li class="page-item"><a class="page-link" href="{{route('blog')}}#">3</a></li>
                                <li class="page-item"><a class="page-link" href="{{route('blog')}}#"></a></li>
                            </ul>
                        </nav> --}}
                    </div>
                    
                    
                </div>
            </div>
        </section>
    </div>
</div><br>  

@include('../../layouts/client/produit_nzassa')
@endsection