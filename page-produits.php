<?php
/**
 * Template Name: Produits
 */

get_header();

$agnsee_products = array(
	array(
		'slug'    => 'safegrow-ag',
		'segment' => 'irrigation',
		'name'    => 'SafeGrow AG',
		'fr'      => "Nettoyant d'infrastructure d'irrigation à base de HOCl stabilisé.",
		'en'      => 'Irrigation infrastructure cleaner based on stabilized HOCl.',
		'es'      => 'Limpiador de infraestructura de irrigación a base de HOCl estabilizado.',
	),
	array(
		'slug'    => 'booster',
		'segment' => 'biostimulants',
		'name'    => 'Booster',
		'fr'      => "Extrait d'algues marines pour programmes de culture.",
		'en'      => 'Marine seaweed extract for growing programs.',
		'es'      => 'Extracto de algas marinas para programas de cultivo.',
	),
	array(
		'slug'    => 'grow-genius',
		'segment' => 'biostimulants',
		'name'    => 'Grow Genius',
		'fr'      => 'Acide monosilicique concentré à 40 %.',
		'en'      => '40% concentrated monosilicic acid.',
		'es'      => 'Ácido monosilícico concentrado al 40 %.',
	),
	array(
		'slug'    => 'aranet',
		'segment' => 'capteurs',
		'name'    => 'Aranet',
		'fr'      => 'Système de capteurs CO2, température et humidité.',
		'en'      => 'CO2, temperature and humidity sensor system.',
		'es'      => 'Sistema de sensores de CO2, temperatura y humedad.',
	),
);

$agnsee_segments = array(
	'all'           => array( 'fr' => 'Tous', 'en' => 'All', 'es' => 'Todos' ),
	'irrigation'    => array( 'fr' => "Traitement d'irrigation", 'en' => 'Irrigation treatment', 'es' => 'Tratamiento de irrigación' ),
	'biostimulants' => array( 'fr' => 'Biostimulants', 'en' => 'Biostimulants', 'es' => 'Bioestimulantes' ),
	'capteurs'      => array( 'fr' => 'Capteurs & données', 'en' => 'Sensors & data', 'es' => 'Sensores y datos' ),
);
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Catalogue</span><span class="lang-en">Catalog</span><span class="lang-es">Catálogo</span></div>
			<h1>
				<span class="lang-fr">Nos produits</span>
				<span class="lang-en">Our products</span>
				<span class="lang-es">Nuestros productos</span>
			</h1>
			<p class="hero-lead">
				<span class="lang-fr">Une sélection de produits techniques pour l'horticulture protégée, réservée aux distributeurs et acheteurs institutionnels.</span>
				<span class="lang-en">A selection of technical products for protected horticulture, reserved for distributors and institutional buyers.</span>
				<span class="lang-es">Una selección de productos técnicos para la horticultura protegida, reservada a distribuidores y compradores institucionales.</span>
			</p>
		</div>
	</section>

	<section class="section" style="padding-top:0;">
		<div class="container">

			<div class="hero-actions" style="justify-content:flex-start;margin-bottom:2rem;flex-wrap:wrap;" id="segment-filters">
				<?php foreach ( $agnsee_segments as $key => $label ) : ?>
					<button type="button" class="btn btn-sm <?php echo 'all' === $key ? 'btn-primary' : 'btn-secondary'; ?>" data-segment-filter="<?php echo esc_attr( $key ); ?>">
						<span class="lang-fr"><?php echo esc_html( $label['fr'] ); ?></span>
						<span class="lang-en"><?php echo esc_html( $label['en'] ); ?></span>
						<span class="lang-es"><?php echo esc_html( $label['es'] ); ?></span>
					</button>
				<?php endforeach; ?>
			</div>

			<div class="grid grid-4" id="products-grid">
				<?php foreach ( $agnsee_products as $product ) : ?>
					<?php $agnsee_product_img = agnsee_image_url( 'products/' . $product['slug'] ); ?>
					<a class="card" data-segment="<?php echo esc_attr( $product['segment'] ); ?>" href="<?php echo esc_url( home_url( '/produits/' . $product['slug'] . '/' ) ); ?>">
						<?php if ( $agnsee_product_img ) : ?>
							<img src="<?php echo esc_url( $agnsee_product_img ); ?>" alt="<?php echo esc_attr( $product['name'] ); ?>" style="width:100%;height:140px;object-fit:cover;border-radius:var(--radius-sm);margin-bottom:0.75rem;">
						<?php endif; ?>
						<div class="badge">
							<span class="lang-fr"><?php echo esc_html( $agnsee_segments[ $product['segment'] ]['fr'] ); ?></span>
							<span class="lang-en"><?php echo esc_html( $agnsee_segments[ $product['segment'] ]['en'] ); ?></span>
							<span class="lang-es"><?php echo esc_html( $agnsee_segments[ $product['segment'] ]['es'] ); ?></span>
						</div>
						<h4 style="margin-top:0.75rem;"><?php echo esc_html( $product['name'] ); ?></h4>
						<p>
							<span class="lang-fr"><?php echo esc_html( $product['fr'] ); ?></span>
							<span class="lang-en"><?php echo esc_html( $product['en'] ); ?></span>
							<span class="lang-es"><?php echo esc_html( $product['es'] ); ?></span>
						</p>
					</a>
				<?php endforeach; ?>
			</div>

			<p class="form-note" style="margin-top:2rem;">
				<span class="lang-fr">Agnsee agit à titre d'agent manufacturier : aucune commande n'est traitée en ligne. Contactez-nous pour toute demande d'achat ou de distribution.</span>
				<span class="lang-en">Agnsee acts as a manufacturer's representative: no orders are processed online. Contact us for any purchase or distribution inquiry.</span>
				<span class="lang-es">Agnsee actúa como agente manufacturero: no se procesan pedidos en línea. Contáctanos para cualquier solicitud de compra o distribución.</span>
			</p>

		</div>
	</section>

</main>

<script data-no-optimize="1">
( function () {
	'use strict';
	var buttons = document.querySelectorAll( '#segment-filters [data-segment-filter]' );
	var cards = document.querySelectorAll( '#products-grid [data-segment]' );

	buttons.forEach( function ( btn ) {
		btn.addEventListener( 'click', function () {
			var segment = btn.getAttribute( 'data-segment-filter' );

			buttons.forEach( function ( b ) {
				b.classList.remove( 'btn-primary' );
				b.classList.add( 'btn-secondary' );
			} );
			btn.classList.remove( 'btn-secondary' );
			btn.classList.add( 'btn-primary' );

			cards.forEach( function ( card ) {
				var show = 'all' === segment || card.getAttribute( 'data-segment' ) === segment;
				card.style.display = show ? '' : 'none';
			} );
		} );
	} );
} )();
</script>

<?php
get_footer();
