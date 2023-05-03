@extends('layouts/admin_master')
@section('content')

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
                    <form action="{{ route('save_fonctionnalite') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-gender">Nom Formule</label>
                            <select name="id_formule" class="form-select" id="basic-form-gender" aria-label="Default select example"> 
                                <option selected="selected">Choississez la formule</option>
                                @foreach ($formules as $formule )
                                <option value="{{ $formule->id }}">{{ $formule->nom_formule }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Libelle Fonctionnalite</label>
                            <input name="libelle_fonctionnalite" class="form-control" id="basic-form-name" type="text"  />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Image Fonctionnalite</label>
                            <input name="image_fonctionnalite" class="form-control" id="basic-form-name" type="file"  />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Ordre Fonctionnalite</label>
                            <input name="ordre_fonctionnalite" class="form-control" id="basic-form-name" type="number"  />
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection