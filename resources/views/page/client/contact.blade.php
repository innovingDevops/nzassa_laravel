@extends('layouts/client_master')
@section('content')
   <!-- page header -->
   <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row">
						
                <div class="col-md-4">
                    <!-- contact info item -->
                    <div class="contact-item bordered rounded d-flex align-items-center">
                        <span class="icon icon-phone"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0">Phone</h3>
                            <p class="mb-0">{{ getSetting('telephone') }}</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4">
                    <!-- contact info item -->
                    <div class="contact-item bordered rounded d-flex align-items-center">
                        <span class="icon icon-envelope-open"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0">E-Mail</h3>
                            <p class="mb-0">{{ getSetting('adresse_mail') }}</p><br>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4">
                    <!-- contact info item -->
                    <div class="contact-item bordered rounded d-flex align-items-center">
                        <span class="icon icon-map"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0">Location</h3>
                            <p class="mb-0">{{ getSetting('localisation') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer" data-height="50"></div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
             @endif
            <!-- section header -->
            <div class="section-header">
                <h3 class="section-title">Send Message</h3>
                <img src="{{ asset('client/images/wave.svg') }}" class="wave" alt="wave" />
            </div>

            <!-- Contact Form -->
            <form id="contact-form" class="contact-form" action="{{ route('save_devis') }}" method="post">
                @csrf
                <div class="messages"></div>
                
                <div class="row">
                    <div class="column col-md-6">
                        <!-- Name input -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="nom_prenom" id="nom_prenom" placeholder="Nom & Prénom" required="required" data-error="Name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="column col-md-6">
                        <!-- Email input -->
                        <div class="form-group">
                            <input type="text" class="form-control" id="nom_societe" name="nom_societe" placeholder="Nom de la Société" required="required" data-error="Name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="column col-md-6">
                        <!-- Name input -->
                        <div class="form-group">
                            <select class="form-control"  required="required" id="nombre_employe" name="nombre_employe">
                                <option selected disabled>Nombre d'employés</option>
                                <option value="< 5 employés">< 5 employés</option>
                                <option value="Compris entre 5 et 10">Compris entre 5 et 10</option>
                                <option value="> 10 employés">> 10 employés</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="column col-md-6">
                        <!-- Name input -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="secteur_activite" id="secteur_activite" placeholder="Email" required="required" data-error="Name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="column col-md-12">
                        <!-- Email input -->
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Contact" required="required" >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="column col-md-12">
                        <!-- Email input -->
                        <div class="form-group">
                            <input hidden type="text" class="form-control" id="text" name="subject" placeholder="subject" required="required" value="Demande de devis" >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="column col-md-12">
                        <!-- Email input -->
                        <div class="form-group">
                            <input type="text " class="form-control" id="contact" name="contact" placeholder="Secteur d'activités" required="required" >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="column col-md-12">
                        <!-- Name input -->
                        <div class="form-group">
                            <select class="form-control"  required="required" id="formule" name="formule">
                                <option selected disabled>Cliquez ici pour choisir une formule</option>
                                <option value="N'Zassa RH & Paie">N'Zassa RH & Paie</option>
                                <option value="N'Zassa School">N'Zassa School</option>
                                <option value="N'Zassa Shop">N'Zassa Shop</option>
                                <option value="N'Zassa GESCOM">N'Zassa GESCOM</option> 
                                <option value="N'Zassa Auto+">N'Zassa Auto+</option> 
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="column col-md-12">
                        <!-- Message textarea -->
                        <div class="form-group">
                            <textarea name="commentaire" id="commentaire" class="form-control" rows="4" placeholder="Entrez votre commentaire..." required="required" data-error="Message is required."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Demander un devis </button><!-- Send Button -->

            </form>
            <!-- Contact Form end -->
		</div>
	</section>

	<!-- les produits N'Zassa -->
@include('../../layouts/client/produit_nzassa')
@endsection