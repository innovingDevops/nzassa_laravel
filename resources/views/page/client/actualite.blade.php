    @extends('layouts/client_master')
    @section('content')

    <section class="single-cover data-bg-image" data-bg-image="images/posts/single-cover.jpg">

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

    <section class="main-content">
        <div class="container-xl">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="row gy-4">
                        @if ($articles->isEmpty())
                            <div class="col">
                                <div class="card">
                                    <img src="{{ asset('client/images/zero.jpg') }}" class="card-img-top" alt="...">
                                </div>
                            </div>
                            @else
                            @foreach ( $articles as $article )
                            
                                <div class="col-sm-6">
                                    <!-- post -->
                                    <div class="post post-grid rounded bordered">
                                        <div class="thumb top-rounded">
                                            <a href="#" class="category-badge position-absolute">{{ getcateoriebyid($article->id_categorie)->nom_categorie }}</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="{{route('blog',['id' => $article->id ]) }}">
                                                <div class="inner">
                                                    <img src="{{ asset('storage/'.$article->image_article) }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-0">
                                                <li class="list-inline-item"><i class="far fa-calendar-alt"></i>   {{ $article->created_at }}</li>
                                            </ul>
                                            <h5 class="post-title mb-3 mt-3"><a href="{{route('blog',['id' => $article->id ]) }}">{{ substr(strip_tags($article->courte_description),0,45) }}</a></h5>
                                            <p class="excerpt mb-0">{{ substr(strip_tags($article->detail_article), 0, 70) }}</p>
                                        </div>
                                        <div class="post-bottom clearfix d-flex align-items-center">
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
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    {{ $articles->links() }}
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

    @include('../../layouts/client/produit_nzassa')
    @endsection