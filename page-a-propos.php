<?php
/**
 * Template Name: À propos
 */

get_header();
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Qui nous sommes</span><span class="lang-en">Who we are</span></div>
			<h1>
				<span class="lang-fr">À propos d'Agancy</span>
				<span class="lang-en">About Agancy</span>
			</h1>
			<p class="hero-lead">
				<span class="lang-fr">Agancy est une agence manufacturière canadienne dédiée à l'horticulture protégée.</span>
				<span class="lang-en">Agancy is a Canadian manufacturer's representative agency dedicated to protected horticulture.</span>
			</p>
		</div>
	</section>

	<section class="section section-alt" style="padding-top:0;">
		<div class="container">
			<div class="grid grid-2">
				<div>
					<h2><span class="lang-fr">Notre mission</span><span class="lang-en">Our mission</span></h2>
					<p>
						<span class="lang-fr">Connecter les fabricants de produits techniques aux distributeurs et acheteurs institutionnels du secteur de l'horticulture protégée, en apportant une expertise technique locale et un support terrain fiable.</span>
						<span class="lang-en">Connecting technical product manufacturers with distributors and institutional buyers in the protected horticulture sector, bringing local technical expertise and reliable field support.</span>
					</p>
				</div>
				<div>
					<h2><span class="lang-fr">Le modèle agent manufacturier</span><span class="lang-en">The manufacturer's rep model</span></h2>
					<p>
						<span class="lang-fr">En tant qu'agent manufacturier, Agancy représente des fabricants sélectionnés sans jamais devenir propriétaire des produits vendus. Nous facilitons la mise en relation, le support technique et la distribution — sans commerce en ligne ni transaction directe.</span>
						<span class="lang-en">As a manufacturer's representative, Agancy represents selected manufacturers without ever taking ownership of the products sold. We facilitate introductions, technical support and distribution — with no online commerce or direct transactions.</span>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<h2 class="text-center" style="margin-bottom:2rem;">
				<span class="lang-fr">Nos valeurs</span>
				<span class="lang-en">Our values</span>
			</h2>
			<div class="grid grid-3">
				<div class="card">
					<h4><span class="lang-fr">Rigueur technique</span><span class="lang-en">Technical rigor</span></h4>
					<p>
						<span class="lang-fr">Une sélection de produits fondée sur des critères techniques précis, sans compromis.</span>
						<span class="lang-en">A product selection based on precise technical criteria, without compromise.</span>
					</p>
				</div>
				<div class="card">
					<h4><span class="lang-fr">Transparence</span><span class="lang-en">Transparency</span></h4>
					<p>
						<span class="lang-fr">Aucune allégation exagérée — uniquement des faits vérifiables sur nos produits.</span>
						<span class="lang-en">No exaggerated claims — only verifiable facts about our products.</span>
					</p>
				</div>
				<div class="card">
					<h4><span class="lang-fr">Proximité</span><span class="lang-en">Proximity</span></h4>
					<p>
						<span class="lang-fr">Un support terrain direct auprès de nos partenaires distributeurs à travers le Canada.</span>
						<span class="lang-en">Direct field support for our distribution partners across Canada.</span>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container text-center">
			<h2>
				<span class="lang-fr">Envie de collaborer avec nous ?</span>
				<span class="lang-en">Interested in working with us?</span>
			</h2>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
				<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
