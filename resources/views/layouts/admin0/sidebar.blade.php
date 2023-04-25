<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
    var navbarStyle = localStorage.getItem("navbarStyle");
    if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
    }
    </script>

    <!-- logo -->
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">

            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>

        </div><a class="navbar-brand" href="{{route('home')}}">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="{{asset('admin/assets/img/icons/spot-illustrations/falcon.png')}}" alt="" width="40" /><span
                    class="font-sans-serif">falcon</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <!--sidebar  -->
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                </a>
                <!-- parent pages--><a class="nav-link" href="{{route('admin0')}}" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-code-branch"></span></span><span
                            class="nav-link-text ps-1">Dashboard</span>
                    </div>
                </a>
                <!-- label-->
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Modules
                    </div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                </div>

                <!-- Creation de Catégorie -->
                <a class="nav-link dropdown-indicator" href="#components" role="button" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-puzzle-piece"></span>
                        </span>
                        <span class="nav-link-text ps-1">Catégories</span>
                    </div>
                </a>
                <ul class="nav collapse" id="components">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ajout_categorie')}}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Créer une Catégorie</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('liste_categorie')}}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Voir les
                                    Catégorie</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('supprime_categorie')}}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Catégories
                                    Supprimées</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                </ul>
                <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider" />
                </div>

                <!-- Creation de Sous Catégorie-->
                <a class="nav-link dropdown-indicator" href="#sous_categorie" role="button" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-puzzle-piece"></span></span><span class="nav-link-text ps-1">Sous
                            Catégorie</span>
                    </div>
                </a>
                <ul class="nav collapse" id="sous_categorie">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ajout_sous_categorie')}}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Créer une Sous Catégorie</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('liste_sous_categorie')}}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Voir les
                                    Sous Catégorie</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('supprime_sous_categorie')}}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sous Catégorie
                                    Supprimées</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                </ul>
                <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider" />
                </div>
                <!-- Creation d'article -->
                <a class="nav-link dropdown-indicator" href="#article" role="button" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-puzzle-piece"></span></span><span
                            class="nav-link-text ps-1">Actualité</span>
                    </div>
                </a>
                <ul class="nav collapse" id="article">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ajout_article')}}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Créer un article</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('liste_article')}}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Voir les
                                    articles</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('supprime_article')}}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Articles
                                    Supprimées</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                </ul>
                <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider" />
                </div>
                <!-- Ajout de formules  -->
                <a class="nav-link dropdown-indicator" href="#formule" role="button" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-puzzle-piece"></span></span><span
                            class="nav-link-text ps-1">Formules</span>
                    </div>
                </a>
                <ul class="nav collapse" id="formule">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ajout_formule')}}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Ajouter une Formule</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('liste_formule')}}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Voir les
                                    Formules</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('supprime_formule')}}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Formules
                                    Supprimées</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                </ul>
                <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider" />
                </div>
                <!-- Les commentaires  -->
                <a class="nav-link dropdown-indicator" href="#commentaire" role="button" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-puzzle-piece"></span></span><span
                            class="nav-link-text ps-1">commentaires</span>
                    </div>
                </a>
                <ul class="nav collapse" id="commentaire">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('brouillon_commentaire')}}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Attente d'Approbation</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('approuve_commentaire')}}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Commentaires
                                    Approuvés</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                </ul>
                <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider" />
                </div>
                <!-- Les Devis  -->
                <a class="nav-link dropdown-indicator" href="#devis" role="button" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                            class="fas fa-puzzle-piece"></span></span><span class="nav-link-text ps-1">Devis</span>
                    </div>
                </a>
                <ul class="nav collapse" id="devis">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('approuve_devis')}}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Attente d'Approbation</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('approuve_devis')}}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Devis
                                    Approuvés</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                </ul>
                <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider" />
                </div>
                <!-- Notre Galeries  -->
                <a class="nav-link dropdown-indicator" href="#galeries" role="button" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-puzzle-piece"></span></span><span
                            class="nav-link-text ps-1">Galeries</span>
                    </div>
                </a>
                <ul class="nav collapse" id="galeries">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ajout_galerie')}}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Ajouter une images</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('liste_galerie')}}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Voir mes images
                                </span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                </ul>
                <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider" />
                </div>
                <!-- Notre team  -->
                <a class="nav-link dropdown-indicator" href="#team" role="button" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-puzzle-piece"></span></span><span class="nav-link-text ps-1">Notre
                            Team</span>
                    </div>
                </a>
                <ul class="nav collapse" id="team">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ajout_team')}}">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Ajouter un membre</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('liste_team')}}">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Voir les
                                    membres</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                </ul>
                <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider" />
                </div>
                <!-- Setting -->
                <!-- parent pages--><a class="nav-link" href="{{route('setting')}}" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-code-branch"></span></span><span class="nav-link-text ps-1">Setting</span>
                    </div>
                </a>
                </li>
            </ul>
            <div class="settings mb-3">
                <div class="card shadow-none">
                    <div class="card-body alert mb-0" role="alert">
                        <div class="btn-close-falcon-container">
                            <button class="btn btn-link btn-close-falcon p-0" aria-label="Close"
                                data-bs-dismiss="alert"></button>
                        </div>
                        <div class="text-center"><img src="{{asset('admin/assets/css/user.min.css')}}assets/img/icons/spot-illustrations/navbar-vertical.png"
                                alt="" width="80" />
                            <p class="fs--2 mt-2">Loving what you see? <br />Get your copy of <a href="#!">Falcon</a>
                            </p>
                            <div class="d-grid"><a class="btn btn-sm btn-purchase"
                                    href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"
                                    target="_blank">Purchase</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="content">