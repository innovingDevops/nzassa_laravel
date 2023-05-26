@extends('layouts/admin_master')
@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h4 class="mb-0" data-anchor="data-anchor">Partenaire</h4>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-160a4566-7e94-45a2-bf04-b36ef49d954f"
                    id="dom-160a4566-7e94-45a2-bf04-b36ef49d954f">
                    <form action="{{ route('update_partenaire', ['id' => $partenaire->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Images de l'article </label><br>
                            <img width="150px" class="img-fluid rounded" src="{{ asset('storage/'.$partenaire->image_partenaire) }}" alt="">
                            <input name="image_partenaire" class="form-control" type="file" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nom </label>
                            <input name="nom_partenaire" class="form-control" type="text" value="{{ $partenaire->nom_partenaire }}"/>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection