<div class="container">
    <div class="post-tabs rounded bordered">
        <!-- tab navs -->
        <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
            {{-- <li class="nav-item" role="presentation"><button aria-controls="popular" aria-selected="true" class="nav-link active" 
                data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">Popular</button></li>

            <li class="nav-item" role="presentation"><button aria-controls="recent" aria-selected="false" class="nav-link" 
                data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">Recent</button></li> --}}

            @foreach($departements as $departement )
            @php
            $num_dep = $loop->iteration;
            if ($num_dep == 1) {

                $class = "nav-link active";
            }else{
                $class = "nav-link";
            }
            
        @endphp 
            <li class="nav-item" role="presentation">
                <button aria-controls="{{ $departement->libelle_departement }}" aria-selected="true" class="{{ $class }}"
                    data-bs-target="#{{ $departement->libelle_departement }}" data-bs-toggle="tab" id="{{ $departement->libelle_departement }}-tab" role="tab" type="button">
                    {{ $departement->libelle_departement }}
                </button>
            </li>
            @endforeach
        </ul>
        @foreach($departements as $departement )
            @php
                $num_dep = $loop->iteration;
                if ($num_dep == 1) {

                    $class = "tab-pane fade show active d-flex justify-content-between";
                }else{
                    $class = "tab-pane fade d-flex justify-content-between";
                }       
            @endphp 
                    <div aria-labelledby="{{ $departement->libelle_departement }}-tab" class="{{ $class }}"
                        id="{{ $departement->libelle_departement }}" role="tabpanel">
                        <!-- post -->
                        @foreach(getMemberByDep($departement->id) as $team)
                        <div class="post post-list-sm">
                            <div class="thumb circle">
                                <a href="blog-single.html">
                                    <div class="inner">
                                        <img width="150px" src="{{ asset('storage/'.$team->image) }}" alt="post-title">
                                    </div>
                                    <h5 class="card-title">{{ $team->nom }}</h5>
                                  <p class="card-text">{{ $team->fonction }}</p>
                                </a>
                            </div>
                        </div>                        
                        @endforeach
                    </div>
        @endforeach
    </div>
</div>