@extends('layouts.app')

@section('title', __('FAQ'))

@section('content')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="">
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="page-title">
					<h1 class="title">FAQs</h1>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Elements</a></li>
						<li class="breadcrumb-item active">FAQs</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Page Title/Header End -->

<!-- FAQs Section Start -->
<div class="section section-padding">
	<div class="container">
		<div class="row row-cols-lg-2 row-cols-1 learts-mb-n40">

			<div class="col learts-mb-40">
				<!-- Section Title Start -->
				<div class="section-title2">
					<h2 class="title">Les Questions Les Plus Posées :</h2>
				</div>
				<!-- Section Title End -->
				<div class="row">
					<div class="col">
						<div class="accordion" id="faq-accordion">
							
								<div class="card-header">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq-accordion-2">Echange et Retour</button>
								</div>

								<div id="faq-accordion-2" class="collapse" data-parent="#faq-accordion">
									<div class="card-body">
										<h5>Comment me faire rembourser ou retourner les produits en cas de problème ? </h5>
										<p>Tout doit se faire avant le paiement, c’est-à-dire au moment de la livraison de votre colis
                                    Le CLIENT s’engage à vérifier sa commande lors de la livraison . En cas de non-conformité des articles (mauvais ou endommagés) nous conseillons au client de ne pas accepter la commande et de la laisser au livreur pour retour à nos entrepôts. Le livreur fera le constat du problème, le notera sur le bon de livraison et reprendra la totalité de la marchandise sans frais supplémentaire. C’est le seul cas de retour possible.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq-accordion-3">Qualité des produits </button>
								</div>

								<div id="faq-accordion-3" class="collapse" data-parent="#faq-accordion">
									<div class="card-body">
									    <h5> Quelle-garantie ai-je quant à la qualité des produits acheté en ligne?</h5>
										<p>l’importateur et/ou le producteur officiel pour l’Algérie de tous les produits que nous vous proposons à la vente sur notre site.Ce partenariat privilégié avec les grandes Marques Internationales vous garantit la qualité des produits .</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FAQs Section End -->
@stop
