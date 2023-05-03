@extends('layouts/admin_master')
@section('content')

    <h1>liste sous categorie</h1>
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
                                        <th class="sort" data-sort="email">categorie</th>
                                        <th class="sort" data-sort="age">sous_categorie</th>
                                        <th class="sort" data-sort="age">Description</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($sous_categories as $sous_categorie)
                                    <tr>
                                        <td class="name">{{ $sous_categorie->id }}</td>
                                        <td class="email">{{ $sous_categorie->categorie_id }}</td>
                                        <td class="age">{{ $sous_categorie->nom_souscategorie }}</td>
                                        <td class="age">{{ $sous_categorie->description_souscategorie }}</td>
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
    