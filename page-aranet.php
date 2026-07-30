<?php
/**
 * Template Name: Produit — Aranet
 */

get_header();
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Capteurs</span><span class="lang-en">Sensors</span></div>
			<h1>Aranet</h1>
			<p class="hero-lead">
				<span class="lang-fr">Système de capteurs sans fil pour le suivi du CO2, de la température et de l'humidité en environnement de culture protégée.</span>
				<span class="lang-en">Wireless sensor system for monitoring CO2, temperature and humidity in protected-crop environments.</span>
			</p>
			<div class="hero-actions">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=Aranet' ) ); ?>">
					<span class="lang-fr">Demander une consultation</span><span class="lang-en">Request a consultation</span>
				</a>
			</div>
		</div>
	</section>

	<section class="section section-alt" style="padding-top:0;">
		<div class="container">
			<div class="grid grid-2">
				<div>
					<h2><span class="lang-fr">Description</span><span class="lang-en">Description</span></h2>
					<p>
						<span class="lang-fr">Aranet propose un système de capteurs sans fil permettant le suivi en continu du CO2, de la température et de l'humidité relative, avec transmission des données pour appuyer les décisions de gestion environnementale.</span>
						<span class="lang-en">Aranet offers a wireless sensor system enabling continuous monitoring of CO2, temperature and relative humidity, with data transmission to support environmental management decisions.</span>
					</p>
				</div>
				<div>
					<h2><span class="lang-fr">Fiche technique</span><span class="lang-en">Specifications</span></h2>
					<ul style="color:var(--color-text-secondary);">
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Mesures : CO2, température, humidité</span>
							<span class="lang-en">Measurements: CO2, temperature, humidity</span>
						</li>
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Connectivité : sans fil</span>
							<span class="lang-en">Connectivity: wireless</span>
						</li>
						<li style="padding:0.5rem 0;">
							<span class="lang-fr">Usage : serres et culture intérieure</span>
							<span class="lang-en">Use: greenhouses and indoor growing</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<h2><span class="lang-fr">Documentation</span><span class="lang-en">Documentation</span></h2>
			<div class="grid grid-3">
				<a class="card" href="#">
					<span class="lang-fr">Fiche technique (PDF)</span><span class="lang-en">Product spec sheet (PDF)</span>
				</a>
				<a class="card" href="#">
					<span class="lang-fr">Guide d'installation</span><span class="lang-en">Installation guide</span>
				</a>
			</div>
			<p class="form-note">
				<span class="lang-fr">Documents disponibles sur demande auprès de notre équipe technique.</span>
				<span class="lang-en">Documents available upon request from our technical team.</span>
			</p>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container text-center">
			<h2><span class="lang-fr">Intéressé par Aranet ?</span><span class="lang-en">Interested in Aranet?</span></h2>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=Aranet' ) ); ?>">
				<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
