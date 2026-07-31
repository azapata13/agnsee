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
	$agnsee_hero_video = agnsee_video_url( 'hero' );
	$agnsee_hero_poster = agnsee_image_url( 'hero/hero-poster' );
	?>
	<?php if ( $agnsee_hero_video ) : ?>
		<section class="hero-video">
			<video
				class="hero-video-bg"
				data-no-optimize="1"
				data-src="<?php echo esc_url( $agnsee_hero_video ); ?>"
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
				</div>
				<h1 class="hero-video-title">
					<span class="lang-fr">L'horticulture protégée, propulsée par la bonne technologie</span>
					<span class="lang-en">Protected horticulture, powered by the right technology</span>
				</h1>
				<p class="hero-video-lead">
					<span class="lang-fr">Nous représentons des produits techniques sélectionnés pour les serres et la culture intérieure, et connectons les fabricants aux distributeurs et acheteurs institutionnels.</span>
					<span class="lang-en">We represent carefully selected technical products for greenhouses and indoor growing, connecting manufacturers with distributors and institutional buyers.</span>
				</p>
				<div class="hero-video-actions">
					<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/produits/' ) ); ?>">
						<span class="lang-fr">Voir nos produits</span><span class="lang-en">View our products</span>
					</a>
					<a class="btn btn-glass" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
						<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span>
					</a>
				</div>
			</div>
		</section>
		<script data-no-optimize="1">
			( function () {
				var video = document.querySelector( '.hero-video-bg[data-src]' );
				if ( video ) {
					video.src = video.getAttribute( 'data-src' );
					video.load();
				}
			} )();
		</script>
	<?php else : ?>
		<section class="hero">
			<div class="container">
				<div class="eyebrow hero-eyebrow">
					<span class="lang-fr">Agent manufacturier</span>
					<span class="lang-en">Manufacturer's representative</span>
				</div>
				<h1>
					<span class="lang-fr">Agent manufacturier pour l'horticulture protégée</span>
					<span class="lang-en">Manufacturer's representative for protected horticulture</span>
				</h1>
				<p class="hero-lead">
					<span class="lang-fr">Nous représentons des produits techniques sélectionnés pour les serres et la culture intérieure, et connectons les fabricants aux distributeurs et acheteurs institutionnels.</span>
					<span class="lang-en">We represent carefully selected technical products for greenhouses and indoor growing, connecting manufacturers with distributors and institutional buyers.</span>
				</p>
				<div class="hero-actions">
					<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/produits/' ) ); ?>">
						<span class="lang-fr">Voir nos produits</span><span class="lang-en">View our products</span>
					</a>
					<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
						<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span>
					</a>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Notre rôle -->
	<section class="section section-alt">
		<div class="container">
			<div class="grid grid-3">

				<div class="card">
					<div class="card-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>
					</div>
					<h3>
						<span class="lang-fr">Sourcing exclusif</span>
						<span class="lang-en">Exclusive sourcing</span>
					</h3>
					<p>
						<span class="lang-fr">Une sélection rigoureuse de produits techniques auprès de fabricants spécialisés, avec représentation exclusive sur le marché canadien.</span>
						<span class="lang-en">A rigorous selection of technical products from specialized manufacturers, with exclusive representation across the Canadian market.</span>
					</p>
				</div>

				<div class="card">
					<div class="card-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3h6M10 3v5.5L4.5 18a2 2 0 0 0 1.8 3h11.4a2 2 0 0 0 1.8-3L14 8.5V3"/></svg>
					</div>
					<h3>
						<span class="lang-fr">Expertise technique</span>
						<span class="lang-en">Technical expertise</span>
					</h3>
					<p>
						<span class="lang-fr">Une compréhension approfondie des enjeux de la culture protégée pour orienter chaque client vers la bonne solution.</span>
						<span class="lang-en">A deep understanding of protected-crop challenges to guide every client toward the right solution.</span>
					</p>
				</div>

				<div class="card">
					<div class="card-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11a9 9 0 0 1 18 0"/><path d="M21 12v6a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z"/><path d="M3 12v6a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3Z"/></svg>
					</div>
					<h3>
						<span class="lang-fr">Support terrain</span>
						<span class="lang-en">Field support</span>
					</h3>
					<p>
						<span class="lang-fr">Un accompagnement direct — dosage, installation, mise en service — auprès des distributeurs et acheteurs institutionnels.</span>
						<span class="lang-en">Hands-on support — dosing, installation, commissioning — for distributors and institutional buyers.</span>
					</p>
				</div>

			</div>
		</div>
	</section>

	<!-- Produits en vedette -->
	<section class="section">
		<div class="container">
			<div class="eyebrow"><span class="lang-fr">Produits</span><span class="lang-en">Products</span></div>
			<h2 style="margin-bottom:2rem;">
				<span class="lang-fr">Produits en vedette</span>
				<span class="lang-en">Featured products</span>
			</h2>

			<div class="grid grid-4">

				<a class="card" href="<?php echo esc_url( home_url( '/produits/safegrow-ag/' ) ); ?>">
					<div class="badge"><span class="lang-fr">Traitement d'irrigation</span><span class="lang-en">Irrigation treatment</span></div>
					<h4 style="margin-top:0.75rem;">SafeGrow AG</h4>
					<p>
						<span class="lang-fr">Nettoyant d'infrastructure d'irrigation à base de HOCl stabilisé.</span>
						<span class="lang-en">Irrigation infrastructure cleaner based on stabilized HOCl.</span>
					</p>
				</a>

				<a class="card" href="<?php echo esc_url( home_url( '/produits/booster/' ) ); ?>">
					<div class="badge"><span class="lang-fr">Extrait d'algues</span><span class="lang-en">Seaweed extract</span></div>
					<h4 style="margin-top:0.75rem;">Booster</h4>
					<p>
						<span class="lang-fr">Extrait d'algues marines pour programmes de culture.</span>
						<span class="lang-en">Marine seaweed extract for growing programs.</span>
					</p>
				</a>

				<a class="card" href="<?php echo esc_url( home_url( '/produits/grow-genius/' ) ); ?>">
					<div class="badge"><span class="lang-fr">Acide monosilicique</span><span class="lang-en">Monosilicic acid</span></div>
					<h4 style="margin-top:0.75rem;">Grow Genius</h4>
					<p>
						<span class="lang-fr">Acide monosilicique concentré à 40 %.</span>
						<span class="lang-en">40% concentrated monosilicic acid.</span>
					</p>
				</a>

				<a class="card" href="<?php echo esc_url( home_url( '/produits/aranet/' ) ); ?>">
					<div class="badge"><span class="lang-fr">Capteurs</span><span class="lang-en">Sensors</span></div>
					<h4 style="margin-top:0.75rem;">Aranet</h4>
					<p>
						<span class="lang-fr">Système de capteurs CO2, température et humidité.</span>
						<span class="lang-en">CO2, temperature and humidity sensor system.</span>
					</p>
				</a>

			</div>
		</div>
	</section>

	<!-- Teaser outils -->
	<section class="section section-alt">
		<div class="container" style="display:flex;align-items:center;justify-content:space-between;gap:2rem;flex-wrap:wrap;">
			<div style="max-width:560px;">
				<div class="eyebrow"><span class="lang-fr">Outils gratuits</span><span class="lang-en">Free tools</span></div>
				<h2>
					<span class="lang-fr">Des outils techniques pour vos projets</span>
					<span class="lang-en">Technical tools for your projects</span>
				</h2>
				<p>
					<span class="lang-fr">SunTracker, calculateur SafeGrow AG et d'autres outils à venir, en accès libre.</span>
					<span class="lang-en">SunTracker, the SafeGrow AG calculator, and more tools to come — freely accessible.</span>
				</p>
			</div>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/outils/' ) ); ?>">
				<span class="lang-fr">Découvrir les outils</span><span class="lang-en">Explore the tools</span>
			</a>
		</div>
	</section>

	<!-- Logos partenaires -->
	<section class="section">
		<div class="container">
			<div class="eyebrow text-center" style="display:block;">
				<span class="lang-fr">Distribué par</span><span class="lang-en">Distributed by</span>
			</div>
			<div class="grid grid-4" style="align-items:center;">
				<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
					<?php $agnsee_partner_logo = agnsee_image_url( 'partners/partner-' . $i ); ?>
					<div class="card text-center" style="color:var(--color-text-secondary);font-weight:600;">
						<?php if ( $agnsee_partner_logo ) : ?>
							<img src="<?php echo esc_url( $agnsee_partner_logo ); ?>" alt="<?php echo esc_attr( sprintf( 'Partenaire %d', $i ) ); ?>" style="max-height:36px;width:auto;margin:0 auto;filter:grayscale(1);opacity:0.7;">
						<?php else : ?>
							<span class="lang-fr">Partenaire <?php echo esc_html( $i ); ?></span>
							<span class="lang-en">Partner <?php echo esc_html( $i ); ?></span>
						<?php endif; ?>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</section>

	<!-- CTA contact -->
	<section class="section section-dark">
		<div class="container text-center">
			<h2>
				<span class="lang-fr">Discutons de votre prochain projet</span>
				<span class="lang-en">Let's discuss your next project</span>
			</h2>
			<p style="max-width:560px;margin:0 auto 1.5rem;">
				<span class="lang-fr">Distributeurs et acheteurs institutionnels — contactez-nous pour une consultation technique ou une commande sur mesure.</span>
				<span class="lang-en">Distributors and institutional buyers — reach out for a technical consultation or a custom order.</span>
			</p>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
				<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
