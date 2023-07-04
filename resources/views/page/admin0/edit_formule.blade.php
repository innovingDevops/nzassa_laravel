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
                    <h5 class="mb-0" data-anchor="data-anchor">Formule N'Zassa</h5>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-160a4566-7e94-45a2-bf04-b36ef49d954f"
                    id="dom-160a4566-7e94-45a2-bf04-b36ef49d954f">
                    <form action="{{ route('update_formule', ['id' => $formule->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Priorité de la formule</label>
                            <input name="priority" class="form-control" type="number" value="{{ $formule->priority }}"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Logo de la Formule</label><br>
                            <img width="100px" class="img-fluid rounded" src="{{ asset('storage/'.$formule->logo_formule) }}" alt="">
                            <input name="logo_formule" class="form-control" type="file" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Nom</label>
                            <input name="nom_formule" class="form-control" id="basic-form-name" type="text" value="{{ $formule->nom_formule }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Titre</label>
                            <input name="titre_formule" class="form-control" id="basic-form-name" type="text" value="{{ $formule->titre_formule }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image bannière</label><br>
                            <img width="200px" class="img-fluid rounded" src="{{ asset('storage/'.$formule->image_formule) }}" alt="">
                            <input name="image_formule" class="form-control" type="file" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-textarea">Description</label><br>
                            <script></script>
                            <textarea name="description_formule" class="form-control" id="basic-form-textarea" rows="3"
                                placeholder="Description">{{ $formule->description_formule }}</textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection