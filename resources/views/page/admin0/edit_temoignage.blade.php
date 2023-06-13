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
                    <h4 class="mb-0" data-anchor="data-anchor">Témoignage</h4>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-160a4566-7e94-45a2-bf04-b36ef49d954f"
                    id="dom-160a4566-7e94-45a2-bf04-b36ef49d954f">
                    <form action="{{ route('update_temoignage', ['id' => $temoignage->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Image</label><br>
                            <img width="150px" class="img-fluid rounded" src="{{ asset('storage/'.$temoignage->image_temoignage) }}" alt="">
                            <input name="image_temoignage" class="form-control" type="file"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Nom</label>
                            <input name="nom_temoignage" class="form-control" id="basic-form-name" type="text" placeholder="Name" value="{{ $temoignage->nom_temoignage }}"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Profession</label>
                            <input name="profession_temoignage" class="form-control" id="basic-form-name" type="text" placeholder="Name" value="{{ $temoignage->profession_temoignage }}"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-textarea">Description</label>
                            <textarea name="detail_temoignage" class="form-control" id="basic-form-textarea" rows="3"
                                placeholder="Description">{{ $temoignage->detail_temoignage }}</textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
    