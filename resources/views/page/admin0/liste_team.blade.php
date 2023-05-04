@extends('layouts/admin_master')
@section('content')

    <h1>liste team</h1>
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