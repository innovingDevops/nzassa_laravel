    <!-- footer -->
    <footer>
        <div class="container-xl">
            <div class="footer-inner">
                <div class="row d-flex align-items-center gy-4">
                    <!-- copyright text -->
                    <div class="col-md-4">
                        <span class="copyright">©Copyright 2023 - Innoving. All rights reserved.</span>
                    </div>

                    <!-- social icons -->
                    <div class="col-md-4 text-center">
                        <ul class="social-icons list-unstyled list-inline mb-0">        
                           
                            <li class="list-inline-item"><a href="{{ getSetting('facebook') }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="{{ getSetting('twitter') }}"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="{{ getSetting('instagram') }}"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="{{ getSetting('youtube') }}"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- go to top button -->
                    <div class="col-md-4">
                        <a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div><!-- end site wrapper -->

    <!-- search popup area -->
    <div class="search-popup">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>
        <!-- content -->
        <div class="search-content">
            <div class="text-center">
                <h3 class="mb-4 mt-0">Press ESC to close</h3>
            </div>
            <!-- form -->
            <form class="d-flex search-form">
                <input class="form-control me-2" type="search" placeholder="Search and press enter ..."
                    aria-label="Search">
                <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
            </form>
        </div>
    </div>
    <!-- canvas menu -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>

        <!-- logo -->
        <div class="logo">
            <img width="125px" src="{{ asset('client/images/logo.png') }}" alt="Katen" />
        </div>
        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li class="active">
                    <a href="#">N'ZASSA</a>
                    <ul class="submenu">
                        @foreach ($formules as $formule)
                            <li><a href="{{route('home')}}#{{ $formule->nom_formule }}">{{ $formule->nom_formule }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{route('home')}}#team">Team</a></li>
                <li><a href="{{route('home')}}#galerie">Galerie</a></li>
                <li><a href="{{route('actualite')}}">Actualité</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>

        <!-- social icons -->
        <ul class="social-icons list-unstyled list-inline mb-0">                         
            <li class="list-inline-item"><a href="{{ getSetting('facebook') }}"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="{{ getSetting('twitter') }}"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="{{ getSetting('instagram') }}"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="{{ getSetting('youtube') }}"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('client/js/jquery.min.js') }}"></script>
    <script src="{{ asset('client/js/popper.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/js/slick.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('client/js/custom.js') }}"></script>
    <script src="{{ asset('admin/vendors/typed.js/typed.js') }}"></script>
    
    <script>
        var typed = new Typed('.element', {
      strings: ["NZassa School.", "NZassa RH&PAIE.", "NZassa Auto+.", "NZassa GESCOM.", "NZassa ByNight.", "NZassa Shop."],
      typeSpeed: 100,
      loop : true,
    });
    </script>
    </body>
    </html>