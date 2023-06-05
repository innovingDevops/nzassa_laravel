@extends('layouts/admin_master')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h2 class="mb-0" data-anchor="data-anchor">La liste des formules N'Zassa</h2>
                </div>
                <div class="col-8 col-sm-auto text-end ps-2"> 
                    <div id="table-customers-replace-element" class="">
                        <a href="{{ route('ajout_formule') }}" class="btn btn btn-success btn-sm" type="button">
                            <svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;">
                                <g transform="translate(224 256)">
                                    <g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                                        <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" transform="translate(-224 -256)">
                                        </path>
                                    </g>
                                </g>
                            </svg><!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com -->
                            <span class="d-none d-sm-inline-block ms-1">Ajouter</span>
                        </a>
                    </div>
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
                                        <th class="sort" data-sort="age">Formule</th>
                                        <th class="sort" data-sort="name">Titre</th>
                                        <th class="sort" data-sort="email">Image Formule</th>
                                        <th class="sort" data-sort="age">Description</th>
                                        <th class="sort" data-sort="age">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($formules as $formule)
                                    <tr>
                                        <td class="name">{{ $formule->id }}</td>
                                        <td class="name">
                                            <img  class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('storage/'.$formule->logo_formule) }}" alt="" width="100"></a>
                                            <p >{{ $formule->nom_formule }}</p>
                                        </td>
                                        <td class="name">{{ $formule->titre_formule }}</td>
                                        <td class="name">
                                            <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('storage/'.$formule->image_formule) }}" alt="" width="100"></a>     
                                        </td>
                                        <td class="name">{{ strip_tags($formule->description_formule) }}</td>
                                        <td class="age">
                                            <!-- Button trigger modal -->
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
                                                                <a href="{{ route('supprime_formule',['id' => $formule->id]) }}" class="btn btn-primary" type="button">
                                                                    Oui
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <a href="{{ route('edit_formule',['id' => $formule->id]) }}" class="btn btn-falcon-primary" type="button">
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
    @endsection
   