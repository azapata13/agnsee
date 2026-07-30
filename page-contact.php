<?php
/**
 * Template Name: Contact
 */

get_header();

$agnsee_preselect = isset( $_GET['produit'] ) ? sanitize_text_field( wp_unslash( $_GET['produit'] ) ) : '';
$agnsee_products  = array( 'SafeGrow AG', 'Booster', 'Grow Genius', 'Aranet' );
?>

<main id="main-content" class="site-main">

	<section class="hero" style="padding-bottom:1rem;">
		<div class="container">
			<div class="eyebrow hero-eyebrow"><span class="lang-fr">Parlons-en</span><span class="lang-en">Let's talk</span></div>
			<h1>
				<span class="lang-fr">Contact</span>
				<span class="lang-en">Contact</span>
			</h1>
			<p class="hero-lead">
				<span class="lang-fr">Distributeurs et acheteurs institutionnels — écrivez-nous pour toute question technique ou demande de collaboration.</span>
				<span class="lang-en">Distributors and institutional buyers — reach out for any technical question or partnership inquiry.</span>
			</p>
		</div>
	</section>

	<section class="section" style="padding-top:1rem;">
		<div class="container">
			<div class="grid grid-2">

				<div>
					<div id="contact-form-message" style="display:none;"></div>

					<form id="agnsee-contact-form" novalidate>
						<div class="form-field" style="position:absolute;left:-9999px;" aria-hidden="true">
							<label for="website">Website</label>
							<input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
						</div>

						<div class="form-field">
							<label for="name">
								<span class="lang-fr">Nom complet</span><span class="lang-en">Full name</span> *
							</label>
							<input type="text" id="name" name="name" required>
						</div>

						<div class="form-field">
							<label for="email">
								<span class="lang-fr">Courriel</span><span class="lang-en">Email</span> *
							</label>
							<input type="email" id="email" name="email" required>
						</div>

						<div class="form-field">
							<label for="company">
								<span class="lang-fr">Entreprise</span><span class="lang-en">Company</span>
							</label>
							<input type="text" id="company" name="company">
						</div>

						<div class="form-field">
							<label for="country">
								<span class="lang-fr">Pays</span><span class="lang-en">Country</span>
							</label>
							<input type="text" id="country" name="country">
						</div>

						<div class="form-field">
							<label for="product">
								<span class="lang-fr">Produit d'intérêt</span><span class="lang-en">Product of interest</span>
							</label>
							<select id="product" name="product">
								<option value="">
									<?php echo esc_html( agnsee_t( 'Sélectionner...', 'Select...' ) ); ?>
								</option>
								<?php foreach ( $agnsee_products as $product ) : ?>
									<option value="<?php echo esc_attr( $product ); ?>" <?php selected( $agnsee_preselect, $product ); ?>>
										<?php echo esc_html( $product ); ?>
									</option>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-field">
							<label for="message">
								<span class="lang-fr">Message</span><span class="lang-en">Message</span> *
							</label>
							<textarea id="message" name="message" required></textarea>
						</div>

						<button type="submit" class="btn btn-primary" id="contact-submit-btn">
							<span class="lang-fr">Envoyer</span><span class="lang-en">Send</span>
						</button>

						<p class="form-note">
							<span class="lang-fr">* Champs requis</span><span class="lang-en">* Required fields</span>
						</p>
					</form>
				</div>

				<div>
					<h2><span class="lang-fr">Coordonnées</span><span class="lang-en">Direct contact</span></h2>
					<p><a href="mailto:info@agnsee.ca">info@agnsee.ca</a></p>
					<hr class="divider">
					<h3><span class="lang-fr">Pourquoi nous contacter</span><span class="lang-en">Why reach out</span></h3>
					<ul style="color:var(--color-text-secondary);">
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Consultation technique sur nos produits</span>
							<span class="lang-en">Technical consultation on our products</span>
						</li>
						<li style="padding:0.5rem 0;border-bottom:1px solid var(--color-border);">
							<span class="lang-fr">Demande de distribution ou de partenariat</span>
							<span class="lang-en">Distribution or partnership inquiry</span>
						</li>
						<li style="padding:0.5rem 0;">
							<span class="lang-fr">Commande sur mesure</span>
							<span class="lang-en">Custom order request</span>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</section>

</main>

<?php
get_footer();
