<?php get_header(); ?>

<section id="content">
	<?php get_template_part( 'nav', 'above-single' ); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php //comments_template('', true); ?>
	<?php endwhile; endif; ?>

	<?php get_template_part( 'nav', 'below-single' ); ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>