<?php
/**
 * Template Name: Produit — Safe Disinfectant
 */

get_header();
?>

<main id="main-content" class="site-main">

	<?php
	$agnsee_product_img = agnsee_image_url( 'products/safe-disinfectant' );
	get_template_part( 'product-showcase', null, array(
		'name'      => 'Safe Disinfectant',
		'eyebrow'   => array( 'fr' => 'Désinfectant homologué', 'en' => 'Registered disinfectant', 'es' => 'Desinfectante registrado' ),
		'lead'      => array( 'fr' => 'Désinfectant homologué par Santé Canada, à base d\'acide hypochloreux (HOCl) à 0,046 %, pour les bâtiments d\'élevage, les locaux alimentaires, les établissements de santé et l\'usage institutionnel/industriel.', 'en' => 'Health Canada–registered disinfectant based on 0.046% hypochlorous acid (HOCl), for livestock buildings, food premises, healthcare facilities and institutional/industrial use.', 'es' => 'Desinfectante registrado por Health Canada, a base de ácido hipocloroso (HOCl) al 0,046 %, para instalaciones ganaderas, locales alimentarios, establecimientos de salud y uso institucional/industrial.' ),
		'stats'     => array(
			array( 'fr' => 'HOCl 0,046 %', 'en' => 'HOCl 0.046%', 'es' => 'HOCl 0,046 %' ),
			array( 'fr' => 'Homologué Santé Canada', 'en' => 'Health Canada registered', 'es' => 'Registrado ante Health Canada' ),
			array( 'fr' => 'Prêt à l\'emploi, sans rinçage', 'en' => 'Ready-to-use, no rinse', 'es' => 'Listo para usar, sin enjuague' ),
		),
		'steps'     => array(
			array( 'title' => array( 'fr' => 'Description', 'en' => 'Description', 'es' => 'Descripción' ), 'text' => array( 'fr' => 'Safe Disinfectant est un désinfectant homologué par Santé Canada, formulé à base d\'acide hypochloreux (HOCl) à une concentration de 0,046 %. Il est approuvé pour un usage dans les bâtiments d\'élevage, en établissements de santé, en locaux alimentaires, ainsi qu\'en contexte institutionnel et industriel.', 'en' => 'Safe Disinfectant is a Health Canada–registered disinfectant formulated with hypochlorous acid (HOCl) at a 0.046% concentration. It is approved for use in livestock buildings, healthcare facilities and food premises, as well as in institutional and industrial settings.', 'es' => 'Safe Disinfectant es un desinfectante registrado por Health Canada, formulado a base de ácido hipocloroso (HOCl) en una concentración del 0,046 %. Está aprobado para su uso en instalaciones ganaderas, establecimientos de salud y locales alimentarios, así como en entornos institucionales e industriales.' ) ),
			array( 'title' => array( 'fr' => 'À savoir', 'en' => 'Good to know', 'es' => 'Para saber' ), 'text' => array( 'fr' => 'Prêt à l\'emploi et sans rinçage requis, le produit est également conçu pour limiter l\'accumulation minérale et la formation de biofilm à l\'intérieur des systèmes d\'eau et des buses de brumisation.', 'en' => 'Ready-to-use with no rinsing required, the product is also designed to limit mineral buildup and biofilm formation inside water systems and misting nozzles.', 'es' => 'Listo para usar y sin necesidad de enjuague, el producto también está diseñado para limitar la acumulación mineral y la formación de biofilm dentro de los sistemas de agua y las boquillas de nebulización.' ) ),
			array( 'title' => array( 'fr' => 'Fiche technique', 'en' => 'Specifications', 'es' => 'Ficha técnica' ), 'list' => array(
				array( 'fr' => 'Ingrédient actif : acide hypochloreux (HOCl) 0,046 %', 'en' => 'Active ingredient: hypochlorous acid (HOCl) 0.046%', 'es' => 'Ingrediente activo: ácido hipocloroso (HOCl) 0,046 %' ),
				array( 'fr' => 'Homologation : désinfectant homologué par Santé Canada', 'en' => 'Registration: Health Canada registered disinfectant', 'es' => 'Registro: desinfectante registrado ante Health Canada' ),
				array( 'fr' => 'Usage : Bâtiments d\'élevage, locaux alimentaires, établissements de santé, institutionnel/industriel', 'en' => 'Use: Livestock buildings, food premises, healthcare facilities, institutional/industrial', 'es' => 'Uso: Instalaciones ganaderas, locales alimentarios, establecimientos de salud, institucional/industrial' ),
				array( 'fr' => 'Format : sur demande', 'en' => 'Format: on request', 'es' => 'Formato: bajo pedido' ),
			) ),
			array( 'title' => array( 'fr' => 'Commander ou distribuer', 'en' => 'Order or distribute', 'es' => 'Pedir o distribuir' ), 'text' => array( 'fr' => 'Formats, prix distributeur et documentation (fiche technique, FDS) sur demande. Notre équipe vous répond rapidement.', 'en' => 'Formats, distributor pricing and documentation (spec sheet, SDS) on request. Our team will get back to you quickly.', 'es' => 'Formatos, precios para distribuidores y documentación (ficha técnica, HDS) bajo pedido. Nuestro equipo le responderá rápidamente.' ) ),
		),
		'images'    => array(
			array( 'src' => $agnsee_product_img ? $agnsee_product_img : 'https://agnsee.ca/wp-content/uploads/2026/08/safe-disinfectantGOOD.png', 'label' => array( 'fr' => 'Produit', 'en' => 'Product', 'es' => 'Producto' ) ),
		),
		'sectors'   => array( 'elevage' ),
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
