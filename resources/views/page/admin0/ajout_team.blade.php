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
                    <h4 class="mb-0" data-anchor="data-anchor">Team</h4>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-160a4566-7e94-45a2-bf04-b36ef49d954f"
                    id="dom-160a4566-7e94-45a2-bf04-b36ef49d954f">
                    <form action="{{ route('save_team') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input name="image" class="form-control" type="file" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Nom </label>
                            <input name="nom" class="form-control" id="basic-form-name" type="text" placeholder="Name" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Fonction</label>
                            <input name="fonction" class="form-control" id="basic-form-name" type="text" placeholder="Name" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-gender">Departement</label>
                            <select name="id_departement" class="form-select" id="basic-form-gender" aria-label="Default select example"> 
                                <option selected="selected">Choississez le departement</option>
                                @foreach ($departements as $departement)
                                <option value="{{ $departement->id }}">{{ $departement->libelle_departement }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
    