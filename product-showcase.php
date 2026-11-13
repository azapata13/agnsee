<?php
/**
 * Bloc « vitrine produit » réutilisé par les pages produit.
 *
 * Usage : get_template_part( 'product-showcase', null, array( ... ) );
 * Clés : name, contact, eyebrow, lead, stats, steps, images, secondary (facultatif).
 * Chaque texte est un tableau array( 'fr' => ..., 'en' => ..., 'es' => ... ).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ps        = wp_parse_args( $args, array(
	'name'      => '',
	'contact'   => '',
	'eyebrow'   => array(),
	'lead'      => array(),
	'stats'     => array(),
	'steps'     => array(),
	'images'    => array(),
	'secondary' => array(),
	'sectors'   => array(),
) );
$ps_id     = 'ps-' . sanitize_title( $ps['name'] );
$ps_text   = static function ( $t, $k ) {
	return isset( $t[ $k ] ) ? $t[ $k ] : '';
};
?>

<section class="ps" id="<?php echo esc_attr( $ps_id ); ?>">
	<div class="container ps__grid">

		<div class="ps__info">
			<div class="ps__badge">
				<span class="lang-fr"><?php echo esc_html( $ps_text( $ps['eyebrow'], 'fr' ) ); ?></span>
				<span class="lang-en"><?php echo esc_html( $ps_text( $ps['eyebrow'], 'en' ) ); ?></span>
				<span class="lang-es"><?php echo esc_html( $ps_text( $ps['eyebrow'], 'es' ) ); ?></span>
			</div>

			<h1 class="ps__title"><?php echo esc_html( $ps['name'] ); ?></h1>

			<?php if ( $ps['sectors'] ) : ?>
				<?php agnsee_sector_chips( $ps['sectors'], 'ps__sectors' ); ?>
			<?php endif; ?>

			<p class="ps__lead">
				<span class="lang-fr"><?php echo esc_html( $ps_text( $ps['lead'], 'fr' ) ); ?></span>
				<span class="lang-en"><?php echo esc_html( $ps_text( $ps['lead'], 'en' ) ); ?></span>
				<span class="lang-es"><?php echo esc_html( $ps_text( $ps['lead'], 'es' ) ); ?></span>
			</p>

			<?php if ( $ps['stats'] ) : ?>
				<ul class="ps__chips">
					<?php foreach ( $ps['stats'] as $stat ) : ?>
						<li class="ps__chip">
							<span class="lang-fr"><?php echo esc_html( $ps_text( $stat, 'fr' ) ); ?></span>
							<span class="lang-en"><?php echo esc_html( $ps_text( $stat, 'en' ) ); ?></span>
							<span class="lang-es"><?php echo esc_html( $ps_text( $stat, 'es' ) ); ?></span>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<?php if ( $ps['steps'] ) : ?>
				<div class="ps__accordion">
					<?php foreach ( $ps['steps'] as $i => $step ) : ?>
						<details class="ps__item" name="<?php echo esc_attr( $ps_id ); ?>"<?php echo 0 === $i ? ' open' : ''; ?>>
							<summary class="ps__summary">
								<span class="lang-fr"><?php echo esc_html( $ps_text( $step['title'], 'fr' ) ); ?></span>
								<span class="lang-en"><?php echo esc_html( $ps_text( $step['title'], 'en' ) ); ?></span>
								<span class="lang-es"><?php echo esc_html( $ps_text( $step['title'], 'es' ) ); ?></span>
							</summary>
							<div class="ps__content">
								<?php if ( ! empty( $step['text'] ) ) : ?>
									<p>
										<span class="lang-fr"><?php echo esc_html( $ps_text( $step['text'], 'fr' ) ); ?></span>
										<span class="lang-en"><?php echo esc_html( $ps_text( $step['text'], 'en' ) ); ?></span>
										<span class="lang-es"><?php echo esc_html( $ps_text( $step['text'], 'es' ) ); ?></span>
									</p>
								<?php endif; ?>
								<?php if ( ! empty( $step['list'] ) ) : ?>
									<ul class="ps__list">
										<?php foreach ( $step['list'] as $line ) : ?>
											<li>
												<span class="lang-fr"><?php echo esc_html( $ps_text( $line, 'fr' ) ); ?></span>
												<span class="lang-en"><?php echo esc_html( $ps_text( $line, 'en' ) ); ?></span>
												<span class="lang-es"><?php echo esc_html( $ps_text( $line, 'es' ) ); ?></span>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</div>
						</details>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<div class="ps__actions">
				<a class="btn ps__btn-primary" href="<?php echo esc_url( home_url( '/contact/?produit=' . rawurlencode( $ps['contact'] ? $ps['contact'] : $ps['name'] ) ) ); ?>">
					<span class="lang-fr">Communiquer avec nous</span><span class="lang-en">Contact us</span><span class="lang-es">Comunícate con nosotros</span>
				</a>
				<?php if ( ! empty( $ps['secondary']['href'] ) ) : ?>
					<a class="btn btn-secondary" href="<?php echo esc_url( $ps['secondary']['href'] ); ?>">
						<span class="lang-fr"><?php echo esc_html( $ps_text( $ps['secondary'], 'fr' ) ); ?></span>
						<span class="lang-en"><?php echo esc_html( $ps_text( $ps['secondary'], 'en' ) ); ?></span>
						<span class="lang-es"><?php echo esc_html( $ps_text( $ps['secondary'], 'es' ) ); ?></span>
					</a>
				<?php endif; ?>
			</div>
		</div>

		<div class="ps__media">
			<div class="ps__panel" data-ps-tabs>
				<?php foreach ( $ps['images'] as $i => $img ) : ?>
					<figure class="ps__slide<?php echo 0 === $i ? ' is-active' : ''; ?>" data-ps-slide="<?php echo (int) $i; ?>">
						<img src="<?php echo esc_url( $img['src'] ); ?>" alt="<?php echo esc_attr( $ps['name'] ); ?>" loading="<?php echo 0 === $i ? 'eager' : 'lazy'; ?>">
					</figure>
				<?php endforeach; ?>

				<?php if ( count( $ps['images'] ) > 1 ) : ?>
					<div class="ps__tabs" role="tablist">
						<?php foreach ( $ps['images'] as $i => $img ) : ?>
							<button type="button" class="ps__tab<?php echo 0 === $i ? ' is-active' : ''; ?>" role="tab" aria-selected="<?php echo 0 === $i ? 'true' : 'false'; ?>" data-ps-tab="<?php echo (int) $i; ?>">
								<span class="lang-fr"><?php echo esc_html( $ps_text( $img['label'], 'fr' ) ); ?></span>
								<span class="lang-en"><?php echo esc_html( $ps_text( $img['label'], 'en' ) ); ?></span>
								<span class="lang-es"><?php echo esc_html( $ps_text( $img['label'], 'es' ) ); ?></span>
							</button>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>

	</div>
</section>

<?php if ( ! did_action( 'agnsee_product_showcase_assets' ) ) : ?>
	<?php do_action( 'agnsee_product_showcase_assets' ); ?>
	<style>
		.ps { padding: var(--space-xl) 0 var(--space-2xl); }
		.ps__grid { display: grid; grid-template-columns: 1fr; gap: var(--space-lg); align-items: start; }
		@media (min-width: 900px) { .ps__grid { grid-template-columns: 1fr 1fr; gap: 3.5rem; } }
		.ps__badge { display: inline-block; padding: 0.3rem 0.85rem; margin-bottom: var(--space-md); border: 1px solid var(--color-border); border-radius: 100px; font-size: var(--fs-xs); font-weight: 600; letter-spacing: 0.04em; text-transform: uppercase; color: var(--color-text-secondary); }
		.ps__title { font-size: clamp(2.5rem, 5.5vw, 4rem); font-weight: 700; line-height: 0.95; letter-spacing: -0.03em; margin: 0; }
		.ps__sectors { margin-top: var(--space-sm); }
		.ps__lead { margin-top: var(--space-md); max-width: 36rem; font-size: var(--fs-lg); color: var(--color-text-secondary); }
		.ps__chips { display: flex; flex-wrap: wrap; gap: 0.5rem; margin: var(--space-md) 0 0; padding: 0; list-style: none; }
		.ps__chip { padding: 0.35rem 0.8rem; border-radius: 100px; background: var(--color-bg-alt); font-size: var(--fs-xs); font-weight: 500; color: var(--color-text); }
		.ps__accordion { margin-top: var(--space-lg); max-width: 36rem; border-top: 1px solid var(--color-border); }
		.ps__item { border-bottom: 1px solid var(--color-border); }
		.ps__summary { display: flex; justify-content: space-between; align-items: center; gap: 1rem; padding: 1.1rem 0; font-weight: 600; cursor: pointer; list-style: none; }
		.ps__summary::-webkit-details-marker { display: none; }
		.ps__summary::after { content: '+'; font-size: 1.4rem; font-weight: 300; line-height: 1; color: var(--color-text-secondary); transition: transform var(--transition); }
		.ps__item[open] .ps__summary::after { transform: rotate(45deg); }
		.ps__content { padding: 0 0 1.25rem; font-size: var(--fs-sm); color: var(--color-text-secondary); }
		.ps__content p { margin: 0 0 0.75rem; }
		.ps__list { margin: 0; padding: 0; list-style: none; }
		.ps__list li { padding: 0.45rem 0; border-bottom: 1px solid var(--color-border); }
		.ps__list li:last-child { border-bottom: 0; }
		.ps__actions { display: flex; flex-wrap: wrap; gap: 0.75rem; margin-top: var(--space-lg); }
		.ps__btn-primary { background: var(--color-text); color: #fff; }
		.ps__btn-primary:hover { background: #000; color: #fff; }
		.ps__media { position: sticky; top: calc(var(--header-height) + 1.5rem); }
		@media (max-width: 899px) { .ps__media { position: static; order: -1; } .ps__panel { height: 320px !important; } .ps__slide { padding: 1.5rem 1.5rem 3.5rem; } }
		.ps__panel { position: relative; overflow: hidden; height: clamp(360px, 62vh, 640px); border: 1px solid var(--color-border); border-radius: var(--radius-lg); background: #fff; box-shadow: var(--shadow-sm); }
		.ps__slide { position: absolute; inset: 0; margin: 0; display: none; padding: 2.5rem 2.5rem 4.5rem; }
		.ps__slide.is-active { display: block; }
		.ps__slide img { width: 100%; height: 100%; object-fit: contain; }
		.ps__tabs { position: absolute; left: 50%; bottom: 1rem; transform: translateX(-50%); z-index: 2; display: flex; gap: 0.35rem; padding: 0.3rem; border: 1px solid var(--color-border); border-radius: 14px; background: rgba(255, 255, 255, 0.8); -webkit-backdrop-filter: blur(10px); backdrop-filter: blur(10px); }
		.ps__tab { padding: 0.5rem 1rem; border: 0; border-radius: 10px; background: transparent; font: inherit; font-size: var(--fs-xs); font-weight: 600; color: var(--color-text); cursor: pointer; white-space: nowrap; }
		.ps__tab.is-active { background: var(--color-text); color: #fff; }
	</style>
	<script>
		document.addEventListener( 'click', function ( e ) {
			var tab = e.target.closest( '[data-ps-tab]' );
			if ( ! tab ) { return; }
			var panel = tab.closest( '[data-ps-tabs]' );
			var index = tab.getAttribute( 'data-ps-tab' );
			panel.querySelectorAll( '[data-ps-tab]' ).forEach( function ( t ) {
				var on = t.getAttribute( 'data-ps-tab' ) === index;
				t.classList.toggle( 'is-active', on );
				t.setAttribute( 'aria-selected', on ? 'true' : 'false' );
			} );
			panel.querySelectorAll( '[data-ps-slide]' ).forEach( function ( s ) {
				s.classList.toggle( 'is-active', s.getAttribute( 'data-ps-slide' ) === index );
			} );
		} );
	</script>
<?php endif; ?>
