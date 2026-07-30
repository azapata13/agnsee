<?php
/**
 * Template Name: Produit — Grow Genius
 */

get_header();
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Acide monosilicique</span><span class="lang-en">Monosilicic acid</span></div>
			<h1>Grow Genius</h1>
			<p class="hero-lead">
				<span class="lang-fr">Acide monosilicique concentré à 40 %, destiné aux programmes de culture en horticulture protégée.</span>
				<span class="lang-en">40% concentrated monosilicic acid, designed for growing programs in protected horticulture.</span>
			</p>
			<?php $agnsee_product_img = agnsee_image_url( 'products/grow-genius' ); ?>
			<?php if ( $agnsee_product_img ) : ?>
				<img src="<?php echo esc_url( $agnsee_product_img ); ?>" alt="Grow Genius" style="max-width:480px;width:100%;border-radius:var(--radius-md);margin:0 auto 1.5rem;">
			<?php endif; ?>
			<div class="hero-actions">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=Grow+Genius' ) ); ?>">
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
						<span class="lang-fr">Grow Genius est un concentré d'acide monosilicique à 40 %, conçu pour s'intégrer aux programmes de culture existants. Aucune allégation de santé ou de rendement des plantes n'est associée à ce produit.</span>
						<span class="lang-en">Grow Genius is a 40% concentrated monosilicic acid, designed to integrate into existing growing programs. No plant health or performance claims are associated with this product.</span>
					</p>
				</div>
				<div>
					<h2><span class="lang-fr">Fiche technique</span><span class="lang-en">Specifications</span></h2>
					<ul style="color:var(--color-text-secondary);">
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Concentration : acide monosilicique 40 %</span>
							<span class="lang-en">Concentration: 40% monosilicic acid</span>
						</li>
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Usage : programmes de culture protégée</span>
							<span class="lang-en">Use: protected-crop growing programs</span>
						</li>
						<li style="padding:0.5rem 0;">
							<span class="lang-fr">Format : sur demande</span>
							<span class="lang-en">Format: on request</span>
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
					<span class="lang-fr">Fiche de données de sécurité (FDS)</span><span class="lang-en">Safety data sheet (SDS)</span>
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
			<h2><span class="lang-fr">Intéressé par Grow Genius ?</span><span class="lang-en">Interested in Grow Genius?</span></h2>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=Grow+Genius' ) ); ?>">
				<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
