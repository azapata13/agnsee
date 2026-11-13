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
						<span class="lang-fr">Agnsee est un agent manufacturier de produits techniques au service de l'agriculture moderne partout au Canada : serres, grandes cultures et élevage.</span>
						<span class="lang-en">Agnsee is a manufacturer's agent for technical products serving modern agriculture across Canada: greenhouses, field crops and livestock.</span>
						<span class="lang-es">Agnsee es un agente de fabricantes de productos técnicos al servicio de la agricultura moderna en todo Canadá: invernaderos, cultivos extensivos y ganadería.</span>
					</p>
				</div>

				<div class="footer-col">
					<div class="footer-col-title"><span class="lang-fr">Produits</span><span class="lang-en">Products</span><span class="lang-es">Productos</span></div>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/produits/safegrow-ag/' ) ); ?>">SafeGrow AG</a></li>
						<li><a href="<?php echo esc_url( home_url( '/produits/booster/' ) ); ?>">Booster</a></li>
						<li><a href="<?php echo esc_url( home_url( '/produits/grow-genius/' ) ); ?>">Grow Genius</a></li>
						<li><a href="<?php echo esc_url( home_url( '/produits/safe-disinfectant/' ) ); ?>">Safe Disinfectant</a></li>
						<li><a href="<?php echo esc_url( home_url( '/produits/' ) ); ?>"><span class="lang-fr">Tous les produits</span><span class="lang-en">All products</span><span class="lang-es">Todos los productos</span></a></li>
					</ul>
				</div>

				<div class="footer-col">
					<div class="footer-col-title"><span class="lang-fr">Secteurs</span><span class="lang-en">Sectors</span><span class="lang-es">Sectores</span></div>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/produits/?secteur=serres' ) ); ?>"><span class="lang-fr">Serres et culture intérieure</span><span class="lang-en">Greenhouses and indoor growing</span><span class="lang-es">Invernaderos y cultivo interior</span></a></li>
						<li><a href="<?php echo esc_url( home_url( '/produits/?secteur=champs' ) ); ?>"><span class="lang-fr">Grandes cultures, maraîcher, vergers</span><span class="lang-en">Field crops, vegetables, orchards</span><span class="lang-es">Cultivos extensivos, hortalizas, huertos frutales</span></a></li>
						<li><a href="<?php echo esc_url( home_url( '/produits/?secteur=elevage' ) ); ?>"><span class="lang-fr">Élevage en bâtiment</span><span class="lang-en">Indoor livestock</span><span class="lang-es">Ganadería en instalaciones</span></a></li>
						<li><a href="<?php echo esc_url( home_url( '/produits/?secteur=paturage' ) ); ?>"><span class="lang-fr">Pâturage</span><span class="lang-en">Pasture</span><span class="lang-es">Pastoreo</span></a></li>
					</ul>
				</div>

				<div class="footer-col">
					<div class="footer-col-title"><span class="lang-fr">Entreprise</span><span class="lang-en">Company</span><span class="lang-es">Empresa</span></div>
					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
						<?php dynamic_sidebar( 'footer-3' ); ?>
					<?php else : ?>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><span class="lang-fr">Services</span><span class="lang-en">Services</span><span class="lang-es">Servicios</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/outils/' ) ); ?>"><span class="lang-fr">Outils gratuits</span><span class="lang-en">Free tools</span><span class="lang-es">Herramientas gratuitas</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/a-propos/' ) ); ?>"><span class="lang-fr">À propos</span><span class="lang-en">About us</span><span class="lang-es">Nosotros</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="lang-fr">Contact</span><span class="lang-en">Contact</span><span class="lang-es">Contacto</span></a></li>
						</ul>
					<?php endif; ?>
				</div>

				<div class="footer-col">
					<div class="footer-col-title"><span class="lang-fr">Contact</span><span class="lang-en">Contact</span><span class="lang-es">Contacto</span></div>
					<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
						<?php dynamic_sidebar( 'footer-4' ); ?>
					<?php else : ?>
						<ul>
							<li><a href="mailto:info@agnsee.ca">info@agnsee.ca</a></li>
							<li>
								<span class="lang-fr">Canada</span><span class="lang-en">Canada</span><span class="lang-es">Canadá</span>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
									<span class="lang-fr">Prendre rendez-vous</span><span class="lang-en">Book a meeting</span><span class="lang-es">Agendar una reunión</span>
								</a>
							</li>
						</ul>
					<?php endif; ?>
				</div>

			</div>

			<div class="footer-bottom">
				<div>
					&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Agnsee.
					<span class="lang-fr">Tous droits réservés.</span><span class="lang-en">All rights reserved.</span><span class="lang-es">Todos los derechos reservados.</span>
				</div>

				<div class="lang-toggle" role="group" aria-label="Langue / Language / Idioma">
					<button type="button" data-lang-btn="fr" class="<?php echo 'fr' === agnsee_get_lang() ? 'is-active' : ''; ?>">FR</button>
					<button type="button" data-lang-btn="en" class="<?php echo 'en' === agnsee_get_lang() ? 'is-active' : ''; ?>">EN</button>
					<button type="button" data-lang-btn="es" class="<?php echo 'es' === agnsee_get_lang() ? 'is-active' : ''; ?>">ES</button>
				</div>
			</div>

		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
