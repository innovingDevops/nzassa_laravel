
<style>
	.img_logo {
  width: 100%;
  height: auto;
}

/* Définit la transition pour l'effet de survol */
.img_logo:hover {
  transition: transform 0.5s ease-in-out;
  transform: scale(1.1);
}
</style>
<div class="instagram">
	<div class="container-xl">
		{{-- <h3 class="section-title text-center prod_nzassa m-5 "> Notre gamme de produits N'ZASSA </h3> --}}
	<h3 style="font-size: 35px" class=" text-center fw-light overflow-hidden"> Explorez la gamme de nos produits N'Zassa : <span class="element fw-bold ms-1" data-typed-text='["NZassa School.","NZassa RH&PAIE.","NZassa Auto+.","NZassa GESCOM."]'></span></h3>
		<!-- button -->
		<!-- <a href="#" class="btn btn-default btn-instagram">@Katen on Instagram</a> -->
		<!-- images -->
		<div class="instagram-feed d-flex justify-content-center flex-wrap">
			@foreach ( $formules as $formule )
			<div class="insta-item col-sm-2 col-6 col-md-2">
				<a href="#">
					<img class="img_logo" src="{{asset('storage/'.$formule->logo_formule)}}" alt="insta-title" />
				</a>
			</div>
			@endforeach
		</div>
	</div>
</div>
