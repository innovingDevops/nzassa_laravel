@extends('layouts/client_master')
@section('content')
<section class="hero data-bg-image d-flex align-items-center" data-bg-image="{{ asset('client/images/nzassa.jpg') }}" style="background-image: url('{{ asset('client/images/nzassa.jpg') }}');">
  
  <!-- animated mouse wheel -->
  <span class="mouse">
      <span class="wheel"></span>
  </span>
  <!-- wave svg -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 260"><path fill="#FFF" fill-opacity="1" d="M0,256L60,245.3C120,235,240,213,360,218.7C480,224,600,256,720,245.3C840,235,960,181,1080,176C1200,171,1320,213,1380,234.7L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>

  <div class="container" style="z-index: 1">
    <div class="cta text-center">
      <h2 class="mt-0 mb-4" style="text-shadow: 2px 2px 4px #ff3100;">Je suis Innoving.</h2>
      <p class="mt-0 mb-4 fs-5">Plongez dans l'histoire captivante de notre entreprise et découvrez comment notre mission, nos valeurs et notre vision ont façonné notre parcours exceptionnel.</p>
  </div>
  <div class="accordion accordion-flush" id="accordionFlushExample" style="border-radius: 5px">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
          Mot du CEO
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample" style="">
        <div class="accordion-body text-center">
          <img width="100px" class="img-center lazyloaded rounded-circle" src="{{ asset('client/images/boss.jpeg') }}" alt="testimonial-img"><br>
          <p>“ Nous vous écoutons, nous vous conseillons et nous concevons
            avec vous l’ensemble de vos projets innovants. Ce que nous recherchons
            c’est votre satisfaction afin de  maintenir avec vous des relations continues.
            Votre succès est notre leitmotiv et le plus important pour nous, 
            <br>c’est la qualité de votre expérience client avec nous. ”
          </p>
          <p style="color: #ff3100"><b>Alex DEGNY</b></p> 
            <p><b>Ceo Founder Innoving.</b></p>
        </div>
      </div>
    </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Nous connaître
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body text-left">
            <h3 style="color: #ff3100; text-shadow : 1px 1px 1px black">Développer votre Business</h3>
            <p>
              Nous sommes une entreprise qui édite des logiciels de gestion pour
              les PME et les TPE adaptés à l’environnement des affaires en Afrique.
              Fort de cette expertise, nous proposons toutes l’architecture et les 
              technologies indispensables à la transformation digitale de bout en bout d’une entreprise.
              Et nous accompagnons la conduite du changement grâce à notre agilité
              et à notre réactivité. Faire des PME et TPE africaines les leaders
              de demain dans un monde en perpétuel changement est l’expérience
              unique que nous voulons vous faire vivre.
            </p>
            <p><b> Ensemble révolutionnons le Business en Afrique.</b></p> 
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Notre Mission
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body text-left">
            <h3 style="color: #ff3100; text-shadow : 1px 1px 1px black">Le Rôle Et La Mission De Innoving pour améliorer votre Business</h3>
            <p>
              Parce que l’efficacité de votre informatique d’aujourd’hui
              détermine votre entreprise de demain,<strong>Innoving</strong>  s’est donnée 
              comme mission de ne pas être qu’un simple intégrateur et 
              fournisseur de services numériques, mais surtout d’être 
              au quotidien et sur le long terme, votre partenaire 
              informatique à la hauteur de vos enjeux.
              Apporter une forte valeur ajoutée à votre entreprise
              grâce au digital est le sens de notre engagement envers vous.
            </p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            Notre Vision
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body text-left">
            <h3 style="color: #ff3100; text-shadow : 1px 1px 1px black">La Vision Innoving, Accroitre votre Business</h3>
            <p>
              Vos équipes, vos clients et prospects jonglent et zappent,
              passant de leurs mobiles à leurs ordinateurs ou leurs tablettes
              tout cela de manière fluide et naturelle. Face à cet écosystème
              en mutation permanente, l’utilisation de la data et l'agilité
              sont au cœur de notre vision du digitale.
            </p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            Nos Valeurs
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          
          <div class="accordion-body text-left">
            <h3 style="color: #ff3100; text-shadow : 1px 1px 1px black">Les Valeurs Innoving, 1ière plateforme Digitale</h3>
            <p>
              <strong><u>La satisfaction du client</u></strong><br>
              Garantir la qualité de nos produits, de nos services et de toutes
              nos interventions en vous mettant au cœur de nos préoccupations
              afin de faciliter vos différents process.
              Gagner la fidélité de nos clients, leur garantir à long terme
              un approvisionnement stable tant au niveau de la qualité que
              de la quantité afin de construire des entreprises africaines
              solides et performantes au travers de notre FRUGALITE. <br>

              <strong class="text-left"><u>L’authenticité</u></strong><br>
              L’authenticité dans nos relations avec vous inscrit un climat de confiance,
              de sécurité. Pour nous, l’authenticité est la source de qualité de toute
              relation humaine qui se crée et se développe. <br>

              <strong class="text-left"><u>La responsabilité</u></strong><br>
              Nous sommes responsables de nos engagements vis à vis de vous et rien de ce que nous faisons ne justifie un échec. Pour cela nous nous attaquons aux problèmes pour les résoudre en prenant les décisions qui s’imposent.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


      {{-- <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button onclick="changeTextColor(this)" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              Mot du CEO
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
            <div class="accordion-body text-left">
              <img width="100px" class="img-center lazyloaded rounded-circle" src="{{ asset('client/images/zero.jpg') }}" alt="testimonial-img"><br>
              <p>“ Nous vous écoutons, nous vous conseillons et nous concevons
                 avec vous l’ensemble de vos projets innovants. Ce que nous recherchons
                  c’est votre satisfaction afin de  maintenir avec vous des relations continues.
                   Votre succès est notre leitmotiv et le plus important pour nous, 
                   <br>c’est la qualité de votre expérience client avec nous. ”
              </p>
              <p style="color: #ff3100">Alex DEGNY</p> 
                <p><b>Ceo Founder Innoving.</b></p>
            </div>
            
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button onclick="changeTextColor(this)" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
              Nous connaître
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
            <div class="accordion-body text-left">
                <h3 style="color: #ff3100">Développer votre Business</h3>
              <p>
                Nous sommes une entreprise qui édite des logiciels de gestion pour
                 les PME et les TPE adaptés à l’environnement des affaires en Afrique.
                Fort de cette expertise, nous proposons toutes l’architecture et les 
                technologies indispensables à la transformation digitale de bout en bout d’une entreprise.
                Et nous accompagnons la conduite du changement grâce à notre agilité
                et à notre réactivité. Faire des PME et TPE africaines les leaders
                de demain dans un monde en perpétuel changement est l’expérience
                unique que nous voulons vous faire vivre.
              </p>
              <p><b> Ensemble révolutionnons le Business en Afrique.</b></p> 
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button onclick="changeTextColor(this)" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
              Notre Mission
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body text-left">
              <h1 style="color: #ff3100; text-shadow : 1px 1px 1px black">Le Rôle Et La Mission De Innoving pour améliorer votre Business</h1>
              <p>
                Parce que l’efficacité de votre informatique d’aujourd’hui
                détermine votre entreprise de demain,<strong>Innoving</strong>  s’est donnée 
                comme mission de ne pas être qu’un simple intégrateur et 
                fournisseur de services numériques, mais surtout d’être 
                au quotidien et sur le long terme, votre partenaire 
                informatique à la hauteur de vos enjeux.
                Apporter une forte valeur ajoutée à votre entreprise
                grâce au digital est le sens de notre engagement envers vous.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button onclick="changeTextColor(this)" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
              Notre Vision
            </button>
          </h2>
          <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button onclick="changeTextColor(this)" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
              Nos Valeurs
            </button>
          </h2>
          <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div> --}}