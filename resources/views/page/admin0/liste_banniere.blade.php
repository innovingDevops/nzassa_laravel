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
                    <h2 class="mb-0" data-anchor="data-anchor">Nos Bannières</h2>
                </div>
                <div class="col-8 col-sm-auto text-end ps-2"> 
                    <div id="table-customers-replace-element" class="">
                        <a href="{{ route('ajout_banniere') }}" class="btn btn btn-success btn-sm" type="button">
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
                                        <th class="sort" data-sort="email">Mes bannières</th>
                                        <th class="sort" data-sort="email">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($bannieres as $banniere)
                                    <tr>
                                        <td class="name">{{ $banniere->id }}</td>
                                        <td class="name"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="{{ asset('storage/'.$banniere->image_banniere) }}" alt="" width="100"></td>
                                        <td class="age">
                                            <a href="{{ route('supprime_banniere',['id' => $banniere->id]) }}" class="btn btn-falcon-primary" type="button">
                                                <span class="fs-2 text-danger fas fa-trash" data-fa-transform="shrink-3"></span>
                                            </a>
                                            <a href="{{ route('edit_banniere',['id' => $banniere->id]) }}" class="btn btn-falcon-primary" type="button">
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