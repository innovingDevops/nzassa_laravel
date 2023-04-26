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
		width: 100px;
		border-radius: 100%;
	}
</style>
<!-- hero section -->
<section id='hero'>

    <div class='container-xl'>

        <div class='row gy-4'>

            <div class='col-lg-8'>

                <div class='post-carousel-lg'>
                    <!-- post -->
                    <div class='post featured-post-xl'>
                        <div class='details clearfix'>
                            <a href='category.html' class='category-badge lg'>N'zassa</a>
                            <h4 class="post-title"><a href="blog-single.html">N'Zassa Shop</a></h4>
                            <ul class='meta list-inline mb-0'>
                                <li class='list-inline-item'><a href='#'>Katen Doe</a></li>
                                <li class='list-inline-item'>29 March 2021</li>
                            </ul>
                        </div>
                        <a href='blog-single.html'>
                            <div class='thumb rounded'>
                                <div class='inner data-bg-image' data-bg-image="{{asset('client/images/posts/featured-xl-1.jpg')}}">
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
                                <div class='inner data-bg-image' data-bg-image="{{asset('client/ images/posts/featured-xl-2.jpg')}}">
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
                            <div class='post post-list-sm circle'>
                                <div class='thumb circle'>
                                    <a href='blog-single.html'>
                                        <div class='inner'>
                                            <img src="{{asset('client/images/posts/tabs-1.jpg')}}" alt='post-title' />
                                        </div>
                                    </a>
                                </div>
                                <div class='details clearfix'>
                                    <h6 class='post-title my-0'><a href='blog-single.html'>3 Easy Ways To Make Your
                                            iPhone Faster</a></h6>
                                    <ul class='meta list-inline mt-1 mb-0'>
                                        <li class='list-inline-item'>29 March 2021</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post -->
                            <div class='post post-list-sm circle'>
                                <div class='thumb circle'>
                                    <a href='blog-single.html'>
                                        <div class='inner'>
                                            <img src="{{asset('client/images/posts/tabs-2.jpg')}}" alt='post-title' />
                                        </div>
                                    </a>
                                </div>
                                <div class='details clearfix'>
                                    <h6 class='post-title my-0'><a href='blog-single.html'>An Incredibly Easy Method
                                            That Works For All</a></h6>
                                    <ul class='meta list-inline mt-1 mb-0'>
                                        <li class='list-inline-item'>29 March 2021</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post -->
                            <div class='post post-list-sm circle'>
                                <div class='thumb circle'>
                                    <a href='blog-single.html'>
                                        <div class='inner'>
                                            <img src="{{asset('client/images/posts/tabs-3.jpg')}}" alt='post-title' />
                                        </div>
                                    </a>
                                </div>
                                <div class='details clearfix'>
                                    <h6 class='post-title my-0'><a href='blog-single.html'>10 Ways To Immediately
                                            Start
                                            Selling Furniture</a></h6>
                                    <ul class='meta list-inline mt-1 mb-0'>
                                        <li class='list-inline-item'>29 March 2021</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post -->
                            <div class='post post-list-sm circle'>
                                <div class='thumb circle'>
                                    <a href='blog-single.html'>
                                        <div class='inner'>
                                            <img src="{{asset('client/images/posts/tabs-4.jpg')}}" alt='post-title' />
                                        </div>
                                    </a>
                                </div>
                                <div class='details clearfix'>
                                    <h6 class='post-title my-0'><a href='blog-single.html'>15 Unheard Ways To
                                            Achieve
                                            Greater Walker</a></h6>
                                    <ul class='meta list-inline mt-1 mb-0'>
                                        <li class='list-inline-item'>29 March 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- les produits N'Zassa -->

@include('../../layouts/client/produit_nzassa')
<div class="" data-height="50" id="nzassashop"></div>
<!-- Tous les produits n'zassa présentés -->
<section class='main-content'>
    <div class='container-xl'>
        <div class='row gy-4'>
            <div class='col-lg-12'>
                <!-- section header -->
                <div class='section-header'>
                    <h3 class='title text-center'>N'Zassa Shop</h3>

                </div>

                <div class="padding-30 rounded bordered">
                    <div class="row gy-5">
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post">
                                <div class="thumb rounded">
                                    <a href="category.html" class="category-badge position-absolute">Cet espace est
                                        dédié à une grande image du produit</a>
                                    <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{asset('client/images/posts/editor-lg.jpg')}}" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <ul class="meta list-inline mt-4 mb-0">
                                    <li class="list-inline-item"><a href="#"><img src="{{asset('client/images/other/author-sm.png')}}" class="author" alt="author" />Katen Doe</a></li>
                                    <li class="list-inline-item">29 March 2021</li>
                                </ul>
                                <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Petit slogan sur le produit
                                    </a></h5>
                                <p class="excerpt mb-0">description relative</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-list-sm square">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{asset('client/images/posts/editor-sm-1.jpg')}}" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0">
                                        <a href="blog-single.html">Fonctionnalité 1 </a>
                                    </h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Labore porro id voluptate cupiditate.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post post-list-sm square">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{asset('client/images/posts/editor-sm-1.jpg')}}" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0">
                                        <a href="blog-single.html">Fonctionnalité 2 </a>
                                    </h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Labore porro id voluptate cupiditate.</li>
                                    </ul>
                                </div>
                            </div>
                             <div class="post post-list-sm square">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{asset('client/images/posts/editor-sm-1.jpg')}}" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0">
                                        <a href="blog-single.html">Fonctionnalité 3 </a>
                                    </h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Labore porro id voluptate cupiditate. </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post post-list-sm square">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{asset('client/images/posts/editor-sm-1.jpg')}}" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0">
                                        <a href="blog-single.html">Fonctionnalité 4 </a>
                                    </h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Labore porro id voluptate cupiditate. </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- notre team  -->
<div class="" data-height="50" id="team"></div>
<h3 class="section-title text-center prod_nzassa  m-5"> La Team Innoving</h3>
<div class="container">
    <div class="col-lg-12">

        <!-- post tabs -->
        <div class="post-tabs rounded bordered">
            <!-- tab navs -->
            <!-- <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button aria-controls="popular" aria-selected="true" class="nav-link active actualite"
							data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">La
							Team Innoving</button>
					</li>
				</ul> -->
            <!-- tab contents -->
            <div class="tab-content" id="postsTabContent">
                <!-- loader -->
                <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent"
                            data-bs-toggle="tab" id="recent-tab" role="tab" type="button">
                            All
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button aria-controls="popular" aria-selected="true" class="nav-link active"
                            data-bs-target="#direction" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">
                            Departement 1
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent"
                            data-bs-toggle="tab" id="recent-tab" role="tab" type="button">
                            Departement 2
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent"
                            data-bs-toggle="tab" id="recent-tab" role="tab" type="button">
                            Departement 3
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent"
                            data-bs-toggle="tab" id="recent-tab" role="tab" type="button">
                            Departement 4
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent"
                            data-bs-toggle="tab" id="recent-tab" role="tab" type="button">
                            Departement 5
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent"
                            data-bs-toggle="tab" id="recent-tab" role="tab" type="button">
                            Departement 6
                        </button>
                    </li>
                </ul>
                <!-- tab contents -->
                <div class="tab-content" id="postsTabContent">
                    <!-- loader -->
                    <div class="lds-dual-ring"></div>
                    <!-- popular posts -->
                    <div aria-labelledby="popular-tab" class="tab-pane fade show active d-flex justify-content-between"
                        id="direction" role="tabpanel">
                        <!-- post -->
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{asset('client/images/posts/tabs-1.jpg')}}" alt="post-title" />
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- post -->
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{asset('client/images/posts/tabs-1.jpg')}}" alt="post-title" />
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- post -->
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{asset('client/images/posts/tabs-1.jpg')}}" alt="post-title" />
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- post -->
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{asset('client/images/posts/tabs-2.jpg')}}" alt="post-title" />
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- post -->
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{asset('client/images/posts/tabs-3.jpg')}}" alt="post-title" />
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- post -->
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{asset('client/images/posts/tabs-4.jpg')}}" alt="post-title" />
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- recent posts -->
                    <div aria-labelledby="recent-tab" class="tab-pane fade d-flex justify-content-between" id="recent"
                        role="tabpanel">
                        <!-- post -->
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{asset('client/images/posts/tabs-2.jpg')}}" alt="post-title" />
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- post -->
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{asset('client/images/posts/tabs-1.jpg')}}" alt="post-title" />
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- post -->
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{asset('client/images/posts/tabs-4.jpg')}}" alt="post-title" />
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- post -->
                        <div class="post post-list-sm circle">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img src="{{asset('client/images/posts/tabs-3.jpg')}}" alt="post-title" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Notre Galerie -->
<div class="" data-height="50" id="galerie"></div>
<h3 class="section-title text-center prod_nzassa m-5 "> La galerie Innoving</h3>
<section class="hero-carousel m-5">
    <div class="row post-carousel-featured post-carousel">

        <div class="post featured-post-md">
            <div class="details clearfix">
                <a href="category.html" class="category-badge">Lifestyle</a>
                <h4 class="post-title"><a href="blog-single.html">Important Thing You Need To Know About Swim</a></h4>
                <ul class="meta list-inline mb-0">
                    <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                    <li class="list-inline-item">29 March 2021</li>
                </ul>
            </div>
            <a href="blog-single.html">
                <div class="thumb rounded">
                    <div class="inner data-bg-image" data-bg-image="{{asset('client/images/posts/inspiration-3.jpg')}}"></div>
                </div>
            </a>
        </div>

        <div class="post featured-post-md">
            <div class="details clearfix">
                <a href="category.html" class="category-badge">Fashion</a>
                <h4 class="post-title"><a href="blog-single.html">Most Burning Questions About Light Lamp</a></h4>
                <ul class="meta list-inline mb-0">
                    <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                    <li class="list-inline-item">29 March 2021</li>
                </ul>
            </div>
            <a href="blog-single.html">
                <div class="thumb rounded">
                    <div class="inner data-bg-image" data-bg-image="{{asset('client/images/posts/inspiration-3.jpg')}}"></div>
                </div>
            </a>
        </div>

        <div class="post featured-post-md">
            <div class="details clearfix">
                <a href="category.html" class="category-badge">Inspiration</a>
                <h4 class="post-title"><a href="blog-single.html">9 Most Awesome Blue Lake With Snow Mountain</a></h4>
                <ul class="meta list-inline mb-0">
                    <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                    <li class="list-inline-item">29 March 2021</li>
                </ul>
            </div>
            <a href="blog-single.html">
                <div class="thumb rounded">
                    <div class="inner data-bg-image" data-bg-image="{{asset('client/images/posts/featured-md-1.jpg')}}"></div>
                </div>
            </a>
        </div>

        <div class="post featured-post-md">
            <div class="details clearfix">
                <a href="category.html" class="category-badge">Trending</a>
                <h4 class="post-title"><a href="blog-single.html">Open The Gates For Chair By Using These Tips</a></h4>
                <ul class="meta list-inline mb-0">
                    <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                    <li class="list-inline-item">29 March 2021</li>
                </ul>
            </div>
            <a href="blog-single.html">
                <div class="thumb rounded">
                    <div class="inner data-bg-image" data-bg-image="{{asset('client/images/posts/featured-md-2.jpg')}}"></div>
                </div>
            </a>
        </div>

        <div class="post featured-post-md">
            <div class="details clearfix">
                <a href="category.html" class="category-badge">Politic</a>
                <h4 class="post-title"><a href="blog-single.html">Feel Like A Pro With The Help Of These 7 Tips</a></h4>
                <ul class="meta list-inline mb-0">
                    <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                    <li class="list-inline-item">29 March 2021</li>
                </ul>
            </div>
            <a href="blog-single.html">
                <div class="thumb rounded">
                    <div class="inner data-bg-image" data-bg-image="{{asset('client/images/posts/featured-md-3.jpg')}}"></div>
                </div>
            </a>
        </div>

        <div class="post featured-post-md">
            <div class="details clearfix">
                <a href="category.html" class="category-badge">Culture</a>
                <h4 class="post-title"><a href="blog-single.html">Your Light Is About To Stop Being Relevant</a></h4>
                <ul class="meta list-inline mb-0">
                    <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                    <li class="list-inline-item">29 March 2021</li>
                </ul>
            </div>
            <a href="blog-single.html">
                <div class="thumb rounded">
                    <div class="inner data-bg-image" data-bg-image="{{asset('client/images/posts/inspiration-3.jpg')}}"></div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Les témoignages  -->
<h3 class="section-title text-center prod_nzassa m-5 "> Les Témoignages </h3>

<section class="main-content ">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner monElement">
                        <div class="carousel-item active">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0 m-2">
                                    <div class="thumb">
                                        <img class="img_team" src="{{asset('client/images/team/ARIEL.jpg')}}" alt="John Doe" />
                                    </div>
                                    <div class="details">
                                        <h4 class="name"><a href="#">John Doe</a></h4>
                                        <span class="date">Jan 08, 2021 14:41 pm</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae odio ut
                                            tortor fringilla cursus sed quis odio.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0 m-2">
                                    <div class="thumb">
                                        <img class="img_team" src="{{asset('client/images/other/comment-1.png')}}" alt="John Doe" />
                                    </div>
                                    <div class="details">
                                        <h4 class="name"><a href="#">John Doe</a></h4>
                                        <span class="date">Jan 08, 2021 14:41 pm</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae odio ut
                                            tortor fringilla cursus sed quis odio.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="next">
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

        <div class="post featured-post-md">
            <a href="blog-single.html">
                <div class=" rounded">
                    <img src="{{asset('client/images/partenaire/1.jpeg')}}" alt="">
                </div>
            </a>
        </div>

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
    </div>
</section>

<!-- footer -->

@endsection