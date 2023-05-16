@extends('layouts/admin_master')
@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h4 class="mb-0" data-anchor="data-anchor">sous categorie</h4>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-160a4566-7e94-45a2-bf04-b36ef49d954f"
                    id="dom-160a4566-7e94-45a2-bf04-b36ef49d954f">
                    <form action="{{ route('update_sous_categorie', ['id' => $souscategorie->id]) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-gender">Catégorie</label>
                            <select name="id_categorie" class="form-select" id="basic-form-gender" aria-label="Default select example">
                                @foreach ($categories as $categorie )
                                    <option value="{{ $categorie->id }}" @if($categorie->id == $souscategorie->id_categorie ) selected @endif >{{ $categorie->nom_categorie }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Nom</label>
                            <input name="nom_souscategorie" class="form-control" id="basic-form-name" type="text" value="{{ $souscategorie->nom_souscategorie }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-textarea">Description</label>
                            <textarea name="description_souscategorie" class="form-control" id="basic-form-textarea" rows="3" placeholder="Description">{{ $souscategorie->description_souscategorie }}</textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection