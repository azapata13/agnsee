<?php
/**
 * Template Name: Outil — SunTracker
 */

get_header();
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Outil gratuit</span><span class="lang-en">Free tool</span></div>
			<h1>SunTracker</h1>
			<p class="hero-lead">
				<span class="lang-fr">Outil de suivi de l'ensoleillement pour appuyer la planification de l'éclairage horticole.</span>
				<span class="lang-en">Sunlight tracking tool to support horticultural lighting planning.</span>
			</p>
		</div>
	</section>

	<section class="section" style="padding-top:0;">
		<div class="container">
			<div class="card" id="suntracker-tool" style="padding:var(--space-lg);">
				<p class="form-note">
					<span class="lang-fr">Emplacement d'intégration de l'outil SunTracker existant.</span>
					<span class="lang-en">Integration slot for the existing SunTracker tool.</span>
				</p>
			</div>

			<div class="hero-actions" style="justify-content:flex-start;margin-top:1.5rem;">
				<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/outils/' ) ); ?>">
					<span class="lang-fr">Retour aux outils</span><span class="lang-en">Back to tools</span>
				</a>
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
					<span class="lang-fr">Parler à un expert</span><span class="lang-en">Talk to an expert</span>
				</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
