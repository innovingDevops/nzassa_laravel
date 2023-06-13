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
                    <h5 class="mb-0" data-anchor="data-anchor">Formule N'Zassa</h5>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-160a4566-7e94-45a2-bf04-b36ef49d954f"
                    id="dom-160a4566-7e94-45a2-bf04-b36ef49d954f">
                    <form action="{{ route('save_formule') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Logo de la Formule</label>
                            <input name="logo_formule" class="form-control" type="file" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Nom</label>
                            <input name="nom_formule" class="form-control" id="basic-form-name" type="text" placeholder="Name" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Titre</label>
                            <input name="titre_formule" class="form-control" id="basic-form-name" type="text" placeholder="Name" required/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image bannière</label>
                            <input name="image_formule" class="form-control" type="file" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-textarea">Description</label>
                            <textarea name="description_formule" class="form-control" id="basic-form-textarea" rows="3"
                                placeholder="Description" required></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection