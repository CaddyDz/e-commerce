@extends('layouts.app')

@section('title', __('Shipping'))

@section('content')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="page-title">
					<h1 class="title">Informations concernant la Livraison</h1>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">@lang('Home')</a></li>
						<li class="breadcrumb-item active">Livraison</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page Title/Header End -->
<!-- Feature Section Start -->
<div class="section section-padding">
	<div class="container">
		<div class="row learts-mb-n30">
			<div class="col-xl-3 col-lg-4 col-12 mr-auto learts-mb-30">
				<h1 class="fw-400">Quand vous faites vos achats chez nous :</h1>
			</div>
			<div class="col-lg-8 col-12 learts-mb-30">
				<div class="row learts-mb-n30">
					<div class="col-md-6 col-12 learts-mb-30">
						<p class="text-heading fw-600 learts-mb-10">Paiement En Espèce à la livraison</p>
						<p>Le Client paye en espèce à la livraison de la commande. lorsque vous faites livrer vos articles à domicile.</p>
					</div>
					<div class="col-md-6 col-12 learts-mb-30">
						<p class="text-heading fw-600 learts-mb-10">Période de livraison</p>
						<p>de 24 à 72 Heurs.</p>
					</div>
					<div class="col-md-6 col-12 learts-mb-30">
						<p class="text-heading fw-600 learts-mb-10">Frais de livraison</p>
						  <p>Livraison non disponible pour les wilayas suivantes: Tamnrasset, Illizi, Tindouf</p>
						@foreach($shippings as $shipping)
							<p> {{ $shipping->state }} : {{ $shipping->price }} </p>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Feature Section End -->
@stop
