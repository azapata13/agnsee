<?php
/**
 * Template Name: Produit — Safe Disinfectant
 */

get_header();
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Désinfectant homologué par Santé Canada</span><span class="lang-en">Health Canada registered disinfectant</span><span class="lang-es">Desinfectante registrado ante Health Canada</span></div>
			<h1>Safe Disinfectant</h1>
			<p class="hero-lead">
				<span class="lang-fr">Désinfectant homologué par Santé Canada, à base d'acide hypochloreux (HOCl) à 0,046 %, pour établissements de santé, locaux alimentaires, usage institutionnel/industriel et bâtiments d'élevage.</span>
				<span class="lang-en">Health Canada registered disinfectant, based on 0.046% hypochlorous acid (HOCl), for healthcare facilities, food premises, institutional/industrial and barn use.</span>
				<span class="lang-es">Desinfectante registrado ante Health Canada, a base de ácido hipocloroso (HOCl) al 0,046 %, para instalaciones de salud, locales alimentarios, uso institucional/industrial y establos.</span>
			</p>
			<?php $agnsee_product_img = agnsee_image_url( 'products/safe-disinfectant' ); ?>
			<?php if ( ! $agnsee_product_img ) : ?>
				<?php $agnsee_product_img = 'https://agnsee.ca/wp-content/uploads/2026/08/safe-disinfectantGOOD.png'; ?>
			<?php endif; ?>
			<?php if ( $agnsee_product_img ) : ?>
				<img src="<?php echo esc_url( $agnsee_product_img ); ?>" alt="Safe Disinfectant" style="max-width:480px;width:100%;border-radius:var(--radius-md);margin:0 auto 1.5rem;">
			<?php endif; ?>
			<div class="hero-actions">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=Safe+Disinfectant' ) ); ?>">
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
						<span class="lang-fr">Safe Disinfectant est un désinfectant homologué par Santé Canada, formulé à base d'acide hypochloreux (HOCl) à une concentration de 0,046 %. Il est approuvé pour un usage en établissements de santé, en locaux alimentaires, ainsi qu'en contexte institutionnel, industriel et dans les bâtiments d'élevage.</span>
						<span class="lang-en">Safe Disinfectant is a Health Canada registered disinfectant, formulated with 0.046% hypochlorous acid (HOCl). It is approved for use in healthcare facilities, food premises, and institutional, industrial and barn settings.</span>
						<span class="lang-es">Safe Disinfectant es un desinfectante registrado ante Health Canada, formulado con ácido hipocloroso (HOCl) al 0,046 %. Está aprobado para uso en instalaciones de salud, locales alimentarios, y entornos institucionales, industriales y establos.</span>
					</p>
					<p>
						<span class="lang-fr">Prêt à l'emploi et sans rinçage requis, le produit est également conçu pour limiter l'accumulation minérale et la formation de biofilm à l'intérieur des systèmes d'eau et des buses de brumisation.</span>
						<span class="lang-en">Ready-to-use with no rinsing required, the product is also designed to limit mineral buildup and biofilm formation inside water systems and misting nozzles.</span>
						<span class="lang-es">Listo para usar y sin necesidad de enjuague, el producto también está diseñado para limitar la acumulación mineral y la formación de biofilm dentro de los sistemas de agua y las boquillas de nebulización.</span>
					</p>
				</div>
				<div>
					<h2><span class="lang-fr">Fiche technique</span><span class="lang-en">Specifications</span><span class="lang-es">Ficha técnica</span></h2>
					<ul style="color:var(--color-text-secondary);">
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Ingrédient actif : acide hypochloreux (HOCl) 0,046 %</span>
							<span class="lang-en">Active ingredient: hypochlorous acid (HOCl) 0.046%</span>
							<span class="lang-es">Ingrediente activo: ácido hipocloroso (HOCl) 0,046 %</span>
						</li>
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Homologation : désinfectant homologué par Santé Canada</span>
							<span class="lang-en">Registration: Health Canada registered disinfectant</span>
							<span class="lang-es">Registro: desinfectante registrado ante Health Canada</span>
						</li>
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Usage : établissements de santé, locaux alimentaires, institutionnel/industriel, bâtiments d'élevage</span>
							<span class="lang-en">Use: healthcare facilities, food premises, institutional/industrial, barn use</span>
							<span class="lang-es">Uso: instalaciones de salud, locales alimentarios, institucional/industrial, establos</span>
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
					<span class="lang-fr">Guide d'utilisation</span><span class="lang-en">Usage guide</span><span class="lang-es">Guía de uso</span>
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
			<h2><span class="lang-fr">Intéressé par Safe Disinfectant ?</span><span class="lang-en">Interested in Safe Disinfectant?</span><span class="lang-es">¿Interesado en Safe Disinfectant?</span></h2>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=Safe+Disinfectant' ) ); ?>">
				<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span><span class="lang-es">Contáctanos</span>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
