
<div class="instagram">
	<div class="container-xl">
		<h3 class="section-title text-center prod_nzassa m-5 "> Notre gamme de produits N'ZASSA </h3>
		<!-- button -->
		<!-- <a href="#" class="btn btn-default btn-instagram">@Katen on Instagram</a> -->
		<!-- images -->
		<div class="instagram-feed d-flex flex-wrap">
			@foreach ($formules as $formule )
			<div class="insta-item col-sm-2 col-6 col-md-2">
				<a href="#">
					<img src="{{asset('storage/'.$formule->logo_formule)}}" alt="insta-title" />
				</a>
			</div>
			@endforeach
		</div>
	</div>
</div>