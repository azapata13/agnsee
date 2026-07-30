<?php
/**
 * En-tête du thème Agancy — nav sticky, toggle FR/EN, menu mobile.
 */
$agancy_lang = agancy_get_lang();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
<style data-no-optimize="1">
/* Critique : évite le FOUC du header sticky (inline pour contourner le cache CSS LiteSpeed) */
.site-header{position:sticky;top:0;z-index:999;height:76px;background:rgba(255,255,255,.85);backdrop-filter:saturate(180%) blur(14px)}
.header-inner{max-width:1180px;margin:0 auto;padding:0 1.5rem;height:100%;display:flex;align-items:center;justify-content:space-between}
[data-lang="fr"] .lang-en{display:none}
[data-lang="en"] .lang-fr{display:none}
</style>
</head>
<body <?php body_class(); ?> data-lang="<?php echo esc_attr( $agancy_lang ); ?>">
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content">
	<span class="lang-fr">Aller au contenu principal</span>
	<span class="lang-en">Skip to main content</span>
</a>

<div id="page" class="site">

	<header class="site-header" id="site-header">
		<div class="header-inner">

			<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					Agancy
				<?php endif; ?>
			</a>

			<nav class="main-nav" aria-label="<?php echo esc_attr( agancy_t( 'Menu principal', 'Primary menu' ) ); ?>">
				<ul>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<span class="lang-fr">Accueil</span><span class="lang-en">Home</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/produits/' ) ); ?>">
							<span class="lang-fr">Produits</span><span class="lang-en">Products</span>
							<svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
						</a>
						<div class="mega-menu">
							<div class="mega-menu-col">
								<div class="mega-menu-col-title">
									<span class="lang-fr">Nos produits</span><span class="lang-en">Our products</span>
								</div>
								<a class="mega-link" href="<?php echo esc_url( home_url( '/produits/safegrow-ag/' ) ); ?>">SafeGrow AG</a>
								<a class="mega-link" href="<?php echo esc_url( home_url( '/produits/booster/' ) ); ?>">Booster</a>
								<a class="mega-link" href="<?php echo esc_url( home_url( '/produits/grow-genius/' ) ); ?>">Grow Genius</a>
								<a class="mega-link" href="<?php echo esc_url( home_url( '/produits/aranet/' ) ); ?>">Aranet</a>
							</div>
							<div class="mega-menu-col">
								<div class="mega-menu-col-title">
									<span class="lang-fr">Aperçu</span><span class="lang-en">Overview</span>
								</div>
								<a class="mega-link" href="<?php echo esc_url( home_url( '/produits/' ) ); ?>">
									<span class="lang-fr">Voir tous les produits</span><span class="lang-en">View all products</span>
								</a>
								<a class="mega-link" href="<?php echo esc_url( home_url( '/outils/' ) ); ?>">
									<span class="lang-fr">Outils techniques gratuits</span><span class="lang-en">Free technical tools</span>
								</a>
							</div>
						</div>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/outils/' ) ); ?>">
							<span class="lang-fr">Outils</span><span class="lang-en">Tools</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">
							<span class="lang-fr">Services</span><span class="lang-en">Services</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/a-propos/' ) ); ?>">
							<span class="lang-fr">À propos</span><span class="lang-en">About us</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
							<span class="lang-fr">Contact</span><span class="lang-en">Contact</span>
						</a>
					</li>
				</ul>
			</nav>

			<div class="header-actions">
				<div class="lang-toggle" id="lang-toggle" role="group" aria-label="Langue / Language">
					<button type="button" data-lang-btn="fr" class="<?php echo 'fr' === $agancy_lang ? 'is-active' : ''; ?>">FR</button>
					<button type="button" data-lang-btn="en" class="<?php echo 'en' === $agancy_lang ? 'is-active' : ''; ?>">EN</button>
				</div>

				<a class="btn btn-primary btn-sm" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
					<span class="lang-fr">Nous contacter</span><span class="lang-en">Contact us</span>
				</a>

				<button class="hamburger" id="hamburger-toggle" aria-label="<?php echo esc_attr( agancy_t( 'Ouvrir le menu', 'Open menu' ) ); ?>" aria-expanded="false" aria-controls="mobile-nav">
					<span></span><span></span><span></span>
				</button>
			</div>

		</div>

		<div class="mobile-nav" id="mobile-nav">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="lang-fr">Accueil</span><span class="lang-en">Home</span></a></li>
				<li>
					<button type="button" class="mobile-submenu-toggle" aria-expanded="false">
						<span><span class="lang-fr">Produits</span><span class="lang-en">Products</span></span>
						<svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
					</button>
					<div class="mobile-submenu">
						<a href="<?php echo esc_url( home_url( '/produits/' ) ); ?>"><span class="lang-fr">Tous les produits</span><span class="lang-en">All products</span></a>
						<a href="<?php echo esc_url( home_url( '/produits/safegrow-ag/' ) ); ?>">SafeGrow AG</a>
						<a href="<?php echo esc_url( home_url( '/produits/booster/' ) ); ?>">Booster</a>
						<a href="<?php echo esc_url( home_url( '/produits/grow-genius/' ) ); ?>">Grow Genius</a>
						<a href="<?php echo esc_url( home_url( '/produits/aranet/' ) ); ?>">Aranet</a>
					</div>
				</li>
				<li><a href="<?php echo esc_url( home_url( '/outils/' ) ); ?>"><span class="lang-fr">Outils</span><span class="lang-en">Tools</span></a></li>
				<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><span class="lang-fr">Services</span><span class="lang-en">Services</span></a></li>
				<li><a href="<?php echo esc_url( home_url( '/a-propos/' ) ); ?>"><span class="lang-fr">À propos</span><span class="lang-en">About us</span></a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="lang-fr">Contact</span><span class="lang-en">Contact</span></a></li>
			</ul>
		</div>
	</header>
