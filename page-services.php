<?php
/**
 * Template Name: Services
 */

get_header();
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Accompagnement</span><span class="lang-en">Support</span></div>
			<h1>
				<span class="lang-fr">Services</span>
				<span class="lang-en">Services</span>
			</h1>
			<p class="hero-lead">
				<span class="lang-fr">Un accompagnement technique complet, du plan d'éclairage à la mise en service, pour les distributeurs et acheteurs institutionnels.</span>
				<span class="lang-en">Full technical support, from lighting plans to commissioning, for distributors and institutional buyers.</span>
			</p>
		</div>
	</section>

	<section class="section" style="padding-top:0;">
		<div class="container">
			<div class="grid grid-3">

				<div class="card">
					<div class="card-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/><path d="M9 18h6M10 22h4"/></svg>
					</div>
					<h3>
						<span class="lang-fr">Consultation Light Plan</span>
						<span class="lang-en">Light Plan consultation</span>
					</h3>
					<p>
						<span class="lang-fr">Une analyse technique de vos besoins en éclairage horticole pour orienter vos choix d'équipement.</span>
						<span class="lang-en">A technical analysis of your horticultural lighting needs to guide your equipment choices.</span>
					</p>
				</div>

				<div class="card">
					<div class="card-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76Z"/></svg>
					</div>
					<h3>
						<span class="lang-fr">Support technique</span>
						<span class="lang-en">Technical support</span>
					</h3>
					<p>
						<span class="lang-fr">Un accompagnement direct sur le dosage et l'installation de nos produits, en collaboration avec les fabricants représentés.</span>
						<span class="lang-en">Direct support on dosing and installation of our products, in collaboration with the manufacturers we represent.</span>
					</p>
				</div>

				<div class="card">
					<div class="card-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</div>
					<h3>
						<span class="lang-fr">Partenariats Gensea</span>
						<span class="lang-en">Gensea partnerships</span>
					</h3>
					<p>
						<span class="lang-fr">Des partenariats à venir avec Gensea pour élargir notre offre technique.</span>
						<span class="lang-en">Upcoming partnerships with Gensea to expand our technical offering.</span>
					</p>
					<span class="badge" style="margin-top:0.75rem;display:inline-block;">
						<span class="lang-fr">À venir</span><span class="lang-en">Coming soon</span>
					</span>
				</div>

			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container text-center">
			<h2>
				<span class="lang-fr">Planifions votre prochaine étape</span>
				<span class="lang-en">Let's plan your next step</span>
			</h2>
			<p style="max-width:560px;margin:0 auto 1.5rem;">
				<span class="lang-fr">Prenez rendez-vous avec notre équipe pour discuter de vos besoins techniques.</span>
				<span class="lang-en">Book a meeting with our team to discuss your technical needs.</span>
			</p>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
				<span class="lang-fr">Prendre rendez-vous</span><span class="lang-en">Book a meeting</span>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
