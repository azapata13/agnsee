<?php
/**
 * Template Name: Accueil
 * Template pour la page d'accueil — à assigner comme page statique de front
 * (Réglages > Lecture) sur la page utilisant ce modèle.
 */

get_header();
?>

<main id="main-content" class="site-main">

	<!-- Hero -->
	<?php
	$agnsee_hero_video  = agnsee_hero_video_url();
	$agnsee_hero_poster = agnsee_hero_poster_url();
	?>
	<?php if ( $agnsee_hero_video ) : ?>
		<section class="hero-video">
			<video
				class="hero-video-bg"
				data-no-optimize="1"
				src="<?php echo esc_url( $agnsee_hero_video ); ?>"
				<?php echo $agnsee_hero_poster ? 'poster="' . esc_url( $agnsee_hero_poster ) . '"' : ''; ?>
				muted
				autoplay
				loop
				playsinline
				preload="auto"
			></video>
			<div class="hero-video-overlay"></div>
			<div class="hero-video-content">
				<div class="hero-video-eyebrow">
					<span class="lang-fr">Agent manufacturier</span>
					<span class="lang-en">Manufacturer's representative</span>
					<span class="lang-es">Agente manufacturero</span>
				</div>
				<h1 class="hero-video-title">
					<span class="lang-fr">L'horticulture protégée, propulsée par la bonne technologie</span>
					<span class="lang-en">Protected horticulture, powered by the right technology</span>
					<span class="lang-es">Horticultura protegida, impulsada por la tecnología adecuada</span>
				</h1>
				<p class="hero-video-lead">
					<span class="lang-fr">Nous représentons des produits techniques sélectionnés pour les serres et la culture intérieure, et connectons les fabricants aux distributeurs et acheteurs institutionnels.</span>
					<span class="lang-en">We represent carefully selected technical products for greenhouses and indoor growing, connecting manufacturers with distributors and institutional buyers.</span>
					<span class="lang-es">Representamos productos técnicos cuidadosamente seleccionados para invernaderos y cultivo interior, conectando fabricantes con distribuidores y compradores institucionales.</span>
				</p>
				<div class="hero-video-actions">
					<a class="btn btn-hero-solid" href="<?php echo esc_url( home_url( '/produits/' ) ); ?>">
						<span class="lang-fr">Voir nos produits</span><span class="lang-en">View our products</span><span class="lang-es">Ver nuestros productos</span>
					</a>
					<a class="btn btn-glass" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
						<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span><span class="lang-es">Contáctanos</span>
					</a>
				</div>
			</div>
		</section>
	<?php else : ?>
		<section class="hero">
			<div class="container">
				<div class="eyebrow hero-eyebrow">
					<span class="lang-fr">Agent manufacturier</span>
					<span class="lang-en">Manufacturer's representative</span>
					<span class="lang-es">Agente manufacturero</span>
				</div>
				<h1>
					<span class="lang-fr">Agent manufacturier pour l'horticulture protégée</span>
					<span class="lang-en">Manufacturer's representative for protected horticulture</span>
					<span class="lang-es">Agente manufacturero para la horticultura protegida</span>
				</h1>
				<p class="hero-lead">
					<span class="lang-fr">Nous représentons des produits techniques sélectionnés pour les serres et la culture intérieure, et connectons les fabricants aux distributeurs et acheteurs institutionnels.</span>
					<span class="lang-en">We represent carefully selected technical products for greenhouses and indoor growing, connecting manufacturers with distributors and institutional buyers.</span>
					<span class="lang-es">Representamos productos técnicos cuidadosamente seleccionados para invernaderos y cultivo interior, conectando fabricantes con distribuidores y compradores institucionales.</span>
				</p>
				<div class="hero-actions">
					<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/produits/' ) ); ?>">
						<span class="lang-fr">Voir nos produits</span><span class="lang-en">View our products</span><span class="lang-es">Ver nuestros productos</span>
					</a>
					<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
						<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span><span class="lang-es">Contáctanos</span>
					</a>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Un fabricant, un monde de distributeurs — hero vidéo scrub au scroll -->
	<?php
	$agnsee_metro_video = agnsee_video_url( 'metro-hero' );
	if ( ! $agnsee_metro_video ) {
		$agnsee_metro_video = 'https://agnsee.ca/wp-content/uploads/2026/08/Generated-Video-August-28-2026-1_44PM.mp4';
	}
	?>
	<style>
	.mh-wrapper {
		position: relative;
		height: 300vh;
		width: 100%;
	}
	.mh-section {
		position: sticky;
		top: 0;
		height: 100dvh;
		width: 100%;
		overflow: hidden;
		background: #05070d;
	}
	.mh-video {
		position: absolute;
		inset: 0;
		width: 100%;
		height: 100%;
		object-fit: cover;
		opacity: 0;
		transform-origin: center center;
		will-change: transform;
		transition: opacity 0.6s ease;
	}
	.mh-section.is-ready .mh-video { opacity: 1; }
	.mh-overlay {
		position: absolute;
		inset: 0;
		background: linear-gradient(180deg, rgba(5,7,13,0.4) 0%, rgba(5,7,13,0.05) 30%, rgba(5,7,13,0.2) 65%, rgba(5,7,13,0.6) 100%);
		pointer-events: none;
	}
	.mh-title,
	.mh-tagline {
		position: absolute;
		inset: 0;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		text-align: center;
		padding: 0 6%;
		pointer-events: none;
	}
	.mh-title {
		font-family: var(--font-family);
		font-weight: 800;
		font-size: clamp(28px, 6vw, 88px);
		line-height: 1.08;
		letter-spacing: -0.02em;
		color: #f5f5f7;
		text-shadow: 0 4px 30px rgba(0,0,0,0.5);
		max-width: 960px;
		margin: 0 auto;
	}
	.mh-tagline {
		opacity: 0;
	}
	.mh-tagline-text {
		font-family: var(--font-family);
		font-weight: 700;
		font-size: clamp(19px, 3.2vw, 38px);
		line-height: 1.25;
		letter-spacing: -0.01em;
		color: #f5f5f7;
		text-shadow: 0 4px 24px rgba(0,0,0,0.5);
		max-width: 760px;
		margin: 0 auto 1.5rem;
	}
	.mh-cta {
		pointer-events: auto;
	}
	.mh-hint {
		position: absolute;
		left: 50%;
		bottom: clamp(20px, 6vh, 48px);
		transform: translateX(-50%);
		display: flex;
		flex-direction: column;
		align-items: center;
		gap: 8px;
		color: rgba(245,245,247,0.75);
		font-family: var(--font-family);
		font-size: clamp(10px, 1.4vw, 12px);
		font-weight: 600;
		letter-spacing: 0.3em;
		text-transform: uppercase;
		transition: opacity 0.4s ease;
		pointer-events: none;
	}
	.mh-hint svg { animation: mh-bounce 1.6s ease-in-out infinite; }
	@keyframes mh-bounce {
		0%, 100% { transform: translateY(0); opacity: 0.5; }
		50% { transform: translateY(5px); opacity: 1; }
	}
	.mh-progress-track {
		position: absolute;
		left: 0;
		right: 0;
		bottom: 0;
		height: 2px;
		background: rgba(255,255,255,0.12);
	}
	.mh-progress-bar {
		height: 100%;
		width: 100%;
		background: linear-gradient(90deg, rgba(255,255,255,0.5), rgba(255,255,255,0.95));
		transform: scaleX(0);
		transform-origin: left center;
	}
	@media (max-width: 782px) {
		.mh-title { font-size: clamp(24px, 8vw, 44px); }
		.mh-tagline-text { font-size: clamp(17px, 5vw, 24px); }
	}
	@media (prefers-reduced-motion: reduce) {
		.mh-video, .mh-title, .mh-tagline { transition: none; }
	}
	</style>

	<div class="mh-wrapper" id="metro-hero-wrapper">
		<section class="mh-section" id="metro-hero">
			<video class="mh-video" id="metro-hero-video" data-no-optimize="1" src="<?php echo esc_url( $agnsee_metro_video ); ?>" muted playsinline preload="auto"></video>
			<div class="mh-overlay"></div>

			<div class="mh-title" id="metro-hero-title">
				<span class="lang-fr">Un fabricant. Un monde de distributeurs.</span>
				<span class="lang-en">One manufacturer. A world of distributors.</span>
				<span class="lang-es">Un fabricante. Un mundo de distribuidores.</span>
			</div>

			<div class="mh-tagline" id="metro-hero-tagline">
				<div class="mh-tagline-text">
					<span class="lang-fr">Agnsee ouvre la voie à l'international.</span>
					<span class="lang-en">Agnsee opens the way, worldwide.</span>
					<span class="lang-es">Agnsee abre el camino a nivel internacional.</span>
				</div>
				<a class="btn btn-hero-solid mh-cta" href="<?php echo esc_url( home_url( '/produits/' ) ); ?>">
					<span class="lang-fr">Voir nos produits</span><span class="lang-en">View our products</span><span class="lang-es">Ver nuestros productos</span>
				</a>
			</div>

			<div class="mh-hint" id="metro-hero-hint">
				<span class="lang-fr">Défiler</span><span class="lang-en">Scroll</span><span class="lang-es">Desplazar</span>
				<svg width="14" height="18" viewBox="0 0 14 18">
					<path d="M7 1 L7 17 M2 12 L7 17 L12 12" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</div>

			<div class="mh-progress-track">
				<div class="mh-progress-bar" id="metro-hero-progress"></div>
			</div>
		</section>
	</div>

	<script data-no-optimize="1">
	( function () {
		'use strict';

		var wrapper  = document.getElementById( 'metro-hero-wrapper' );
		var section  = document.getElementById( 'metro-hero' );
		var video    = document.getElementById( 'metro-hero-video' );
		var titleEl  = document.getElementById( 'metro-hero-title' );
		var taglineEl = document.getElementById( 'metro-hero-tagline' );
		var hintEl   = document.getElementById( 'metro-hero-hint' );
		var progressEl = document.getElementById( 'metro-hero-progress' );
		if ( ! wrapper || ! section || ! video ) { return; }

		var reduceMotion = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

		function clamp( v, min, max ) { return Math.min( max, Math.max( min, v ) ); }

		if ( reduceMotion ) {
			if ( titleEl ) { titleEl.style.opacity = '0'; }
			if ( taglineEl ) { taglineEl.style.opacity = '1'; taglineEl.style.transform = 'none'; taglineEl.style.filter = 'none'; }
			if ( hintEl ) { hintEl.style.opacity = '0'; }
			section.classList.add( 'is-ready' );
			return;
		}

		// Technique standard "sticky + hauteur de scroll dédiée" : le
		// wrapper fait 300vh, la section reste collée en haut (CSS
		// position:sticky) le temps que le scroll natif traverse cette
		// hauteur, puis se libère toute seule — aucune capture de
		// wheel/touch ni verrouillage manuel du body nécessaire, donc
		// aucun risque de rester coincé.
		var duration = 0;
		var targetProgress = 0;
		var currentProgress = 0;
		var isSeeking = false;
		var pendingTime = null;
		var rafId = 0;

		video.addEventListener( 'loadeddata', function () {
			duration = video.duration || 0;
			section.classList.add( 'is-ready' );
			try {
				var p = video.play();
				if ( p && p.then ) { p.then( function () { video.pause(); } ).catch( function () {} ); }
			} catch ( e ) {}
		} );

		video.addEventListener( 'seeked', function () {
			isSeeking = false;
			if ( pendingTime !== null ) {
				var t = pendingTime;
				pendingTime = null;
				isSeeking = true;
				video.currentTime = t;
			}
		} );

		function seekTo( t ) {
			if ( isSeeking ) { pendingTime = t; return; }
			isSeeking = true;
			try { video.currentTime = t; } catch ( e ) { isSeeking = false; }
		}

		function updateProgress() {
			var rect = wrapper.getBoundingClientRect();
			var scrollable = wrapper.offsetHeight - window.innerHeight;
			if ( scrollable <= 0 ) { targetProgress = 0; return; }
			targetProgress = clamp( -rect.top / scrollable, 0, 1 );
		}

		window.addEventListener( 'scroll', updateProgress, { passive: true } );
		window.addEventListener( 'resize', updateProgress, { passive: true } );
		updateProgress();

		function render() {
			currentProgress += ( targetProgress - currentProgress ) * 0.18;
			if ( Math.abs( targetProgress - currentProgress ) < 0.0005 ) { currentProgress = targetProgress; }

			if ( duration > 0 ) { seekTo( currentProgress * duration ); }

			video.style.transform = 'scale(' + ( 1 + currentProgress * 0.08 ) + ')';

			if ( titleEl ) {
				var t1 = 1 - clamp( currentProgress / 0.35, 0, 1 );
				titleEl.style.opacity = String( t1 );
				titleEl.style.transform = 'translateY(' + ( ( 1 - t1 ) * -24 ) + 'px) scale(' + ( 0.96 + t1 * 0.04 ) + ')';
				titleEl.style.filter = 'blur(' + ( ( 1 - t1 ) * 10 ) + 'px)';
			}
			if ( hintEl ) {
				hintEl.style.opacity = currentProgress > 0.02 ? '0' : '1';
			}
			if ( taglineEl ) {
				var t2 = clamp( ( currentProgress - 0.8 ) / 0.2, 0, 1 );
				taglineEl.style.opacity = String( t2 );
				taglineEl.style.transform = 'translateY(' + ( ( 1 - t2 ) * 20 ) + 'px) scale(' + ( 0.97 + t2 * 0.03 ) + ')';
				taglineEl.style.filter = 'blur(' + ( ( 1 - t2 ) * 8 ) + 'px)';
			}
			if ( progressEl ) {
				progressEl.style.transform = 'scaleX(' + currentProgress + ')';
			}

			rafId = requestAnimationFrame( render );
		}

		rafId = requestAnimationFrame( render );
	} )();
	</script>

	<!-- Notre rôle -->
	<?php $agnsee_role_video = 'https://agnsee.ca/wp-content/uploads/2026/08/Video-Project-2.mp4'; ?>
	<section class="section section-alt">
		<div class="container">
			<div class="grid grid-3">

				<div class="role-card">
					<span class="role-number">01</span>
					<h3>
						<span class="lang-fr">Sourcing exclusif</span>
						<span class="lang-en">Exclusive sourcing</span>
						<span class="lang-es">Abastecimiento exclusivo</span>
					</h3>
					<p>
						<span class="lang-fr">Une sélection rigoureuse de produits techniques auprès de fabricants spécialisés, avec représentation exclusive sur le marché canadien.</span>
						<span class="lang-en">A rigorous selection of technical products from specialized manufacturers, with exclusive representation across the Canadian market.</span>
						<span class="lang-es">Una selección rigurosa de productos técnicos de fabricantes especializados, con representación exclusiva en el mercado canadiense.</span>
					</p>
				</div>

				<div class="role-card">
					<span class="role-number">02</span>
					<h3>
						<span class="lang-fr">Expertise technique</span>
						<span class="lang-en">Technical expertise</span>
						<span class="lang-es">Experiencia técnica</span>
					</h3>
					<p>
						<span class="lang-fr">Une compréhension approfondie des enjeux de la culture protégée pour orienter chaque client vers la bonne solution.</span>
						<span class="lang-en">A deep understanding of protected-crop challenges to guide every client toward the right solution.</span>
						<span class="lang-es">Un conocimiento profundo de los desafíos del cultivo protegido para guiar a cada cliente hacia la solución adecuada.</span>
					</p>
				</div>

				<div class="role-card">
					<span class="role-number">03</span>
					<h3>
						<span class="lang-fr">Support terrain</span>
						<span class="lang-en">Field support</span>
						<span class="lang-es">Soporte en campo</span>
					</h3>
					<p>
						<span class="lang-fr">Un accompagnement direct — dosage, installation, mise en service — auprès des distributeurs et acheteurs institutionnels.</span>
						<span class="lang-en">Hands-on support — dosing, installation, commissioning — for distributors and institutional buyers.</span>
						<span class="lang-es">Acompañamiento directo — dosificación, instalación, puesta en marcha — para distribuidores y compradores institucionales.</span>
					</p>
				</div>

			</div>

			<video class="role-video-small" data-no-optimize="1" src="<?php echo esc_url( $agnsee_role_video ); ?>" muted autoplay loop playsinline preload="auto"></video>
		</div>
	</section>

	<!-- Produits en vedette -->
	<?php
	$agnsee_brands_photos = array(
		0 => 'https://agnsee.ca/wp-content/uploads/2026/08/Safegrow-AG-Group-Packaging-4L-1000L-August-72026.png',
		1 => 'https://agnsee.ca/wp-content/uploads/2026/08/Safegrow-Booster-4Litre-July-2026-1.png',
		2 => 'https://agnsee.ca/wp-content/uploads/2026/08/Grow-Genius-Mono-Silicic-Acid-40-—-500-ml_2.png',
		3 => 'https://agnsee.ca/wp-content/uploads/2026/08/safe-disinfectantGOOD.png',
	);
	?>
	<style>
	#hort-brands {
	  padding: 100px 0;
	  background: #fff;
	  border-top: 1px solid #f0f0f0;
	}
	.hort-brands__head { text-align: center; margin-bottom: 72px; }
	.hort-brands__eyebrow { display: inline-block; font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: rgba(0,0,0,.38); margin-bottom: 14px; }
	.hort-brands__title { font-size: clamp(28px, 4vw, 40px); font-weight: 800; color: #0d0d0d; line-height: 1.18; margin-bottom: 14px; }
	.hort-brands__sub { font-size: 16px; color: #666; max-width: 520px; margin: 0 auto; line-height: 1.65; }
	.hort-brands__layout { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start; max-width: 1100px; margin: 0 auto; padding: 0 24px; }
	.hort-brands__sticky { position: sticky; top: 100px; height: 480px; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,.1); }
	.hort-brands__img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: center; z-index: 0; opacity: 0; transition: opacity .5s ease; }
	.hort-brands__img.is-active { opacity: 1; z-index: 1; }
	.hort-brands__items { padding: 15vh 0; display: flex; flex-direction: column; gap: 28vh; }
	.hort-brands__item { opacity: .32; transform: translateY(16px); transition: opacity .5s ease, transform .5s ease; }
	.hort-brands__item.is-active { opacity: 1; transform: translateY(0); }
	.hort-brands__item-tag { display: inline-block; font-size: 10px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; color: rgba(0,0,0,.35); margin-bottom: 12px; }
	.hort-brands__item-name { font-size: clamp(22px, 3vw, 30px); font-weight: 800; color: #0d0d0d; line-height: 1.15; margin-bottom: 14px; }
	.hort-brands__item-desc { font-size: 15px; color: #555; line-height: 1.7; max-width: 440px; margin-bottom: 24px; }
	.hort-brands__item-link { display: inline-flex; align-items: center; gap: 7px; font-size: 13px; font-weight: 600; color: #111; text-decoration: none; border-bottom: 1.5px solid rgba(0,0,0,.18); padding-bottom: 2px; transition: border-color .2s, gap .2s; }
	.hort-brands__item-link:hover { border-color: #111; gap: 10px; }
	.hort-brands__m-video, .hort-brands__m-img { width: 100%; aspect-ratio: 4/3; object-fit: cover; border-radius: 16px; box-shadow: 0 8px 32px rgba(0,0,0,.1); margin-bottom: 8px; }
	.hort-brands__img-placeholder, .hort-brands__m-img-placeholder { display: flex; align-items: center; justify-content: center; background: #f1f2f3; color: rgba(0,0,0,.3); font-size: 15px; font-weight: 700; letter-spacing: .04em; text-transform: uppercase; }
	@media (max-width: 800px) {
	  .hort-brands__layout { display: none; }
	  .hort-brands__mobile { display: flex; flex-direction: column; gap: 48px; padding: 0 20px; }
	  .hort-brands__m-item { display: flex; flex-direction: column; gap: 20px; }
	  .hort-brands__m-name { font-size: 22px; font-weight: 800; color: #0d0d0d; margin-bottom: 8px; line-height: 1.2; }
	  .hort-brands__m-desc { font-size: 14px; color: #555; line-height: 1.65; margin-bottom: 16px; }
	}
	@media (min-width: 801px) { .hort-brands__mobile { display: none; } }
	</style>

	<section id="hort-brands">
		<div class="hort-brands__head container">
			<span class="hort-brands__eyebrow">
				<span class="lang-fr">Produits</span><span class="lang-en">Products</span><span class="lang-es">Productos</span>
			</span>
			<h2 class="hort-brands__title">
				<span class="lang-fr">Produits en vedette</span>
				<span class="lang-en">Featured products</span>
				<span class="lang-es">Productos destacados</span>
			</h2>
			<p class="hort-brands__sub">
				<span class="lang-fr">Des produits techniques sélectionnés pour l'horticulture protégée, représentés en exclusivité au Canada.</span>
				<span class="lang-en">Technical products selected for protected horticulture, exclusively represented across Canada.</span>
				<span class="lang-es">Productos técnicos seleccionados para la horticultura protegida, representados en exclusiva en Canadá.</span>
			</p>
		</div>

		<!-- Desktop -->
		<div class="hort-brands__layout">
			<div class="hort-brands__sticky" id="hort-brands-sticky">
				<img class="hort-brands__img is-active" data-brand-img="0" src="<?php echo esc_url( $agnsee_brands_photos[0] ); ?>" alt="SafeGrow AG">
				<img class="hort-brands__img" data-brand-img="1" src="<?php echo esc_url( $agnsee_brands_photos[1] ); ?>" alt="Booster">
				<img class="hort-brands__img" data-brand-img="2" src="<?php echo esc_url( $agnsee_brands_photos[2] ); ?>" alt="Grow Genius">
				<img class="hort-brands__img" data-brand-img="3" src="<?php echo esc_url( $agnsee_brands_photos[3] ); ?>" alt="Safe Disinfectant">
			</div>

			<div class="hort-brands__items" id="hort-brands-items">

				<div class="hort-brands__item is-active" data-brand="0">
					<span class="hort-brands__item-tag"><span class="lang-fr">Traitement d'irrigation</span><span class="lang-en">Irrigation treatment</span><span class="lang-es">Tratamiento de irrigación</span></span>
					<h3 class="hort-brands__item-name">SafeGrow AG</h3>
					<p class="hort-brands__item-desc">
						<span class="lang-fr">Nettoyant d'infrastructure d'irrigation à base de HOCl stabilisé.</span>
						<span class="lang-en">Irrigation infrastructure cleaner based on stabilized HOCl.</span>
						<span class="lang-es">Limpiador de infraestructura de irrigación a base de HOCl estabilizado.</span>
					</p>
					<a href="<?php echo esc_url( home_url( '/produits/safegrow-ag/' ) ); ?>" class="hort-brands__item-link">
						<span class="lang-fr">Découvrir SafeGrow AG</span><span class="lang-en">Discover SafeGrow AG</span><span class="lang-es">Descubrir SafeGrow AG</span>
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
					</a>
				</div>

				<div class="hort-brands__item" data-brand="1">
					<span class="hort-brands__item-tag"><span class="lang-fr">Extrait d'algues</span><span class="lang-en">Seaweed extract</span><span class="lang-es">Extracto de algas</span></span>
					<h3 class="hort-brands__item-name">Booster</h3>
					<p class="hort-brands__item-desc">
						<span class="lang-fr">Extrait d'algues marines pour programmes de culture.</span>
						<span class="lang-en">Marine seaweed extract for growing programs.</span>
						<span class="lang-es">Extracto de algas marinas para programas de cultivo.</span>
					</p>
					<a href="<?php echo esc_url( home_url( '/produits/booster/' ) ); ?>" class="hort-brands__item-link">
						<span class="lang-fr">Découvrir Booster</span><span class="lang-en">Discover Booster</span><span class="lang-es">Descubrir Booster</span>
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
					</a>
				</div>

				<div class="hort-brands__item" data-brand="2">
					<span class="hort-brands__item-tag"><span class="lang-fr">Acide monosilicique</span><span class="lang-en">Monosilicic acid</span><span class="lang-es">Ácido monosilícico</span></span>
					<h3 class="hort-brands__item-name">Grow Genius</h3>
					<p class="hort-brands__item-desc">
						<span class="lang-fr">Acide monosilicique concentré à 40 %.</span>
						<span class="lang-en">40% concentrated monosilicic acid.</span>
						<span class="lang-es">Ácido monosilícico concentrado al 40 %.</span>
					</p>
					<a href="<?php echo esc_url( home_url( '/produits/grow-genius/' ) ); ?>" class="hort-brands__item-link">
						<span class="lang-fr">Découvrir Grow Genius</span><span class="lang-en">Discover Grow Genius</span><span class="lang-es">Descubrir Grow Genius</span>
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
					</a>
				</div>

				<div class="hort-brands__item" data-brand="3">
					<span class="hort-brands__item-tag"><span class="lang-fr">Homologué Santé Canada</span><span class="lang-en">Health Canada registered</span><span class="lang-es">Registrado ante Health Canada</span></span>
					<h3 class="hort-brands__item-name">Safe Disinfectant</h3>
					<p class="hort-brands__item-desc">
						<span class="lang-fr">Acide hypochloreux à 0,046 %, pour établissements de santé, locaux alimentaires, usage institutionnel/industriel et bâtiments d'élevage.</span>
						<span class="lang-en">0.046% hypochlorous acid, for healthcare facilities, food premises, institutional/industrial and barn use.</span>
						<span class="lang-es">Ácido hipocloroso al 0,046 %, para instalaciones de salud, locales alimentarios, uso institucional/industrial y establos.</span>
					</p>
					<a href="<?php echo esc_url( home_url( '/produits/safe-disinfectant/' ) ); ?>" class="hort-brands__item-link">
						<span class="lang-fr">Découvrir Safe Disinfectant</span><span class="lang-en">Discover Safe Disinfectant</span><span class="lang-es">Descubrir Safe Disinfectant</span>
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
					</a>
				</div>

			</div>
		</div>

		<!-- Mobile -->
		<div class="hort-brands__mobile">

			<div class="hort-brands__m-item">
				<img class="hort-brands__m-img" src="<?php echo esc_url( $agnsee_brands_photos[0] ); ?>" alt="SafeGrow AG">
				<div>
					<span class="hort-brands__item-tag"><span class="lang-fr">Traitement d'irrigation</span><span class="lang-en">Irrigation treatment</span><span class="lang-es">Tratamiento de irrigación</span></span>
					<h3 class="hort-brands__m-name">SafeGrow AG</h3>
					<p class="hort-brands__m-desc">
						<span class="lang-fr">Nettoyant d'infrastructure d'irrigation à base de HOCl stabilisé.</span>
						<span class="lang-en">Irrigation infrastructure cleaner based on stabilized HOCl.</span>
						<span class="lang-es">Limpiador de infraestructura de irrigación a base de HOCl estabilizado.</span>
					</p>
					<a href="<?php echo esc_url( home_url( '/produits/safegrow-ag/' ) ); ?>" class="hort-brands__item-link">
						<span class="lang-fr">Découvrir SafeGrow AG</span><span class="lang-en">Discover SafeGrow AG</span><span class="lang-es">Descubrir SafeGrow AG</span> →
					</a>
				</div>
			</div>

			<div class="hort-brands__m-item">
				<img class="hort-brands__m-img" src="<?php echo esc_url( $agnsee_brands_photos[1] ); ?>" alt="Booster">
				<div>
					<span class="hort-brands__item-tag"><span class="lang-fr">Extrait d'algues</span><span class="lang-en">Seaweed extract</span><span class="lang-es">Extracto de algas</span></span>
					<h3 class="hort-brands__m-name">Booster</h3>
					<p class="hort-brands__m-desc">
						<span class="lang-fr">Extrait d'algues marines pour programmes de culture.</span>
						<span class="lang-en">Marine seaweed extract for growing programs.</span>
						<span class="lang-es">Extracto de algas marinas para programas de cultivo.</span>
					</p>
					<a href="<?php echo esc_url( home_url( '/produits/booster/' ) ); ?>" class="hort-brands__item-link">
						<span class="lang-fr">Découvrir Booster</span><span class="lang-en">Discover Booster</span><span class="lang-es">Descubrir Booster</span> →
					</a>
				</div>
			</div>

			<div class="hort-brands__m-item">
				<img class="hort-brands__m-img" src="<?php echo esc_url( $agnsee_brands_photos[2] ); ?>" alt="Grow Genius">
				<div>
					<span class="hort-brands__item-tag"><span class="lang-fr">Acide monosilicique</span><span class="lang-en">Monosilicic acid</span><span class="lang-es">Ácido monosilícico</span></span>
					<h3 class="hort-brands__m-name">Grow Genius</h3>
					<p class="hort-brands__m-desc">
						<span class="lang-fr">Acide monosilicique concentré à 40 %.</span>
						<span class="lang-en">40% concentrated monosilicic acid.</span>
						<span class="lang-es">Ácido monosilícico concentrado al 40 %.</span>
					</p>
					<a href="<?php echo esc_url( home_url( '/produits/grow-genius/' ) ); ?>" class="hort-brands__item-link">
						<span class="lang-fr">Découvrir Grow Genius</span><span class="lang-en">Discover Grow Genius</span><span class="lang-es">Descubrir Grow Genius</span> →
					</a>
				</div>
			</div>

			<div class="hort-brands__m-item">
				<img class="hort-brands__m-img" src="<?php echo esc_url( $agnsee_brands_photos[3] ); ?>" alt="Safe Disinfectant">
				<div>
					<span class="hort-brands__item-tag"><span class="lang-fr">Homologué Santé Canada</span><span class="lang-en">Health Canada registered</span><span class="lang-es">Registrado ante Health Canada</span></span>
					<h3 class="hort-brands__m-name">Safe Disinfectant</h3>
					<p class="hort-brands__m-desc">
						<span class="lang-fr">Acide hypochloreux à 0,046 %, pour établissements de santé, locaux alimentaires, usage institutionnel/industriel et bâtiments d'élevage.</span>
						<span class="lang-en">0.046% hypochlorous acid, for healthcare facilities, food premises, institutional/industrial and barn use.</span>
						<span class="lang-es">Ácido hipocloroso al 0,046 %, para instalaciones de salud, locales alimentarios, uso institucional/industrial y establos.</span>
					</p>
					<a href="<?php echo esc_url( home_url( '/produits/safe-disinfectant/' ) ); ?>" class="hort-brands__item-link">
						<span class="lang-fr">Découvrir Safe Disinfectant</span><span class="lang-en">Discover Safe Disinfectant</span><span class="lang-es">Descubrir Safe Disinfectant</span> →
					</a>
				</div>
			</div>

		</div>
	</section>

	<script data-no-optimize="1">
	(function() {
		var items = document.querySelectorAll('#hort-brands-items .hort-brands__item');
		var media = document.querySelectorAll('#hort-brands-sticky [data-brand-img]');
		if (!items.length || !media.length) return;
		function setActive(idx) {
			items.forEach(function(el) { el.classList.remove('is-active'); });
			media.forEach(function(el) { el.classList.remove('is-active'); });
			if (items[idx]) items[idx].classList.add('is-active');
			var activeMedia = document.querySelector('#hort-brands-sticky [data-brand-img="' + idx + '"]');
			if (activeMedia) {
				activeMedia.classList.add('is-active');
				if (activeMedia.tagName === 'VIDEO' && activeMedia.paused) {
					activeMedia.play().catch(function () {});
				}
			}
		}
		setActive(0);
		var observer = new IntersectionObserver(function(entries) {
			entries.forEach(function(entry) {
				if (entry.isIntersecting) setActive(parseInt(entry.target.getAttribute('data-brand'), 10));
			});
		}, { threshold: 0.5 });
		items.forEach(function(el) { observer.observe(el); });
	})();
	</script>

	<!-- Teaser outils -->
	<section class="section section-alt">
		<div class="container" style="display:flex;align-items:center;justify-content:space-between;gap:2rem;flex-wrap:wrap;">
			<div style="max-width:560px;">
				<div class="eyebrow"><span class="lang-fr">Outils gratuits</span><span class="lang-en">Free tools</span><span class="lang-es">Herramientas gratuitas</span></div>
				<h2>
					<span class="lang-fr">Des outils techniques pour vos projets</span>
					<span class="lang-en">Technical tools for your projects</span>
					<span class="lang-es">Herramientas técnicas para tus proyectos</span>
				</h2>
				<p>
					<span class="lang-fr">SunTracker, calculateur SafeGrow AG et d'autres outils à venir, en accès libre.</span>
					<span class="lang-en">SunTracker, the SafeGrow AG calculator, and more tools to come — freely accessible.</span>
					<span class="lang-es">SunTracker, la calculadora SafeGrow AG y más herramientas próximamente, de acceso libre.</span>
				</p>
			</div>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/outils/' ) ); ?>">
				<span class="lang-fr">Découvrir les outils</span><span class="lang-en">Explore the tools</span><span class="lang-es">Descubrir las herramientas</span>
			</a>
		</div>
	</section>

	<!-- Logos partenaires — masqué temporairement (ne pas supprimer, on le remet plus tard) -->
	<?php if ( false ) : ?>
	<?php $agnsee_hort_americas_logo = 'https://agnsee.ca/wp-content/uploads/2026/08/Capture-decran-le-2026-08-12-a-12.49.14.png'; ?>
	<style>
	.partners-marquee { overflow: hidden; width: 100%; padding: 1.5rem 0; }
	.partners-track { display: flex; align-items: center; width: max-content; gap: 4rem; animation: agnsee-partners-scroll 22s linear infinite; }
	.partners-logo { display: flex; align-items: center; justify-content: center; height: 40px; white-space: nowrap; }
	.partners-logo img { height: 32px; width: auto; filter: grayscale(1); opacity: 0.7; }
	.partners-logo span { font-weight: 700; color: var(--color-text-secondary); font-size: var(--fs-lg); letter-spacing: 0.01em; }
	@keyframes agnsee-partners-scroll {
	  from { transform: translateX(-50%); }
	  to { transform: translateX(0%); }
	}
	@media (prefers-reduced-motion: reduce) {
	  .partners-track { animation: none; }
	}
	</style>
	<section class="section">
		<div class="container">
			<div class="eyebrow text-center" style="display:block;">
				<span class="lang-fr">Distribué par</span><span class="lang-en">Distributed by</span><span class="lang-es">Distribuido por</span>
			</div>
		</div>
		<div class="partners-marquee">
			<div class="partners-track">
				<?php for ( $agnsee_p = 0; $agnsee_p < 2; $agnsee_p++ ) : ?>
					<?php for ( $agnsee_i = 0; $agnsee_i < 6; $agnsee_i++ ) : ?>
						<div class="partners-logo">
							<?php if ( $agnsee_hort_americas_logo ) : ?>
								<img src="<?php echo esc_url( $agnsee_hort_americas_logo ); ?>" alt="Hort Americas">
							<?php else : ?>
								<span>Hort Americas</span>
							<?php endif; ?>
						</div>
					<?php endfor; ?>
				<?php endfor; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- CTA contact -->
	<section class="section section-dark">
		<div class="container text-center">
			<h2>
				<span class="lang-fr">Discutons de votre prochain projet</span>
				<span class="lang-en">Let's discuss your next project</span>
				<span class="lang-es">Hablemos de tu próximo proyecto</span>
			</h2>
			<p style="max-width:560px;margin:0 auto 1.5rem;">
				<span class="lang-fr">Distributeurs et acheteurs institutionnels — contactez-nous pour une consultation technique ou une commande sur mesure.</span>
				<span class="lang-en">Distributors and institutional buyers — reach out for a technical consultation or a custom order.</span>
				<span class="lang-es">Distribuidores y compradores institucionales — contáctanos para una consulta técnica o un pedido a medida.</span>
			</p>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
				<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span><span class="lang-es">Contáctanos</span>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
