@extends('layouts/admin_master')
@section('content')

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
                    <form action="{{ route('update_team', ['id' => $team->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Image</label><br>
                            <img width="150px" class="img-fluid rounded" src="{{ asset('storage/'.$team->image) }}" alt="">
                            <input name="image" class="form-control" type="file"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Nom </label>
                            <input name="nom" class="form-control" id="basic-form-name" type="text" value="{{ $team->nom }}"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Fonction</label>
                            <input name="fonction" class="form-control" id="basic-form-name" type="text" value="{{ $team->fonction }}"/>
                        </div>
                        <div class="mb-3">
                            <select name="id_departement" class="form-select" id="basic-form-gender" aria-label="Default select example"> 
                                @foreach ($departements as $departement)
                                <option value="{{ $departement->id }}" @if($team->id_departement == $departement->id) selected @endif>{{ $departement->libelle_departement }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
    