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
		'fr'      => "Nettoyant d'infrastructure d'irrigation à base de HOCl stabilisé — cible les dépôts minéraux et résidus nutritifs dans les lignes, goutteurs et réservoirs.",
		'en'      => 'Irrigation infrastructure cleaner based on stabilized HOCl — targets mineral and nutrient buildup in lines, drippers and tanks.',
		'es'      => 'Limpiador de infraestructura de irrigación a base de HOCl estabilizado — ataca depósitos minerales y residuos nutritivos en líneas, goteros y tanques.',
		'img'     => 'https://agnsee.ca/wp-content/uploads/2026/08/Safegrow-AG-Group-Packaging-4L-1000L-August-72026.png',
	),
	array(
		'slug'    => 'booster',
		'segment' => 'programmes',
		'name'    => 'Booster',
		'fr'      => "Extrait d'algues marines conçu pour s'intégrer aux programmes de culture en horticulture protégée.",
		'en'      => 'Marine seaweed extract designed to integrate into growing programs in protected horticulture.',
		'es'      => 'Extracto de algas marinas diseñado para integrarse a los programas de cultivo en horticultura protegida.',
		'img'     => 'https://agnsee.ca/wp-content/uploads/2026/08/Safegrow-Booster-4Litre-July-2026-1.png',
	),
	array(
		'slug'    => 'grow-genius',
		'segment' => 'programmes',
		'name'    => 'Grow Genius',
		'fr'      => "Concentré d'acide monosilicique à 40 %, conçu pour s'intégrer aux programmes de culture existants.",
		'en'      => '40% concentrated monosilicic acid, designed to integrate into existing growing programs.',
		'es'      => 'Concentrado de ácido monosilícico al 40 %, diseñado para integrarse a los programas de cultivo existentes.',
		'img'     => 'https://agnsee.ca/wp-content/uploads/2026/08/Grow-Genius-Mono-Silicic-Acid-40-—-500-ml_2.png',
	),
	array(
		'slug'    => 'safe-disinfectant',
		'segment' => 'disinfection',
		'name'    => 'Safe Disinfectant',
		'fr'      => "Désinfectant à base d'acide hypochloreux (HOCl) à 0,046 %, homologué par Santé Canada pour établissements de santé, locaux alimentaires et bâtiments d'élevage.",
		'en'      => 'Hypochlorous acid (HOCl) 0.046% disinfectant, Health Canada registered for healthcare facilities, food premises and barn settings.',
		'es'      => 'Desinfectante a base de ácido hipocloroso (HOCl) al 0,046 %, registrado ante Health Canada para instalaciones de salud, locales alimentarios y establos.',
		'img'     => 'https://agnsee.ca/wp-content/uploads/2026/08/safe-disinfectantGOOD.png',
	),
);

$agnsee_segments = array(
	'irrigation'   => array( 'fr' => "Traitement d'irrigation", 'en' => 'Irrigation treatment', 'es' => 'Tratamiento de irrigación' ),
	'programmes'   => array( 'fr' => 'Programmes de culture', 'en' => 'Growing programs', 'es' => 'Programas de cultivo' ),
	'disinfection' => array( 'fr' => 'Désinfection & assainissement', 'en' => 'Disinfection & sanitation', 'es' => 'Desinfección y saneamiento' ),
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

	<style>
	.pcf-section {
		position: relative;
		width: 100%;
		min-height: 720px;
		overflow: hidden;
		background: var(--color-bg-dark);
		color: var(--color-text-inverse);
		padding: var(--space-xl) 0;
	}
	.pcf-bg {
		position: absolute;
		inset: 0;
		z-index: 0;
		pointer-events: none;
	}
	.pcf-bg img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		filter: brightness(0.2) blur(36px);
		transform: scale(1.15);
		transition: opacity 900ms ease;
	}
	.pcf-bg::after {
		content: '';
		position: absolute;
		inset: 0;
		background: radial-gradient(circle at center, rgba(20, 24, 26, 0.35) 0%, rgba(20, 24, 26, 0.94) 100%);
	}
	.pcf-wrap {
		position: relative;
		z-index: 1;
		max-width: 1200px;
		margin: 0 auto;
		padding: 0 var(--space-md);
	}
	.pcf-stage {
		position: relative;
		width: 100%;
		height: 500px;
		display: flex;
		align-items: center;
		justify-content: center;
		perspective: 1400px;
		margin-bottom: var(--space-lg);
	}
	.pcf-card {
		position: absolute;
		width: 300px;
		height: 460px;
		border-radius: var(--radius-lg);
		overflow: hidden;
		background: #1c2022;
		border: 1px solid rgba(255, 255, 255, 0.12);
		transform-origin: center center;
		transition: transform 750ms cubic-bezier(0.25, 1, 0.5, 1), opacity 750ms cubic-bezier(0.25, 1, 0.5, 1), filter 750ms ease;
		cursor: pointer;
	}
	.pcf-card.is-center { cursor: default; }
	.pcf-card-img {
		position: absolute;
		inset: 0;
		width: 100%;
		height: 100%;
		object-fit: contain;
		background: #fff;
	}
	.pcf-card-overlay {
		position: absolute;
		inset: 0;
		background: linear-gradient(180deg, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0.05) 30%, rgba(0,0,0,0.72) 65%, rgba(0,0,0,0.94) 100%);
	}
	.pcf-card-content {
		position: relative;
		width: 100%;
		height: 100%;
		padding: 1.25rem 1.1rem 1.4rem;
		display: flex;
		flex-direction: column;
		justify-content: flex-end;
		align-items: center;
		text-align: center;
		opacity: 0;
		transform: translateY(14px);
		transition: opacity 450ms ease, transform 450ms ease;
	}
	.pcf-card.is-center .pcf-card-content { opacity: 1; transform: translateY(0); pointer-events: auto; }
	.pcf-card-tag {
		align-self: flex-end;
		font-size: 0.7rem;
		font-weight: 600;
		letter-spacing: 0.06em;
		text-transform: uppercase;
		color: rgba(255,255,255,0.85);
		margin-bottom: auto;
	}
	.pcf-card-title {
		font-size: 1.4rem;
		font-weight: 800;
		color: #fff;
		margin: 0 0 0.4rem;
		line-height: 1.15;
	}
	.pcf-card-divider {
		width: 30px;
		height: 2px;
		background: rgba(255,255,255,0.55);
		border-radius: 2px;
		margin: 0 0 0.6rem;
	}
	.pcf-card-desc {
		font-size: 0.82rem;
		color: rgba(255,255,255,0.82);
		max-width: 270px;
		margin: 0 0 0.9rem;
		line-height: 1.4;
	}
	.pcf-card-cta {
		display: inline-flex;
		align-items: center;
		gap: 6px;
		padding: 0.55rem 1.2rem;
		border-radius: 9999px;
		background: #fff;
		color: #0c0f10;
		font-size: 0.72rem;
		font-weight: 700;
		letter-spacing: 0.08em;
		text-transform: uppercase;
		text-decoration: none;
		transition: background 200ms ease;
	}
	.pcf-card-cta:hover { background: rgba(255,255,255,0.85); }
	.pcf-nav-btn {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		width: 44px;
		height: 44px;
		border-radius: 50%;
		background: rgba(255,255,255,0.1);
		border: 1px solid rgba(255,255,255,0.2);
		color: #fff;
		display: flex;
		align-items: center;
		justify-content: center;
		cursor: pointer;
		z-index: 5;
		transition: background 200ms ease;
	}
	.pcf-nav-btn:hover { background: rgba(255,255,255,0.2); }
	.pcf-prev { left: 0; }
	.pcf-next { right: 0; }
	.pcf-dots {
		display: flex;
		align-items: center;
		justify-content: center;
		gap: 8px;
	}
	.pcf-dot {
		height: 8px;
		width: 8px;
		border-radius: 9999px;
		background: rgba(255,255,255,0.28);
		border: none;
		cursor: pointer;
		padding: 0;
		transition: width 300ms ease, background 300ms ease;
	}
	.pcf-dot.is-active { width: 26px; background: #fff; }
	@media (max-width: 782px) {
		.pcf-section { min-height: 620px; }
		.pcf-stage { height: 420px; }
		.pcf-card { width: 240px; height: 380px; }
		.pcf-nav-btn { display: none; }
	}
	@media (prefers-reduced-motion: reduce) {
		.pcf-card { transition: none; }
	}
	</style>

	<section class="pcf-section" id="products-coverflow" aria-roledescription="carousel">
		<div class="pcf-bg"><img src="<?php echo esc_url( $agnsee_products[0]['img'] ); ?>" alt="" id="pcf-bg-img"></div>
		<div class="pcf-wrap">
			<div class="pcf-stage" id="pcf-stage">
				<?php foreach ( $agnsee_products as $agnsee_i => $product ) : ?>
					<?php $agnsee_product_img = agnsee_image_url( 'products/' . $product['slug'] ); ?>
					<?php if ( ! $agnsee_product_img && ! empty( $product['img'] ) ) : ?>
						<?php $agnsee_product_img = $product['img']; ?>
					<?php endif; ?>
					<div class="pcf-card" data-index="<?php echo (int) $agnsee_i; ?>" data-img="<?php echo esc_attr( $agnsee_product_img ); ?>">
						<?php if ( $agnsee_product_img ) : ?>
							<img class="pcf-card-img" src="<?php echo esc_url( $agnsee_product_img ); ?>" alt="<?php echo esc_attr( $product['name'] ); ?>">
						<?php endif; ?>
						<div class="pcf-card-overlay"></div>
						<div class="pcf-card-content">
							<div class="pcf-card-tag">
								<span class="lang-fr"><?php echo esc_html( $agnsee_segments[ $product['segment'] ]['fr'] ); ?></span>
								<span class="lang-en"><?php echo esc_html( $agnsee_segments[ $product['segment'] ]['en'] ); ?></span>
								<span class="lang-es"><?php echo esc_html( $agnsee_segments[ $product['segment'] ]['es'] ); ?></span>
							</div>
							<h3 class="pcf-card-title"><?php echo esc_html( $product['name'] ); ?></h3>
							<div class="pcf-card-divider"></div>
							<p class="pcf-card-desc">
								<span class="lang-fr"><?php echo esc_html( $product['fr'] ); ?></span>
								<span class="lang-en"><?php echo esc_html( $product['en'] ); ?></span>
								<span class="lang-es"><?php echo esc_html( $product['es'] ); ?></span>
							</p>
							<a class="pcf-card-cta" href="<?php echo esc_url( home_url( '/produits/' . $product['slug'] . '/' ) ); ?>">
								<span class="lang-fr">Découvrir</span><span class="lang-en">Discover</span><span class="lang-es">Descubrir</span>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<button type="button" class="pcf-nav-btn pcf-prev" id="pcf-prev" aria-label="<?php esc_attr_e( 'Produit précédent' ); ?>">
				<svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
			</button>
			<button type="button" class="pcf-nav-btn pcf-next" id="pcf-next" aria-label="<?php esc_attr_e( 'Produit suivant' ); ?>">
				<svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
			</button>

			<div class="pcf-dots" id="pcf-dots">
				<?php foreach ( $agnsee_products as $agnsee_i => $product ) : ?>
					<button type="button" class="pcf-dot<?php echo 0 === $agnsee_i ? ' is-active' : ''; ?>" data-index="<?php echo (int) $agnsee_i; ?>" aria-label="<?php echo esc_attr( $product['name'] ); ?>"></button>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section" style="padding-top:var(--space-lg);">
		<div class="container">
			<p class="form-note" style="text-align:center;">
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

	var stage   = document.getElementById( 'pcf-stage' );
	var cards   = Array.prototype.slice.call( stage.querySelectorAll( '.pcf-card' ) );
	var dots    = Array.prototype.slice.call( document.querySelectorAll( '#pcf-dots .pcf-dot' ) );
	var prevBtn = document.getElementById( 'pcf-prev' );
	var nextBtn = document.getElementById( 'pcf-next' );
	var bgImg   = document.getElementById( 'pcf-bg-img' );
	var total   = cards.length;
	var current = 0;
	var reduced = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	var timer   = null;

	var OFFSETS = {
		0: { x: 0,    scale: 1,    z: 30, opacity: 1,    blur: 0 },
		1: { x: 250,  scale: 0.82, z: 20, opacity: 0.6,  blur: 0 },
		2: { x: 440,  scale: 0.66, z: 10, opacity: 0.3,  blur: 1 },
		'-1': { x: -250, scale: 0.82, z: 20, opacity: 0.6, blur: 0 },
		'-2': { x: -440, scale: 0.66, z: 10, opacity: 0.3, blur: 1 }
	};

	function render() {
		cards.forEach( function ( card, idx ) {
			var raw = idx - current;
			if ( raw > total / 2 ) { raw -= total; }
			if ( raw < -total / 2 ) { raw += total; }

			var key = String( raw );
			var cfg = OFFSETS[ key ];
			var isCenter = 0 === raw;

			card.classList.toggle( 'is-center', isCenter );

			if ( ! cfg ) {
				card.style.transform = 'translateX(0) scale(0.3)';
				card.style.opacity   = '0';
				card.style.zIndex    = '0';
				card.style.filter    = 'brightness(0.4)';
				return;
			}

			card.style.transform = 'translateX(' + cfg.x + 'px) scale(' + cfg.scale + ')';
			card.style.opacity   = String( cfg.opacity );
			card.style.zIndex    = String( cfg.z );
			card.style.filter    = isCenter ? 'brightness(1)' : 'brightness(' + ( 1 - cfg.blur * 0.15 - 0.25 ) + ') blur(' + cfg.blur + 'px)';
		} );

		dots.forEach( function ( dot, idx ) {
			dot.classList.toggle( 'is-active', idx === current );
		} );

		if ( bgImg ) {
			var newSrc = cards[ current ].getAttribute( 'data-img' );
			if ( newSrc ) { bgImg.src = newSrc; }
		}
	}

	function goTo( idx ) {
		current = ( idx + total ) % total;
		render();
	}

	function next() { goTo( current + 1 ); }
	function prev() { goTo( current - 1 ); }

	function startAutoplay() {
		if ( reduced || total <= 1 ) { return; }
		stopAutoplay();
		timer = setInterval( next, 5000 );
	}
	function stopAutoplay() {
		if ( timer ) { clearInterval( timer ); timer = null; }
	}

	prevBtn.addEventListener( 'click', function () { prev(); startAutoplay(); } );
	nextBtn.addEventListener( 'click', function () { next(); startAutoplay(); } );

	dots.forEach( function ( dot ) {
		dot.addEventListener( 'click', function () {
			goTo( parseInt( dot.getAttribute( 'data-index' ), 10 ) );
			startAutoplay();
		} );
	} );

	cards.forEach( function ( card ) {
		card.addEventListener( 'click', function () {
			if ( ! card.classList.contains( 'is-center' ) ) {
				goTo( parseInt( card.getAttribute( 'data-index' ), 10 ) );
				startAutoplay();
			}
		} );
	} );

	stage.addEventListener( 'mouseenter', stopAutoplay );
	stage.addEventListener( 'mouseleave', startAutoplay );

	document.addEventListener( 'keydown', function ( e ) {
		if ( 'ArrowLeft' === e.key ) { prev(); startAutoplay(); }
		if ( 'ArrowRight' === e.key ) { next(); startAutoplay(); }
	} );

	var touchStartX = 0;
	stage.addEventListener( 'touchstart', function ( e ) {
		touchStartX = e.touches[0].clientX;
	}, { passive: true } );
	stage.addEventListener( 'touchend', function ( e ) {
		var diff = e.changedTouches[0].clientX - touchStartX;
		if ( Math.abs( diff ) > 45 ) {
			if ( diff < 0 ) { next(); } else { prev(); }
			startAutoplay();
		}
	}, { passive: true } );

	render();
	startAutoplay();
} )();
</script>

<?php
get_footer();
