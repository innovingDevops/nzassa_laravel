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
                    @foreach ( $articles as $article )
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">{{ $article->categorie }}</a>
                                    <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span>
                                    <a href="{{route('blog')}}">
                                        <div class="inner">
                                            <img src="{{ asset('storage/'.$article->image_article) }}" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        
                                        <li class="list-inline-item"><i class="far fa-calendar-alt"></i>   {{ $article->created_at }}</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="{{route('blog')}}">{{ substr(strip_tags($article->courte_description),0,45) }}</a></h5>
                                    <p class="excerpt mb-0">{{ substr(strip_tags($article->detail_article), 0, 70) }}</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="{{route('blog')}}#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="{{route('blog')}}#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="{{route('blog')}}#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="{{route('blog')}}#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="{{route('blog')}}#"><i
                                                        class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="{{route('blog')}}#"><i class="far fa-envelope"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="{{route('blog')}}"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="{{route('blog')}}#">2</a></li>
                        <li class="page-item"><a class="page-link" href="{{route('blog')}}#">3</a></li>
                    </ul>
                </nav>
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
                                @foreach ( $articles as $article )
                                    <li><a href="#">{{ $article->categorie }}</a><span>{{ getArticleByCat() }}</span></li>
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

                <div class="spacer" data-height="50"></div>

                <!-- section header -->
                <div class="section-header">
                    <h3 class="section-title">Laissez un commentaire</h3>
                    <img src="images/wave.svg" class="wave" alt="wave" />
                </div>
                <!-- comment form -->
                <div class="comment-form rounded bordered padding-30">

                    <form id="comment-form" class="comment-form" method="post">

                        <div class="messages"></div>

                        <div class="row">

                            <div class="column col-md-12">
                                <!-- Comment textarea -->
                                <div class="form-group">
                                    <textarea name="InputComment" id="InputComment" class="form-control" rows="4"
                                        placeholder="Faites votre commentaire ici..." required="required"></textarea>
                                </div>
                            </div>

                            <div class="column col-md-6">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="email" class="form-control" id="InputEmail" name="InputEmail"
                                        placeholder="Adresse Email" required="required">
                                </div>
                            </div>

                            <div class="column col-md-6">
                                <!-- Name input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" name="InputWeb" id="InputWeb"
                                        placeholder="l'objet" required="required">
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="InputName" name="InputName"
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