<?php
/**
 * Template Name: Produit — Aranet
 */

get_header();
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Capteurs</span><span class="lang-en">Sensors</span><span class="lang-es">Sensores</span></div>
			<h1>Aranet</h1>
			<p class="hero-lead">
				<span class="lang-fr">Système de capteurs sans fil pour le suivi du CO2, de la température et de l'humidité en environnement de culture protégée.</span>
				<span class="lang-en">Wireless sensor system for monitoring CO2, temperature and humidity in protected-crop environments.</span>
				<span class="lang-es">Sistema de sensores inalámbricos para el monitoreo de CO2, temperatura y humedad en entornos de cultivo protegido.</span>
			</p>
			<?php $agnsee_product_img = agnsee_image_url( 'products/aranet' ); ?>
			<?php if ( $agnsee_product_img ) : ?>
				<img src="<?php echo esc_url( $agnsee_product_img ); ?>" alt="Aranet" style="max-width:480px;width:100%;border-radius:var(--radius-md);margin:0 auto 1.5rem;">
			<?php endif; ?>
			<div class="hero-actions">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=Aranet' ) ); ?>">
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
						<span class="lang-fr">Aranet propose un système de capteurs sans fil permettant le suivi en continu du CO2, de la température et de l'humidité relative, avec transmission des données pour appuyer les décisions de gestion environnementale.</span>
						<span class="lang-en">Aranet offers a wireless sensor system enabling continuous monitoring of CO2, temperature and relative humidity, with data transmission to support environmental management decisions.</span>
						<span class="lang-es">Aranet ofrece un sistema de sensores inalámbricos que permite el monitoreo continuo de CO2, temperatura y humedad relativa, con transmisión de datos para apoyar decisiones de gestión ambiental.</span>
					</p>
				</div>
				<div>
					<h2><span class="lang-fr">Fiche technique</span><span class="lang-en">Specifications</span><span class="lang-es">Ficha técnica</span></h2>
					<ul style="color:var(--color-text-secondary);">
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Mesures : CO2, température, humidité</span>
							<span class="lang-en">Measurements: CO2, temperature, humidity</span>
							<span class="lang-es">Mediciones: CO2, temperatura, humedad</span>
						</li>
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Connectivité : sans fil</span>
							<span class="lang-en">Connectivity: wireless</span>
							<span class="lang-es">Conectividad: inalámbrica</span>
						</li>
						<li style="padding:0.5rem 0;">
							<span class="lang-fr">Usage : serres et culture intérieure</span>
							<span class="lang-en">Use: greenhouses and indoor growing</span>
							<span class="lang-es">Uso: invernaderos y cultivo interior</span>
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
					<span class="lang-fr">Guide d'installation</span><span class="lang-en">Installation guide</span><span class="lang-es">Guía de instalación</span>
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
			<h2><span class="lang-fr">Intéressé par Aranet ?</span><span class="lang-en">Interested in Aranet?</span><span class="lang-es">¿Interesado en Aranet?</span></h2>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=Aranet' ) ); ?>">
				<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span><span class="lang-es">Contáctanos</span>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
