@extends('frontend.layout.master')
@section('content')
@section('style')
@endsection
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text">
			<div class="col-md-9 ftco-animate pb-5"  style="margin-top:15%;">
				<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>  <span>About us <i class="ion-ios-arrow-forward"></i></span>
				</p>
				<h1 class="mb-0 bread">About Us</h1>
			</div>
		</div>
	</div>
</section>
<section class="bg-light">
	<div class="container-fluid">
		<div class="row d-flex no-gutters" style="padding:60px;">
			@foreach($abouts as $aboutinfo)
              	{!! $aboutinfo->description !!}
			@endforeach
		</div>
	</div>
</section>
@endsection