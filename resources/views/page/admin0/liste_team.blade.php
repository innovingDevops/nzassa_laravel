@extends('layouts/admin_master')
@section('content')

    <h1>liste team</h1>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor">Pagination with numbering</h5>
                </div>
                <div class="col-8 col-sm-auto text-end ps-2"> 
                    <div id="table-customers-replace-element" class="">
                        <a href="{{ route('ajout_team') }}" class="btn btn btn-success btn-sm" type="button">
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
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-cfcec397-a35c-4994-a54a-50bf30775d88"id="dom-cfcec397-a35c-4994-a54a-50bf30775d88">
                    <div id="tableExample2"
                        data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                        <div class="table-responsive scrollbar">
                            <table class="table table-bordered table-striped fs--1 mb-0">
                                <thead class="bg-200 text-900">
                                    <tr>
                                        <th class="sort" data-sort="name">ID</th>
                                        <th class="sort" data-sort="name">Nom</th>
                                        <th class="sort" data-sort="name">Fonction</th>
                                        <th class="sort" data-sort="name">Departement</th>
                                        <th class="sort" data-sort="name">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($teams as $team)
                                    <tr>
                                        <td class="name">{{ $team->id }}</td>
                                            <td class="name align-middle white-space-nowrap py-2">
                                                <div class="d-flex d-flex align-items-center">
                                                <div class="avatar avatar-xl me-2">
                                                    <img class="rounded-circle" src="{{ asset('storage/'.$team->image) }}" alt="">
                    
                                                </div>
                                                <div class="flex-1">
                                                    <h5 class="mb-0 fs--1">{{ $team->nom }}</h5>
                                                </div>
                                                </div>
                                            </td>
                                        <td class="name">{{ $team->fonction }}</td>
                                        <td class="name">{{ getDepartement($team->id_departement)->libelle_departement }}</td>
                                        <td class="age">
                                            <a href="{{ route('supprime_team',['id' => $team->id]) }}" class="btn btn-falcon-primary" type="button">
                                                <span class="fs-2 text-danger fas fa-trash" data-fa-transform="shrink-3"></span>
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