<?php
/**
 * Template Name: Produit — SafeGrow AG
 */

get_header();
?>

<main id="main-content" class="site-main">

	<?php
	$agnsee_product_img = agnsee_image_url( 'products/safegrow-ag' );
	get_template_part( 'product-showcase', null, array(
		'name'      => 'SafeGrow AG',
		'eyebrow'   => array( 'fr' => 'Traitement d\'irrigation', 'en' => 'Irrigation treatment', 'es' => 'Tratamiento de irrigación' ),
		'lead'      => array( 'fr' => 'Nettoyant d\'infrastructure d\'irrigation à base de HOCl (acide hypochloreux) stabilisé, développé par SafeGrow Solutions Inc.', 'en' => 'Irrigation infrastructure cleaner based on stabilized HOCl (hypochlorous acid), developed by SafeGrow Solutions Inc.', 'es' => 'Limpiador de infraestructura de irrigación a base de HOCl (ácido hipocloroso) estabilizado, desarrollado por SafeGrow Solutions Inc.' ),
		'stats'     => array(
			array( 'fr' => 'HOCl stabilisé', 'en' => 'Stabilized HOCl', 'es' => 'HOCl estabilizado' ),
			array( 'fr' => 'Lignes · goutteurs · réservoirs', 'en' => 'Lines · drippers · tanks', 'es' => 'Líneas · goteros · tanques' ),
			array( 'fr' => 'SafeGrow Solutions Inc.', 'en' => 'SafeGrow Solutions Inc.', 'es' => 'SafeGrow Solutions Inc.' ),
		),
		'steps'     => array(
			array( 'title' => array( 'fr' => 'Description', 'en' => 'Description', 'es' => 'Descripción' ), 'text' => array( 'fr' => 'SafeGrow AG est un nettoyant destiné exclusivement à l\'entretien des infrastructures d\'irrigation — lignes, goutteurs, réservoirs — dans les environnements de culture protégée. Sa formulation à base de HOCl stabilisé cible l\'accumulation de dépôts minéraux et de résidus nutritifs à l\'intérieur des systèmes d\'irrigation.', 'en' => 'SafeGrow AG is a cleaner intended exclusively for the maintenance of irrigation infrastructure — lines, drippers, tanks — in protected-crop environments. Its stabilized HOCl-based formulation targets mineral and nutrient buildup inside irrigation systems.', 'es' => 'SafeGrow AG es un limpiador destinado exclusivamente al mantenimiento de infraestructuras de irrigación — líneas, goteros, tanques — en entornos de cultivo protegido. Su fórmula a base de HOCl estabilizado ataca la acumulación de depósitos minerales y residuos nutritivos dentro de los sistemas de irrigación.' ) ),
			array( 'title' => array( 'fr' => 'À savoir', 'en' => 'Good to know', 'es' => 'Para saber' ), 'text' => array( 'fr' => 'SafeGrow AG est un produit d\'entretien d\'infrastructure. Il n\'est associé à aucune allégation de rendement ou de santé des plantes.', 'en' => 'SafeGrow AG is an infrastructure maintenance product. No plant health or performance claims are made or implied.', 'es' => 'SafeGrow AG es un producto de mantenimiento de infraestructura. No se asocia a ninguna alegación de rendimiento o salud de las plantas.' ) ),
			array( 'title' => array( 'fr' => 'Fiche technique', 'en' => 'Specifications', 'es' => 'Ficha técnica' ), 'list' => array(
				array( 'fr' => 'Ingrédient actif : HOCl stabilisé', 'en' => 'Active ingredient: stabilized HOCl', 'es' => 'Ingrediente activo: HOCl estabilizado' ),
				array( 'fr' => 'Usage : nettoyage d\'infrastructure d\'irrigation', 'en' => 'Use: irrigation infrastructure cleaning', 'es' => 'Uso: limpieza de infraestructura de irrigación' ),
				array( 'fr' => 'Fabricant : SafeGrow Solutions Inc.', 'en' => 'Manufacturer: SafeGrow Solutions Inc.', 'es' => 'Fabricante: SafeGrow Solutions Inc.' ),
				array( 'fr' => 'Format : sur demande', 'en' => 'Format: on request', 'es' => 'Formato: bajo pedido' ),
			) ),
			array( 'title' => array( 'fr' => 'Commander ou distribuer', 'en' => 'Order or distribute', 'es' => 'Pedir o distribuir' ), 'text' => array( 'fr' => 'Formats, prix distributeur et documentation (fiche technique, FDS) sur demande. Notre équipe vous répond rapidement.', 'en' => 'Formats, distributor pricing and documentation (spec sheet, SDS) on request. Our team will get back to you quickly.', 'es' => 'Formatos, precios para distribuidores y documentación (ficha técnica, HDS) bajo pedido. Nuestro equipo le responderá rápidamente.' ) ),
		),
		'images'    => array(
			array( 'src' => $agnsee_product_img ? $agnsee_product_img : 'https://agnsee.ca/wp-content/uploads/2026/08/Safegrow-AG-Group-Packaging-4L-1000L-August-72026.png', 'label' => array( 'fr' => 'Produit', 'en' => 'Product', 'es' => 'Producto' ) ),
		),
		'secondary' => array( 'href' => home_url( '/outils/calculateur-safegrow-ag/' ), 'fr' => 'Calculateur de dosage', 'en' => 'Dosing calculator', 'es' => 'Calculadora de dosificación' ),
	) );
	?>

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
