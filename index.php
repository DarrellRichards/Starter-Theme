<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if (has_post_thumbnail()): ?>
				<?php the_post_thumbnail(); ?>
		<?php endif ?>
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<p><?php the_content(); ?></p>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
<?php get_footer(); ?>