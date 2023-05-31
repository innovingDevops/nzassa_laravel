@extends('layouts/client_master')
@section('content')
@php
{{ $cpt=0;  }}
@endphp
        <section class="single-cover data-bg-image" data-bg-image="{{ asset('client/images/nzassa.jpg') }}">
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
                        <h1 class="title mt-0 mb-3">3 Easy Ways To Make Your iPhone Faster</h1>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="{{route('blog')}}"><img src="images/other/author-sm.png" class="author"
                                        alt="author" />Katen Doe</a></li>
                            <li class="list-inline-item"><a href="#">Trending</a></li>
                            <li class="list-inline-item">29 March 2021</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

<div class="m-5" data-height="50" ></div>

<section class='main-content'  style="background-image:url('{{ asset('admin/assets/img/corner-1.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;" >
    <div class='container-xl'>
        <div class='row gy-4'>
            <div class='col-lg-12'>
                <div class='section-header'>
                    <h3 class='title text-center'>{{ $formule->nom_formule }}</h3>
                </div>
                <div class="padding-30 rounded bordered">
                    <div class="row gy-5 ">
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post">
                                <div class="thumb rounded">                
                                    <div class="inner ">
                                        <img src="{{ asset('storage/'.$formule->image_formule) }}" alt="post-title" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="post-title mb-3 mt-3">{{ $formule->titre_formule }}</h5>
                                <p class="excerpt mb-0">{{ $formule->description_formule }}</p>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                              <div class="col-md-6">
                                @foreach (fonct_detail_nzassa_shop($formule->id) as $index => $fonctionnalite)
                                  @if ($index % 2 == 0)
                                    <div class="post post-list-sm square">
                                      <div class="thumb rounded">
                                        <div class="inner">
                                          <img src="{{ asset('storage/'.$fonctionnalite->image_fonctionnalite) }}" alt="post-title" />
                                        </div>
                                      </div>
                                      <div class="details clearfix">
                                        <h6 class="post-title my-0">
                                          <a>{{ $fonctionnalite->libelle_fonctionnalite }}</a>
                                        </h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                          <li class="list-inline-item">{{ $fonctionnalite->description_fonctionnalite }}</li>
                                        </ul>
                                      </div>
                                    </div>
                                  @endif
                                @endforeach
                              </div>
                              <div class="col-md-6">
                                @foreach (fonct_detail_nzassa_shop($formule->id) as $index => $fonctionnalite)
                                  @if ($index % 2 != 0)
                                    <div class="post post-list-sm square">
                                      <div class="thumb rounded">
                                        <div class="inner">
                                          <img src="{{ asset('storage/'.$fonctionnalite->image_fonctionnalite) }}" alt="post-title" />
                                        </div>
                                      </div>
                                      <div class="details clearfix ">
                                        <h6 class="post-title my-0">
                                          <a>{{ $fonctionnalite->libelle_fonctionnalite }}</a>
                                        </h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                          <li class="list-inline-item">{{ $fonctionnalite->description_fonctionnalite }}</li>
                                        </ul>
                                      </div>
                                    </div>
                                  @endif
                                @endforeach
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            
        </div>
</section>
@include('../../layouts/client/produit_nzassa')
@endsection