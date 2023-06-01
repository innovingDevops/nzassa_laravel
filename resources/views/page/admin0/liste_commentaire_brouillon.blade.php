@extends('layouts/admin_master')
@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h2 class="mb-0" data-anchor="data-anchor">La liste des commentaires au brouillons</h2>
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
                                        <th class="sort" data-sort="age">ID</th>
                                        <th class="sort" data-sort="email">Commentaire</th>
                                        <th class="sort" data-sort="age">Nom</th>
                                        <th class="sort" data-sort="email">Email</th>
                                        <th class="sort" data-sort="age">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($comments as $comment)
                                    <tr>
                                        <td class="name">{{ $comment->id }}</td>
                                        <td class="name">{{ $comment->commentaire }}</td>
                                        <td class="name">{{ $comment->nom }}</td>
                                        <td class="name">{{ $comment->email }}</td>
                                        <td class="age">
                                            <a href="{{ route('supprime_commentaire',['id' => $comment->id]) }}" title="Supprimer" class="btn btn-falcon-primary" type="button">
                                                <span class="fs-2 text-danger fas fa-trash" data-fa-transform="shrink-3"></span>
                                            </a>
                                            <a href="{{ route('approuver_commentaire',['id' => $comment->id]) }}" class="btn btn-falcon-primary" title="Approuver" type="button">
                                                <span class="fs-2 text-success fas fa-check-square" data-fa-transform="shrink-3"></span>
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