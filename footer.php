	<footer class="site-footer">
		<div class="container">

			<div class="footer-grid">

				<div class="footer-col">
					<div class="site-logo" style="color:#fff;margin-bottom:1rem;">
						<?php $agnsee_footer_logo = agnsee_get_logo_url(); ?>
						<?php if ( $agnsee_footer_logo ) : ?>
							<img src="<?php echo esc_url( $agnsee_footer_logo ); ?>" alt="Agnsee" style="height:34px;width:auto;">
						<?php else : ?>
							Agnsee
						<?php endif; ?>
					</div>
					<p style="max-width:280px;">
						<span class="lang-fr">Agent manufacturier représentant des produits techniques pour l'horticulture protégée au Canada.</span>
						<span class="lang-en">Manufacturer's representative for technical products serving protected horticulture across Canada.</span>
					</p>
				</div>

				<div class="footer-col">
					<div class="footer-col-title"><span class="lang-fr">Produits</span><span class="lang-en">Products</span></div>
					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-2' ); ?>
					<?php else : ?>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/produits/safegrow-ag/' ) ); ?>">SafeGrow AG</a></li>
							<li><a href="<?php echo esc_url( home_url( '/produits/booster/' ) ); ?>">Booster</a></li>
							<li><a href="<?php echo esc_url( home_url( '/produits/grow-genius/' ) ); ?>">Grow Genius</a></li>
							<li><a href="<?php echo esc_url( home_url( '/produits/aranet/' ) ); ?>">Aranet</a></li>
							<li><a href="<?php echo esc_url( home_url( '/produits/' ) ); ?>"><span class="lang-fr">Tous les produits</span><span class="lang-en">All products</span></a></li>
						</ul>
					<?php endif; ?>
				</div>

				<div class="footer-col">
					<div class="footer-col-title"><span class="lang-fr">Entreprise</span><span class="lang-en">Company</span></div>
					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
						<?php dynamic_sidebar( 'footer-3' ); ?>
					<?php else : ?>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><span class="lang-fr">Services</span><span class="lang-en">Services</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/outils/' ) ); ?>"><span class="lang-fr">Outils gratuits</span><span class="lang-en">Free tools</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/a-propos/' ) ); ?>"><span class="lang-fr">À propos</span><span class="lang-en">About us</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="lang-fr">Contact</span><span class="lang-en">Contact</span></a></li>
						</ul>
					<?php endif; ?>
				</div>

				<div class="footer-col">
					<div class="footer-col-title"><span class="lang-fr">Contact</span><span class="lang-en">Contact</span></div>
					<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
						<?php dynamic_sidebar( 'footer-4' ); ?>
					<?php else : ?>
						<ul>
							<li><a href="mailto:info@agnsee.ca">info@agnsee.ca</a></li>
							<li>
								<span class="lang-fr">Canada</span><span class="lang-en">Canada</span>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
									<span class="lang-fr">Prendre rendez-vous</span><span class="lang-en">Book a meeting</span>
								</a>
							</li>
						</ul>
					<?php endif; ?>
				</div>

			</div>

			<div class="footer-bottom">
				<div>
					&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Agnsee.
					<span class="lang-fr">Tous droits réservés.</span><span class="lang-en">All rights reserved.</span>
				</div>

				<div class="lang-toggle" role="group" aria-label="Langue / Language">
					<button type="button" data-lang-btn="fr" class="<?php echo 'fr' === agnsee_get_lang() ? 'is-active' : ''; ?>">FR</button>
					<button type="button" data-lang-btn="en" class="<?php echo 'en' === agnsee_get_lang() ? 'is-active' : ''; ?>">EN</button>
				</div>
			</div>

		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
