@extends('layouts/admin_master')
@section('content')

    
    <div class="card mb-3">
       
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h3 class="mb-0" data-anchor="data-anchor">Liste des Articles</h3>
	<h3 class="fw-light overflow-hidden"> Nos produits N'Zassa sont :  <span class="typed-text fw-bold ms-1" data-typed-text='["NZassa School.","NZassa RH&PAIE.","NZassa Auto+.","NZassa GESCOM."]'></span></h3>

                </div>
            </div>
        </div>
       
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-160a4566-7e94-45a2-bf04-b36ef49d954f"
                    id="dom-160a4566-7e94-45a2-bf04-b36ef49d954f">
                    <form action="{{ route('save_article') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Titre de l'article</label>
                            <input name="titre_article" class="form-control" id="basic-form-name" type="text" placeholder="Name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Courte description</label>
                            <input name="courte_description" class="form-control" id="basic-form-name" type="text" placeholder="Name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-gender">Catégorie</label>
                            <select name="categorie" class="form-select" id="basic-form-gender" aria-label="Default select example">
                                <option selected="selected">Select your gender</option>
                                @foreach ( $categories as $categorie )
                                <option value="{{ $categorie->nom_categorie }}">{{ $categorie->nom_categorie }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-gender">Sous Catégorie</label>
                            <select name="sous_categorie" class="form-select" id="basic-form-gender" aria-label="Default select example">
                                <option selected="selected">Select your gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-textarea">Details de l'article</label>
                            <textarea name="detail_article" class="tinymce d-none" id="basic-form-textarea" rows="3"
                                placeholder="Description"></textarea>
                                
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images de l'article </label>
                            <input name="image_article" class="form-control" type="file" />
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection