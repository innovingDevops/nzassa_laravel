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
                    <form action="{{ route('update_fonctionnalite_formule',['id' => $fonctionnalite_formule->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-gender">Nom Formule</label>
                            <select name="id_formule" class="form-select" id="basic-form-gender" aria-label="Default select example"> 
                                <option selected="selected">Choississez la formule</option>
                                @foreach ($formules as $formule )
                                    <option value="{{ $formule->id }}" @if($formule->id == $fonctionnalite_formule->id_formule ) selected @endif  >{{ $formule->nom_formule }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Libelle Fonctionnalite</label>
                            <input name="libelle_fonctionnalite" class="form-control" id="basic-form-name" type="text" value="{{ $fonctionnalite_formule->libelle_fonctionnalite }}"  />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Image Fonctionnalite</label><br>
                            <img width="150px" class="img-fluid rounded" src="{{ asset('storage/'.$fonctionnalite_formule->image_fonctionnalite) }}" alt="">
                            <input name="image_fonctionnalite" class="form-control" id="basic-form-name" type="file" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Ordre Fonctionnalite</label>
                            <input name="ordre_fonctionnalite" class="form-control" id="basic-form-name" type="number" value="{{ $fonctionnalite_formule->ordre_fonctionnalite }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-textarea">Description Fonctionnalité</label>
                            <textarea name="description_fonctionnalite" class="form-control" id="basic-form-textarea" rows="3"
                                placeholder="Description">{{ $fonctionnalite_formule->description_fonctionnalite }}</textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection