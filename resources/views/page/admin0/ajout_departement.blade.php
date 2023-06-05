@extends('layouts/admin_master')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
          <div class="row g-0">
            <div class="col-lg-12 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="mb-0">Profile Settings</h5>
                </div>
                <div class="card-body bg-light">
                  <form class="row g-3" action="{{ route('save_departement') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12">
                      <label class="form-label" for="email3">Departement</label>
                      <input name="libelle_departement" class="form-control" id="email3" type="text" required />
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                      <button class="btn btn-primary" type="submit">Valider</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            {{-- <div class="col-lg-4 ps-lg-2">
              <div class="sticky-sidebar">
                
                <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="mb-0">Change Password</h5>
                  </div>
                  <div class="card-body bg-light">
                    <form>
                      <div class="mb-3">
                        <label class="form-label" for="old-password">Old Password</label>
                        <input class="form-control" id="old-password" type="password" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="new-password">New Password</label>
                        <input class="form-control" id="new-password" type="password" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="confirm-password">Confirm Password</label>
                        <input class="form-control" id="confirm-password" type="password" />
                      </div>
                      <button class="btn btn-primary d-block w-100" type="submit">Update Password </button>
                    </form>
                  </div>
                </div>
                
              </div>
            </div> --}}
          </div>
          <div class="card mb-3">
            <div class="card-header">
                <div class="row flex-between-end">
                    <div class="col-auto align-self-center">
                        <h5 class="mb-0" data-anchor="data-anchor">Pagination with numbering</h5>
                    </div>
                </div>
            </div>
          
            <div class="card-body pt-0">
                <div class="tab-content">
                    <div class="tab-pane preview-tab-pane active" role="tabpanel"
                        aria-labelledby="tab-dom-cfcec397-a35c-4994-a54a-50bf30775d88"
                        id="dom-cfcec397-a35c-4994-a54a-50bf30775d88">
                        <div id="tableExample2"
                            data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                            <div class="table-responsive scrollbar">
                                <table class="table table-bordered table-striped fs--1 mb-0">
                                    <thead class="bg-200 text-900">
                                        <tr>
                                            <th class="sort" data-sort="name">ID</th>
                                            <th class="sort" data-sort="email">Departement</th>
                                            <th class="sort" data-sort="email">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                      @foreach ($departements as $departement )
                                      <tr>
                                        <td class="name">{{ $departement->id }}</td>
                                        <td class="email">{{ $departement->libelle_departement }}</td>
                                        <td class="age">
                                          <a type="button" class="btn btn-falcon-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="fs-2 text-danger fas fa-trash" data-fa-transform="shrink-3"></span>
                                          </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content modal-warning">
                                                    {{-- <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div> --}}
                                                    <div class="modal-body">
                                                        La suppression de cet élément entraînera la suppression des éléments créés à partir de lui. <br>
                                                        Êtes-vous sûr de vouloir supprimer cet élément ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                                        <a href="{{ route('supprime_departement', ['id' => $departement->id]) }}" class="btn btn-primary" type="button">
                                                            Oui
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                          <a href="{{ route('edit_departement', ['id' => $departement->id]) }}" class="btn btn-falcon-primary" type="button">
                                            <span class="fs-2 text-success fas fa-edit" data-fa-transform="shrink-3"></span>
                                          </a>
                                        </td>
                                    </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                                    data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                <ul class="pagination mb-0"></ul>
                                <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                                    data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.14.0</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-index-1 light">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                </div>
                <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-name">Name</label>
                    <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-email">Email address</label>
                    <input class="form-control" type="email" autocomplete="on" id="modal-auth-email" />
                  </div>
                  <div class="row gx-2">
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-password">Password</label>
                      <input class="form-control" type="password" autocomplete="on" id="modal-auth-password" />
                    </div>
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
                      <input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" />
                    </div>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                    <label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
                  </div>
                </form>
                <div class="position-relative mt-5">
                  <hr />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        @endsection
                