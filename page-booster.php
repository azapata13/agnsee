<?php
/**
 * Template Name: Produit — Booster
 */

get_header();
?>

<main id="main-content" class="site-main">

	<?php
	$agnsee_product_img = agnsee_image_url( 'products/booster' );
	get_template_part( 'product-showcase', null, array(
		'name'      => 'Booster',
		'eyebrow'   => array( 'fr' => 'Extrait d\'algues', 'en' => 'Seaweed extract', 'es' => 'Extracto de algas' ),
		'lead'      => array( 'fr' => 'Extrait d\'algues marines destiné aux programmes de culture, en serre comme au champ.', 'en' => 'Marine seaweed extract for growing programs, in the greenhouse and in the field.', 'es' => 'Extracto de algas marinas para programas de cultivo, en invernadero y en campo.' ),
		'stats'     => array(
			array( 'fr' => 'Algues marines', 'en' => 'Marine seaweed', 'es' => 'Algas marinas' ),
			array( 'fr' => 'Programmes de culture', 'en' => 'Growing programs', 'es' => 'Programas de cultivo' ),
			array( 'fr' => 'Format sur demande', 'en' => 'Format on request', 'es' => 'Formato bajo pedido' ),
		),
		'steps'     => array(
			array( 'title' => array( 'fr' => 'Description', 'en' => 'Description', 'es' => 'Descripción' ), 'text' => array( 'fr' => 'Booster est un extrait d\'algues marines conçu pour s\'intégrer aux programmes de culture existants. Aucune allégation de santé ou de rendement des plantes n\'est associée à ce produit.', 'en' => 'Booster is a marine seaweed extract designed to integrate into existing growing programs. No plant health or performance claims are associated with this product.', 'es' => 'Booster es un extracto de algas marinas diseñado para integrarse a los programas de cultivo existentes. No se asocia a este producto ninguna alegación de salud o rendimiento de las plantas.' ) ),
			array( 'title' => array( 'fr' => 'Fiche technique', 'en' => 'Specifications', 'es' => 'Ficha técnica' ), 'list' => array(
				array( 'fr' => 'Origine : algues marines', 'en' => 'Origin: marine seaweed', 'es' => 'Origen: algas marinas' ),
				array( 'fr' => 'Usage : Programmes de culture (serres et plein champ)', 'en' => 'Use: Growing programs (greenhouses and open field)', 'es' => 'Uso: Programas de cultivo (invernaderos y campo abierto)' ),
				array( 'fr' => 'Format : sur demande', 'en' => 'Format: on request', 'es' => 'Formato: bajo pedido' ),
			) ),
			array( 'title' => array( 'fr' => 'Commander ou distribuer', 'en' => 'Order or distribute', 'es' => 'Pedir o distribuir' ), 'text' => array( 'fr' => 'Formats, prix distributeur et documentation (fiche technique, FDS) sur demande. Notre équipe vous répond rapidement.', 'en' => 'Formats, distributor pricing and documentation (spec sheet, SDS) on request. Our team will get back to you quickly.', 'es' => 'Formatos, precios para distribuidores y documentación (ficha técnica, HDS) bajo pedido. Nuestro equipo le responderá rápidamente.' ) ),
		),
		'images'    => array(
			array( 'src' => $agnsee_product_img ? $agnsee_product_img : 'https://agnsee.ca/wp-content/uploads/2026/08/Safegrow-Booster-4Litre-July-2026-1.png', 'label' => array( 'fr' => 'Produit', 'en' => 'Product', 'es' => 'Producto' ) ),
		),
		'sectors'   => array( 'serres', 'champs' ),
		'secondary' => array( 'href' => home_url( '/produits/' ), 'fr' => 'Tous les produits', 'en' => 'All products', 'es' => 'Todos los productos' ),
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
