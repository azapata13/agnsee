<?php
/**
 * Template Name: Services
 */

get_header();
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:2rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Accompagnement</span><span class="lang-en">Support</span><span class="lang-es">Acompañamiento</span></div>
			<h1>
				<span class="lang-fr">Services</span>
				<span class="lang-en">Services</span>
				<span class="lang-es">Servicios</span>
			</h1>
			<p class="hero-lead">
				<span class="lang-fr">Un accompagnement technique complet, de l'analyse des besoins à la mise en service, pour les distributeurs, les entreprises agricoles et les acheteurs institutionnels.</span>
				<span class="lang-en">Complete technical support, from needs assessment to commissioning, for distributors, farm businesses and institutional buyers.</span>
				<span class="lang-es">Un acompañamiento técnico completo, desde el análisis de necesidades hasta la puesta en marcha, para distribuidores, empresas agrícolas y compradores institucionales.</span>
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
						<span class="lang-es">Consultoría Light Plan</span>
					</h3>
					<p>
						<span class="lang-fr">Une analyse technique de vos besoins en éclairage horticole pour orienter vos choix d'équipement.</span>
						<span class="lang-en">A technical analysis of your horticultural lighting needs to guide your equipment choices.</span>
						<span class="lang-es">Un análisis técnico de tus necesidades de iluminación hortícola para guiar tus decisiones de equipamiento.</span>
					</p>
				</div>

				<div class="card">
					<div class="card-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76Z"/></svg>
					</div>
					<h3>
						<span class="lang-fr">Support technique</span>
						<span class="lang-en">Technical support</span>
						<span class="lang-es">Soporte técnico</span>
					</h3>
					<p>
						<span class="lang-fr">Un accompagnement direct sur le dosage et l'installation de nos produits, en serre, au champ et en bâtiment d'élevage, en collaboration avec les fabricants représentés.</span>
						<span class="lang-en">Hands-on support with dosing and installation of our products, in the greenhouse, in the field and in livestock buildings, in collaboration with the manufacturers we represent.</span>
						<span class="lang-es">Acompañamiento directo en la dosificación e instalación de nuestros productos, en invernadero, en campo y en instalaciones ganaderas, en colaboración con los fabricantes representados.</span>
					</p>
				</div>

				<div class="card">
					<div class="card-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
					</div>
					<h3>
						<span class="lang-fr">Accès au marché canadien pour fabricants</span>
						<span class="lang-en">Canadian market access for manufacturers</span>
						<span class="lang-es">Acceso al mercado canadiense para fabricantes</span>
					</h3>
					<p>
						<span class="lang-fr">Représentation, mise en marché et réseau de distribution, en productions végétales comme animales.</span>
						<span class="lang-en">Representation, marketing and distribution network, for both crop and livestock production.</span>
						<span class="lang-es">Representación, comercialización y red de distribución, tanto en producción vegetal como animal.</span>
					</p>
				</div>

			</div>
		</div>
	</section>

	<section class="section section-dark">
		<div class="container text-center">
			<h2>
				<span class="lang-fr">Planifions votre prochaine étape</span>
				<span class="lang-en">Let's plan your next step</span>
				<span class="lang-es">Planifiquemos tu próximo paso</span>
			</h2>
			<p style="max-width:560px;margin:0 auto 1.5rem;">
				<span class="lang-fr">Prenez rendez-vous avec notre équipe pour discuter de vos besoins techniques.</span>
				<span class="lang-en">Book a meeting with our team to discuss your technical needs.</span>
				<span class="lang-es">Agenda una reunión con nuestro equipo para hablar de tus necesidades técnicas.</span>
			</p>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
				<span class="lang-fr">Prendre rendez-vous</span><span class="lang-en">Book a meeting</span><span class="lang-es">Agendar una reunión</span>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
