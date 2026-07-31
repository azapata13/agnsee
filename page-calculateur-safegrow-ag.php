<?php
/**
 * Template Name: Outil — Calculateur SafeGrow AG / HOCl
 */

get_header();
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Outil gratuit</span><span class="lang-en">Free tool</span><span class="lang-es">Herramienta gratuita</span></div>
			<h1>
				<span class="lang-fr">Calculateur SafeGrow AG</span>
				<span class="lang-en">SafeGrow AG calculator</span>
				<span class="lang-es">Calculadora SafeGrow AG</span>
			</h1>
			<p class="hero-lead">
				<span class="lang-fr">Outil de calcul de dosage pour l'utilisation de SafeGrow AG (HOCl stabilisé) dans les infrastructures d'irrigation.</span>
				<span class="lang-en">Dosing calculation tool for using SafeGrow AG (stabilized HOCl) in irrigation infrastructure.</span>
				<span class="lang-es">Herramienta de cálculo de dosificación para el uso de SafeGrow AG (HOCl estabilizado) en infraestructuras de irrigación.</span>
			</p>
		</div>
	</section>

	<section class="section" style="padding-top:0;">
		<div class="container">
			<div class="card" id="safegrow-hocl-tool" style="padding:var(--space-lg);">
				<p class="form-note">
					<span class="lang-fr">Emplacement d'intégration du calculateur SafeGrow AG / HOCl existant. Pour un dosage précis, contactez notre équipe technique.</span>
					<span class="lang-en">Integration slot for the existing SafeGrow AG / HOCl calculator. For precise dosing, contact our technical team.</span>
					<span class="lang-es">Espacio de integración para la calculadora SafeGrow AG / HOCl existente. Para una dosificación precisa, contacta a nuestro equipo técnico.</span>
				</p>
			</div>

			<div class="hero-actions" style="justify-content:flex-start;margin-top:1.5rem;">
				<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/outils/' ) ); ?>">
					<span class="lang-fr">Retour aux outils</span><span class="lang-en">Back to tools</span><span class="lang-es">Volver a herramientas</span>
				</a>
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=SafeGrow+AG' ) ); ?>">
					<span class="lang-fr">Parler à un expert</span><span class="lang-en">Talk to an expert</span><span class="lang-es">Hablar con un experto</span>
				</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
