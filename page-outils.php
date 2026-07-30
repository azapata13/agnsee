<?php
/**
 * Template Name: Outils
 *
 * Grille des outils techniques. Architecture extensible : ajouter un outil =
 * ajouter une entrée dans $agnsee_tools + un fichier page-{slug}.php.
 */

get_header();

$agnsee_tools = array(
	array(
		'slug' => 'suntracker',
		'name' => 'SunTracker',
		'fr'   => "Outil de suivi de l'ensoleillement pour planifier l'éclairage horticole.",
		'en'   => 'Sunlight tracking tool to help plan horticultural lighting.',
	),
	array(
		'slug' => 'calculateur-safegrow-ag',
		'name' => 'SafeGrow AG / HOCl',
		'fr'   => 'Calculateur de dosage pour SafeGrow AG.',
		'en'   => 'Dosing calculator for SafeGrow AG.',
	),
);
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Accès libre</span><span class="lang-en">Free access</span></div>
			<h1>
				<span class="lang-fr">Outils techniques gratuits</span>
				<span class="lang-en">Free technical tools</span>
			</h1>
			<p class="hero-lead">
				<span class="lang-fr">Des outils pratiques pour appuyer vos projets d'horticulture protégée, mis à jour régulièrement.</span>
				<span class="lang-en">Practical tools to support your protected-horticulture projects, updated regularly.</span>
			</p>
		</div>
	</section>

	<section class="section" style="padding-top:0;">
		<div class="container">
			<div class="grid grid-3">
				<?php foreach ( $agnsee_tools as $tool ) : ?>
					<a class="card" href="<?php echo esc_url( home_url( '/outils/' . $tool['slug'] . '/' ) ); ?>">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
						</div>
						<h4><?php echo esc_html( $tool['name'] ); ?></h4>
						<p>
							<span class="lang-fr"><?php echo esc_html( $tool['fr'] ); ?></span>
							<span class="lang-en"><?php echo esc_html( $tool['en'] ); ?></span>
						</p>
					</a>
				<?php endforeach; ?>

				<div class="card" style="opacity:0.6;">
					<div class="card-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
					</div>
					<h4><span class="lang-fr">À venir</span><span class="lang-en">Coming soon</span></h4>
					<p>
						<span class="lang-fr">D'autres outils techniques seront ajoutés à cette section.</span>
						<span class="lang-en">More technical tools will be added to this section.</span>
					</p>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
