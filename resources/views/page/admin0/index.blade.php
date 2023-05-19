@extends('layouts/admin_master')
@section('content')
    <div class="row g-3 mb-3">
        <div class="row g-3 mb-3">
            <div class="col-sm-6 col-md-4">
              <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url({{ asset('admin/assets/img/corner-1.png');}})">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative">
                  <h6>Nos articles en ligne<span class="badge badge-soft-warning rounded-pill ms-2 fs-"></span></h6>
                  <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup="{&quot;endValue&quot;:58.386,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">{{ $articles }} </div><a class="fw-semi-bold fs--1 text-nowrap" href="{{ route('liste_article') }}"><i class="far fa-eye"></i> Voir liste</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url({{ asset('admin/assets/img/corner-2.png');}})">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative">
                  <h6>Nos Catégories<span class="badge badge-soft-info rounded-pill ms-2"></span></h6>
                  <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup="{&quot;endValue&quot;:23.434,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">{{ $categories }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="{{ route('liste_categorie') }}"><i class="far fa-eye"></i> Voir liste</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url({{ asset('admin/assets/img/corner-3.png');}})">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative">
                  <h6>Nos sous Catégories<span class="badge badge-soft-success rounded-pill ms-2">9.54%</span></h6>
                  <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup="{&quot;endValue&quot;:43594,&quot;prefix&quot;:&quot;$&quot;}">{{ $sous_categories }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="{{ route('liste_sous_categorie') }}"><i class="far fa-eye"></i> Voir liste</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="card overflow-hidden" style="min-width: 12rem">
                  <div class="bg-holder bg-card" style="background-image:url({{ asset('admin/assets/img/corner-3.png');}})">
                  </div>
                  <!--/.bg-holder-->
  
                  <div class="card-body position-relative">
                    <h6>Nos formules<span class="badge badge-soft-success rounded-pill ms-2"></span></h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup="{&quot;endValue&quot;:43594,&quot;prefix&quot;:&quot;$&quot;}">{{ $formules }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="{{ route('liste_formule') }}"><i class="far fa-eye"></i> Voir liste</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="card overflow-hidden" style="min-width: 12rem">
                  <div class="bg-holder bg-card" style="background-image:url({{ asset('admin/assets/img/corner-1.png');}})">
                  </div>
                  <!--/.bg-holder-->
  
                  <div class="card-body position-relative">
                    <h6>Notre team<span class="badge badge-soft-info rounded-pill ms-2"></span></h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup="{&quot;endValue&quot;:23.434,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">{{ $teams }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="{{ route('liste_team') }}"><i class="far fa-eye"></i> Voir liste</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="card overflow-hidden" style="min-width: 12rem">
                  <div class="bg-holder bg-card" style="background-image:url({{ asset('admin/assets/img/corner-2.png');}})">
                  </div>
                  <!--/.bg-holder-->
  
                  <div class="card-body position-relative">
                    <h6>Notre Galerie<span class="badge badge-soft-info rounded-pill ms-2"></span></h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup="{&quot;endValue&quot;:23.434,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">{{ $galeries }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="{{ route('liste_galerie') }}"><i class="far fa-eye"></i> Voir liste</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="card overflow-hidden" style="min-width: 12rem">
                  <div class="bg-holder bg-card" style="background-image:url({{ asset('admin/assets/img/corner-3.png');}})">
                  </div>
                  <!--/.bg-holder-->

                  <div class="card-body position-relative">
                    <h6>Nos Départements<span class="badge badge-soft-info rounded-pill ms-2"></span></h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup="{&quot;endValue&quot;:23.434,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">{{ $departements }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="{{ route('ajout_departement') }}"><i class="far fa-eye"></i> Voir liste</a>
                  </div>
                </div>
              </div>
          </div>
    </div>
@endsection