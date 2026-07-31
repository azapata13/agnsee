<?php
/**
 * Template de repli — requis par WordPress pour un thème valide.
 */

get_header();
?>

<main id="main-content" class="site-main">
	<div class="container section">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'card' ); ?> style="margin-bottom:1.5rem;">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<p>
				<span class="lang-fr">Aucun contenu trouvé.</span>
				<span class="lang-en">No content found.</span>
					<span class="lang-es">No se encontró contenido.</span>
			</p>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
