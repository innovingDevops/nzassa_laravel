<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset=UTF-8>
	<meta http-equiv="Content-Type" content="text/html">
	<title>N'Zassa | website </title>
	<meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('client/images/favicon.ico') }}">

	<!-- STYLES -->
	<link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('client/css/all.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('client/css/slick.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('client/css/simple-line-icons.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('client/css/style.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- preloader -->
 {{-- <div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div> --}}

{{-- Deplacement vers la droite --}}
{{-- <style>
    @keyframes move-scale-rotate {
        0% {
            transform: translateX(0) scale(0.5) rotate(0deg);
            transform-origin: center center;
        }
        50% {
            transform: translateX(300px) scale(0.5) rotate(180deg);
            transform-origin: center center;
        }
        100% {
            transform: translateX() scale(1) rotate(360deg);
            transform-origin: center center;
        }
    }

    #moving-image {
        animation: move-scale-rotate 4s infinite;
    }
</style> --}}

{{-- rotation du logos --}}
<style>
    @keyframes move-scale-rotate {
        0% {
            transform: rotate(0deg);
            transform-origin: center center;
        }
        50% {
            transform: rotate(180deg);
            transform-origin: center center;
        }
        100% {
            transform: rotate(360deg);
            transform-origin: center center;
        }
    }

    #moving-image {
        animation: move-scale-rotate 4s infinite;
    }
</style>
<div id="preloader" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <img id="moving-image" width="200px" src="{{ asset('client/images/favicon.ico') }}" alt="Loading..." />
</div>

<!-- site wrapper -->
<div class="site-wrapper">
	<div class="main-overlay"></div>
	<!-- header -->
	<header class="header-default">
		<nav class="navbar navbar-expand-lg">
			<div class="container-xl">
				<!-- site logo -->
				<a class="navbar-brand" href="{{ route('home') }}"><img width="120" src="{{ asset('client/images/logo.png') }}" alt="logo" /></a> 
				<div class="collapse navbar-collapse">
					<!-- menus -->
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown  {{ (Route::currentRouteName() == 'home') ? 'active':''}}">
							<a class="nav-link " href="{{route('home')}}">Accueil</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{route('home')}}#">N'ZASSA</a>
							<ul class="dropdown-menu">
								@foreach ($formules as $formule)
									<li><a class="dropdown-item" href="{{route('home')}}#{{ $formule->nom_formule }}">{{ $formule->nom_formule }}</a></li>
								@endforeach
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('home')}}#team">Team</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="{{route('home')}}#galerie">Galerie</a>
						</li>
						<li class="nav-item {{ (Route::currentRouteName() == 'historique') ? 'active':''}}">
							<a class="nav-link" href="{{ route('historique') }}">Historique</a>
						</li>
						<li class="nav-item {{ (Route::currentRouteName() == 'actualite') ? 'active':''}}">
							<a class="nav-link" href="{{route('actualite')}}">Actualité</a>
						</li>
						<li class="nav-item {{ (Route::currentRouteName() == 'contact') ? 'active':''}}">
							<a class="nav-link" href="{{route('contact')}}">Contact</a>
						</li>
					</ul>
				</div>
				<!-- header right section -->
				<div class="header-right">
					<!-- social icons -->
					<ul class="social-icons list-unstyled list-inline mb-0">	
						<li class="list-inline-item"> {{ getSetting('telephone') }}</li>
					</ul>
					<!-- header buttons -->
					<div class="header-buttons">
						{{-- <button class="search icon-button">
							<i class="icon-magnifier"></i>
						</button> --}}
						<button class="burger-menu icon-button">
							<span class="burger-icon"></span>
						</button>
					</div>
				</div>
			</div>
		</nav>
	</header>

	