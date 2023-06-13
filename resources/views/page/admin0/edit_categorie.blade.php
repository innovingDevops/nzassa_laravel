@extends('layouts/admin_master')
@section('content')
@if(session('warning'))
    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            {{ session('warning') }}
        </div>
      </div>
@endif
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h4 class="mb-0" data-anchor="data-anchor">Catégorie</h4>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-160a4566-7e94-45a2-bf04-b36ef49d954f"
                    id="dom-160a4566-7e94-45a2-bf04-b36ef49d954f">
                    <form action="{{ route('update_categorie',['id' => $categorie->id] ) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Créer une Catégorie</label>
                            <input name="nom_categorie" class="form-control"  id="basic-form-name" type="text" value="{{ $categorie->nom_categorie }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-textarea">Description</label>
                            <textarea name="description_categorie" class="form-control" id="basic-form-textarea" rows="3" placeholder="Description">{{ $categorie->description_categorie }}</textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection