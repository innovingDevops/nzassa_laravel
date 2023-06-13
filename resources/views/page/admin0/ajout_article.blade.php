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
                    <h3 class="mb-0" data-anchor="data-anchor">Articles</h3>
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
                            <input name="titre_article" class="form-control" id="basic-form-name" type="text" placeholder="Name" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Courte description</label>
                            <input name="courte_description" class="form-control" id="basic-form-name" type="text" placeholder="Name" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-gender">Catégorie</label>
                            <select name="id_categorie" class="form-select" id="id_categorie" aria-label="Default select example" onchange="toggleSousCategorie()" required>
                                @foreach ( $categories as $categorie )
                                    <option value="{{ $categorie->id }}">{{ $categorie->nom_categorie }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-gender">Sous Catégorie</label>
                            <select name="id_sous_categorie" class="form-select" id="id_sous_categorie" aria-label="Default select example" disabled required>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-textarea">Details de l'article</label>
                            <textarea name="detail_article" class="tinymce d-none" id="basic-form-textarea" rows="3"
                                placeholder="Description" required></textarea> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images de l'article </label>
                            <input name="image_article" class="form-control" type="file" required/>
                        </div>
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("custom_script")
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

<script>
    function toggleSousCategorie() {
    var selectCategorie = document.getElementById("id_categorie");
    var selectSousCategorie = document.getElementById("id_sous_categorie");
    if (selectCategorie.value !== "Choisissez la catégorie") {
        selectSousCategorie.disabled = false;
    } else {
        selectSousCategorie.disabled = true;
    }
}

// Appelez la fonction toggleSousCategorie() une fois au chargement de la page
toggleSousCategorie();

    // c'est du code en jquery
    
    $(document).ready(function() {
    var categorie = $('#id_categorie');
    var sous_cat = $('#id_sous_categorie');
    
    // Exécutez la requête AJAX lorsque la page se charge et une catégorie est déjà sélectionnée
    if (categorie.val() !== "Choisissez la catégorie") {
        var newValue = categorie.val();
        $.ajax({
            url: 'sous_cat',
            method: 'GET',
            data: {
                id_categorie: newValue,
            },
            dataType: 'html',
            success: function(response) {
                sous_cat.html(response);
                // Code à exécuter en cas de succès de la requête
            },
            error: function(xhr, status, error) {
                // Code à exécuter en cas d'erreur de la requête
                console.log('Erreur AJAX : ' + error);
            }
        });
    }
    
    // Ajoutez la gestion de l'événement change pour les catégories
    categorie.change(function() {
        var newValue = $(this).val();
        $.ajax({
            url: 'sous_cat',
            method: 'GET',
            data: {
                id_categorie: newValue,
            },
            dataType: 'html',
            success: function(response) {
                sous_cat.html(response);
                // Code à exécuter en cas de succès de la requête
            },
            error: function(xhr, status, error) {
                // Code à exécuter en cas d'erreur de la requête
                console.log('Erreur AJAX : ' + error);
            }
        });
    });
});


   // Déclencher manuellement l'événement change
//    $('#myInput').change();


    </script>

@endsection
