<?php
/**
 * Template Name: Produit — Booster
 */

get_header();
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Extrait d'algues</span><span class="lang-en">Seaweed extract</span><span class="lang-es">Extracto de algas</span></div>
			<h1>Booster</h1>
			<p class="hero-lead">
				<span class="lang-fr">Extrait d'algues marines destiné aux programmes de culture en horticulture protégée.</span>
				<span class="lang-en">Marine seaweed extract for growing programs in protected horticulture.</span>
				<span class="lang-es">Extracto de algas marinas para programas de cultivo en horticultura protegida.</span>
			</p>
			<?php $agnsee_product_img = agnsee_image_url( 'products/booster' ); ?>
			<?php if ( $agnsee_product_img ) : ?>
				<img src="<?php echo esc_url( $agnsee_product_img ); ?>" alt="Booster" style="max-width:480px;width:100%;border-radius:var(--radius-md);margin:0 auto 1.5rem;">
			<?php endif; ?>
			<div class="hero-actions">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=Booster' ) ); ?>">
					<span class="lang-fr">Demander une consultation</span><span class="lang-en">Request a consultation</span><span class="lang-es">Solicitar una consulta</span>
				</a>
			</div>
		</div>
	</section>

	<section class="section section-alt" style="padding-top:0;">
		<div class="container">
			<div class="grid grid-2">
				<div>
					<h2><span class="lang-fr">Description</span><span class="lang-en">Description</span><span class="lang-es">Descripción</span></h2>
					<p>
						<span class="lang-fr">Booster est un extrait d'algues marines conçu pour s'intégrer aux programmes de culture existants. Aucune allégation de santé ou de rendement des plantes n'est associée à ce produit.</span>
						<span class="lang-en">Booster is a marine seaweed extract designed to integrate into existing growing programs. No plant health or performance claims are associated with this product.</span>
						<span class="lang-es">Booster es un extracto de algas marinas diseñado para integrarse a los programas de cultivo existentes. No se asocia a este producto ninguna alegación de salud o rendimiento de las plantas.</span>
					</p>
				</div>
				<div>
					<h2><span class="lang-fr">Fiche technique</span><span class="lang-en">Specifications</span><span class="lang-es">Ficha técnica</span></h2>
					<ul style="color:var(--color-text-secondary);">
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Origine : algues marines</span>
							<span class="lang-en">Origin: marine seaweed</span>
							<span class="lang-es">Origen: algas marinas</span>
						</li>
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Usage : programmes de culture protégée</span>
							<span class="lang-en">Use: protected-crop growing programs</span>
							<span class="lang-es">Uso: programas de cultivo protegido</span>
						</li>
						<li style="padding:0.5rem 0;">
							<span class="lang-fr">Format : sur demande</span>
							<span class="lang-en">Format: on request</span>
							<span class="lang-es">Formato: bajo pedido</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<h2><span class="lang-fr">Documentation</span><span class="lang-en">Documentation</span><span class="lang-es">Documentación</span></h2>
			<div class="grid grid-3">
				<a class="card" href="#">
					<span class="lang-fr">Fiche technique (PDF)</span><span class="lang-en">Product spec sheet (PDF)</span><span class="lang-es">Ficha técnica (PDF)</span>
				</a>
				<a class="card" href="#">
					<span class="lang-fr">Fiche de données de sécurité (FDS)</span><span class="lang-en">Safety data sheet (SDS)</span><span class="lang-es">Hoja de datos de seguridad (HDS)</span>
				</a>
			</div>
			<p class="form-note">
				<span class="lang-fr">Documents disponibles sur demande auprès de notre équipe technique.</span>
				<span class="lang-en">Documents available upon request from our technical team.</span>
				<span class="lang-es">Documentos disponibles bajo pedido con nuestro equipo técnico.</span>
			</p>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container text-center">
			<h2><span class="lang-fr">Intéressé par Booster ?</span><span class="lang-en">Interested in Booster?</span><span class="lang-es">¿Interesado en Booster?</span></h2>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=Booster' ) ); ?>">
				<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span><span class="lang-es">Contáctanos</span>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
