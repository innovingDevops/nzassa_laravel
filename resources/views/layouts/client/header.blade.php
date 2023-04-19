<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Katen - Minimal Blog & Magazine HTML Theme</title>
	<meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('client/images/favicon.png') }}">

	<!-- STYLES -->
	<link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('client/css/all.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('client/css/slick.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('client/css/simple-line-icons.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('client/css/style.css') }}" type="text/css" media="all">
	
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- preloader -->
 <div id="preloader">
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
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

	<!-- header -->
	<header class="header-default">
		<nav class="navbar navbar-expand-lg">
			<div class="container-xl">
				<!-- site logo -->
				<a class="navbar-brand" href="index.php"><img width="120" src="{{ asset('client/images/logo.png') }}" alt="logo" /></a> 

				<div class="collapse navbar-collapse">
					<!-- menus -->
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown ">
							<a class="nav-link " href="{{route('accueil')}}">Accueil</a>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="{{route('accueil')}}#">N'ZASSA</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="{{route('accueil')}}#nzassashop">N'ZASSA SHOP</a></li>
								<li><a class="dropdown-item" href="{{route('accueil')}}#nzassarh&paie">N'ZASSA RH & PAIE</a></li>
								<li><a class="dropdown-item" href="{{route('accueil')}}#nzassaschool">N'ZASSA SHCOOL</a></li>
								<li><a class="dropdown-item" href="{{route('accueil')}}#nzassagescom">N'ZASSA GESCOM</a></li>
								<li><a class="dropdown-item" href="{{route('accueil')}}#nzassabynight">N'ZASSA BYNIGHT</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('accueil')}}#team">Team</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('accueil')}}#galerie">Galerie</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('actualite')}}">Actualité</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('contact')}}">Contact</a>
						</li>
					</ul>
				</div>
				<!-- header right section -->
				<div class="header-right">
					<!-- social icons -->
					<ul class="social-icons list-unstyled list-inline mb-0">
						<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a></li>
					</ul>
					<!-- header buttons -->
					<div class="header-buttons">
						<button class="search icon-button">
							<i class="icon-magnifier"></i>
						</button>
						<button class="burger-menu icon-button">
							<span class="burger-icon"></span>
						</button>
					</div>
				</div>
			</div>
		</nav>
	</header>

	