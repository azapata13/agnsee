<?php
/**
 * Template Name: Produit — SafeGrow AG
 */

get_header();
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Traitement d'irrigation</span><span class="lang-en">Irrigation treatment</span><span class="lang-es">Tratamiento de irrigación</span></div>
			<h1>SafeGrow AG</h1>
			<p class="hero-lead">
				<span class="lang-fr">Nettoyant d'infrastructure d'irrigation à base de HOCl (acide hypochloreux) stabilisé, développé par SafeGrow Solutions Inc.</span>
				<span class="lang-en">Irrigation infrastructure cleaner based on stabilized HOCl (hypochlorous acid), developed by SafeGrow Solutions Inc.</span>
				<span class="lang-es">Limpiador de infraestructura de irrigación a base de HOCl (ácido hipocloroso) estabilizado, desarrollado por SafeGrow Solutions Inc.</span>
			</p>
			<?php $agnsee_product_img = agnsee_image_url( 'products/safegrow-ag' ); ?>
			<?php if ( $agnsee_product_img ) : ?>
				<img src="<?php echo esc_url( $agnsee_product_img ); ?>" alt="SafeGrow AG" style="max-width:480px;width:100%;border-radius:var(--radius-md);margin:0 auto 1.5rem;">
			<?php endif; ?>
			<div class="hero-actions">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=SafeGrow+AG' ) ); ?>">
					<span class="lang-fr">Demander une consultation</span><span class="lang-en">Request a consultation</span><span class="lang-es">Solicitar una consulta</span>
				</a>
				<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/outils/' ) ); ?>">
					<span class="lang-fr">Voir le calculateur SafeGrow AG</span><span class="lang-en">See the SafeGrow AG calculator</span><span class="lang-es">Ver la calculadora SafeGrow AG</span>
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
						<span class="lang-fr">SafeGrow AG est un nettoyant destiné exclusivement à l'entretien des infrastructures d'irrigation — lignes, goutteurs, réservoirs — dans les environnements de culture protégée. Sa formulation à base de HOCl stabilisé cible l'accumulation de dépôts minéraux et de résidus nutritifs à l'intérieur des systèmes d'irrigation.</span>
						<span class="lang-en">SafeGrow AG is a cleaner intended exclusively for the maintenance of irrigation infrastructure — lines, drippers, tanks — in protected-crop environments. Its stabilized HOCl-based formulation targets mineral and nutrient buildup inside irrigation systems.</span>
						<span class="lang-es">SafeGrow AG es un limpiador destinado exclusivamente al mantenimiento de infraestructuras de irrigación — líneas, goteros, tanques — en entornos de cultivo protegido. Su fórmula a base de HOCl estabilizado ataca la acumulación de depósitos minerales y residuos nutritivos dentro de los sistemas de irrigación.</span>
					</p>
					<p class="form-note">
						<span class="lang-fr">SafeGrow AG est un produit d'entretien d'infrastructure. Il n'est associé à aucune allégation de rendement ou de santé des plantes.</span>
						<span class="lang-en">SafeGrow AG is an infrastructure maintenance product. No plant health or performance claims are made or implied.</span>
						<span class="lang-es">SafeGrow AG es un producto de mantenimiento de infraestructura. No se asocia a ninguna alegación de rendimiento o salud de las plantas.</span>
					</p>
				</div>
				<div>
					<h2><span class="lang-fr">Fiche technique</span><span class="lang-en">Specifications</span><span class="lang-es">Ficha técnica</span></h2>
					<ul style="color:var(--color-text-secondary);">
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Ingrédient actif : HOCl stabilisé</span>
							<span class="lang-en">Active ingredient: stabilized HOCl</span>
							<span class="lang-es">Ingrediente activo: HOCl estabilizado</span>
						</li>
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Usage : nettoyage d'infrastructure d'irrigation</span>
							<span class="lang-en">Use: irrigation infrastructure cleaning</span>
							<span class="lang-es">Uso: limpieza de infraestructura de irrigación</span>
						</li>
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Fabricant : SafeGrow Solutions Inc.</span>
							<span class="lang-en">Manufacturer: SafeGrow Solutions Inc.</span>
							<span class="lang-es">Fabricante: SafeGrow Solutions Inc.</span>
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
				<a class="card" href="#">
					<span class="lang-fr">Guide de dosage</span><span class="lang-en">Dosing guide</span><span class="lang-es">Guía de dosificación</span>
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
			<h2><span class="lang-fr">Intéressé par SafeGrow AG ?</span><span class="lang-en">Interested in SafeGrow AG?</span><span class="lang-es">¿Interesado en SafeGrow AG?</span></h2>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=SafeGrow+AG' ) ); ?>">
				<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span><span class="lang-es">Contáctanos</span>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
