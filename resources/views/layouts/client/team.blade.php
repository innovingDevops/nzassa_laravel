{{-- <div class="container">
    <div class="post-tabs rounded bordered">
        <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
            @foreach ($departements as $key => $departement)
                <li class="dep nav-item" role="presentation">
                    <button id="{{ $departement->libelle_departement }}-btn" class="nav-link {{ $key == 0 ? 'active' : '' }}" data-bs-toggle="pill" data-bs-target="#{{ $departement->libelle_departement }}" type="button" role="tab" aria-controls="{{ $departement->libelle_departement }}" aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $departement->libelle_departement }}</button>
                </li>
            @endforeach
        </ul>
        <div class="toto tab-content" id="pills-tabContent">
                @foreach ($departements as $key => $departement)
                    <div class="flex-wrap tab-pane fade  {{ $key == 0 ? 'show active' : '' }}" id="{{ $departement->libelle_departement }}" role="tabpanel" aria-labelledby="{{ $departement->libelle_departement }}-tab" tabindex="0">
                        @foreach(getMemberByDep($departement->id) as $team)
                                <div  class="card overflow-hidden rounded col-3 " >
                                    <div class="card-img-top">
                                        <img class="img-fluid" src="{{ asset('storage/'.$team->image) }}" alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                      <h5 class="card-title">{{ $team->nom }}</h5>
                                      <p class="card-text">{{ $team->fonction }}</p>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                @endforeach
        </div>
    </div>
</div> --}}



<div class="container padding-30 rounded bordered">
  <ul class=" justify-content-center nav nav-pills mb-3" id="pills-tab" role="tablist">
    <!-- Générer les onglets en fonction des départements -->
    @foreach ($departements as $key => $departement)
      <li class="nav-item" role="presentation">
        <button class="nav-link {{ $key == 0 ? 'active' : '' }}" id="{{ str_replace(' ','_',strtolower($departement->libelle_departement)) }}-tab" data-bs-toggle="pill" data-bs-target="#{{ str_replace(' ','_',strtolower($departement->libelle_departement)) }}" type="button" role="tab" aria-controls="{{ str_replace(' ','_',strtolower($departement->libelle_departement)) }}" aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $departement->libelle_departement }}</button>
      </li>
    @endforeach
  </ul>
  <div class="tab-content" id="pills-tabContent">
    @foreach ($departements as $key => $departement)
      <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="{{ str_replace(' ','_',strtolower($departement->libelle_departement)) }}" role="tabpanel" aria-labelledby="{{ str_replace(' ','_',strtolower($departement->libelle_departement)) }}-tab">
        <div class="d-flex flex-wrap justify-content-center">
         
          @foreach(getMemberByDep($departement->id) as $team)
              <div class="card mt-3 m-3" >
                <div class="card-body bg-light px-1 py-0" >
                  <div class="row g-0 text-center fs--1" >
                    <div class="col-12 col-md-12 col-lg-12 col-xxl-12 mb-1" >
                      <div class=" bg-white dark__bg-1100 p-0 h-100" style="background-image:url('{{ asset('admin/assets/img/corner-2.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"><img class=" img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('storage/'.$team->image) }}" alt="" width="200">
                        <h6 class="mb-1" >{{ $team->nom }}</h6>
                        <p class="fs--2 mb-1" ><a class="text-700" href="#!">{{ $team->fonction }}</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>
</div>


{{-- <img width="100px" class="img-fluid" src="{{ asset('storage/'.$team->image) }}" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">{{ $team->nom }}</h5>
                <p class="card-text">{{ $team->fonction }}</p>
              </div> --}}