<?php
/**
 * Template Name: Produit — Safe Disinfectant
 */

get_header();
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Désinfection & assainissement</span><span class="lang-en">Disinfection & sanitation</span><span class="lang-es">Desinfección y saneamiento</span></div>
			<h1>Safe Disinfectant</h1>
			<p class="hero-lead">
				<span class="lang-fr">Désinfectant à base de HOCl (acide hypochloreux) stabilisé, prêt à l'emploi, pour les environnements exigeants — transformation alimentaire, agriculture, traitement de l'eau.</span>
				<span class="lang-en">Ready-to-use disinfectant based on stabilized HOCl (hypochlorous acid), for demanding environments — food processing, agriculture, water treatment.</span>
				<span class="lang-es">Desinfectante a base de HOCl (ácido hipocloroso) estabilizado, listo para usar, para entornos exigentes — procesamiento de alimentos, agricultura, tratamiento de agua.</span>
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
						<span class="lang-fr">Safe Disinfectant est une solution stabilisée d'acide hypochloreux (HOCl), fabriquée au Canada selon les bonnes pratiques de fabrication (GMP). Sa formulation reste efficace sur une longue période, ce qui en fait une option pratique pour l'assainissement d'équipements, de surfaces et de systèmes d'eau dans des environnements agricoles, alimentaires et de traitement de l'eau.</span>
						<span class="lang-en">Safe Disinfectant is a stabilized hypochlorous acid (HOCl) solution, manufactured in Canada under Good Manufacturing Practices (GMP). Its formulation remains effective over an extended period, making it a practical option for sanitizing equipment, surfaces and water systems in agricultural, food-handling and water-treatment environments.</span>
						<span class="lang-es">Safe Disinfectant es una solución estabilizada de ácido hipocloroso (HOCl), fabricada en Canadá bajo Buenas Prácticas de Manufactura (GMP). Su fórmula se mantiene eficaz durante un período prolongado, lo que la convierte en una opción práctica para desinfectar equipos, superficies y sistemas de agua en entornos agrícolas, de manejo de alimentos y de tratamiento de agua.</span>
					</p>
					<p>
						<span class="lang-fr">Prêt à l'emploi et sans rinçage requis, le produit est conçu pour limiter l'accumulation minérale et la formation de biofilm à l'intérieur des systèmes d'eau et des buses de brumisation.</span>
						<span class="lang-en">Ready-to-use with no rinsing required, the product is designed to limit mineral buildup and biofilm formation inside water systems and misting nozzles.</span>
						<span class="lang-es">Listo para usar y sin necesidad de enjuague, el producto está diseñado para limitar la acumulación mineral y la formación de biofilm dentro de los sistemas de agua y las boquillas de nebulización.</span>
					</p>
					<p class="form-note">
						<span class="lang-fr">Pour les allégations spécifiques d'efficacité contre certains pathogènes, contactez notre équipe technique — la documentation complète est disponible sur demande.</span>
						<span class="lang-en">For specific efficacy claims against particular pathogens, contact our technical team — full documentation is available upon request.</span>
						<span class="lang-es">Para alegaciones específicas de eficacia contra ciertos patógenos, contacta a nuestro equipo técnico — la documentación completa está disponible bajo pedido.</span>
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
							<span class="lang-fr">Usage : désinfection de surfaces, équipements et systèmes d'eau</span>
							<span class="lang-en">Use: disinfection of surfaces, equipment and water systems</span>
							<span class="lang-es">Uso: desinfección de superficies, equipos y sistemas de agua</span>
						</li>
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Fabrication : Canada, selon les normes GMP</span>
							<span class="lang-en">Manufacturing: Canada, GMP-certified</span>
							<span class="lang-es">Fabricación: Canadá, bajo normas GMP</span>
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
