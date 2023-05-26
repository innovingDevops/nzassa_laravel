<div class="container">
    <div class="post-tabs rounded bordered">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            @foreach ($departements as $key => $departement)
                <li class="nav-item" role="presentation">
                    <button id="{{ $departement->libelle_departement }}-btn" class="nav-link {{ $key == 0 ? 'active' : '' }}" data-bs-toggle="pill" data-bs-target="#{{ $departement->libelle_departement }}" type="button" role="tab" aria-controls="{{ $departement->libelle_departement }}" aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $departement->libelle_departement }}</button>
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="pills-tabContent">
                @foreach ($departements as $key => $departement)
                    <div class="d-flex flex-wrap tab-pane fade  {{ $key == 0 ? 'show active' : '' }}" id="{{ $departement->libelle_departement }}" role="tabpanel" aria-labelledby="{{ $departement->libelle_departement }}-tab" tabindex="0">
                        @foreach(getMemberByDep($departement->id) as $team)
                                <div class="card overflow-hidden rounded col-3" >
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
</div>


{{-- <div class="container">
    <div class="post-tabs rounded bordered">
<div class="content">
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand navbar-glass-shadow">
      
    </nav>
    <div class="card">
      <div class="card-header bg-light">
        <div class="row align-items-center">
          <div class="col">
            <h5 class="mb-0" id="followers">Followers <span class="d-none d-sm-inline-block">(233)</span></h5>
          </div>
          
        </div>
      </div>
      <div class="card-body bg-light px-1 py-0">
        <div class="row g-0 text-center fs--1">
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Emilia Clarke</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Technext limited</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Kit Harington</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Harvard Korea Society</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Sophie Turner</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Graduate Student Council</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Peter Dinklage</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Art Club, MIT</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Nikolaj Coster</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Archery Club, MIT</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Isaac Hempstead</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Asymptones</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Alfie Allen</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Brain Trust</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Iain Glen</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">GSAS Action Coalition</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Liam Cunningham</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Caving Club, MIT</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">John Bradley</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Chess Club</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Rory McCann</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Chamber Music Society</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Joe Dempsie</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Clubchem</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Maisie Williams</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Brain Trust</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Lena Headey</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Clubchem</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Gwendoline Christie</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Technext limited</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Nathalie Emmanuel</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Asymptones</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Natalie Dormer</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Musical Club</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Carice Houten</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Concert Choir</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Hannah Murray</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Career Club</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Rose Leslie</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Musical Club</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Rory McCann</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Alpine Ski Club</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Diana Rigg</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Clubchem</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Michelle Fairley</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Alpha Chi Omega</a></p>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
            <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('client/images/bg1.jpg') }}" alt="" width="100"></a>
              <h6 class="mb-1"><a href="../../pages/user/profile.html">Gemma Whelan</a>
              </h6>
              <p class="fs--2 mb-1"><a class="text-700" href="#!">Chamber Music Society</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div> --}}

{{-- <div class="col-lg-12 ">
    <!-- sidebar -->
    <div class="sidebar">

        <!-- widget categories -->
        <div class="widget rounded">
            <div class="widget-header text-center">
                <h3 class="widget-title">Départements</h3>
                <img src="{{ asset('client/images/wave.svg') }}" class="wave" alt="wave" />
            </div>
            <div class="widget-content">
                <ul class="list">
                    @foreach ( $departements as $departement )
                        <li><a href="{{ route('teambydep', ['id' => $departement->id]) }}">{{ $departement->libelle_departement }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div> --}}