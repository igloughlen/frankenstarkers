<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	FrankenStarkers
 * @since 		FrankenStarkers 1.0
 */
Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>

	<h2><?php the_title(); ?></h2>
	 <p>
        Published on <?php the_time('M j, Y'); ?> 
        by <span class="badge"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(', '); ?></a></span>
        in <span class="badge"><?php the_category(', '); ?></span>
		<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
	</p>
	<?php the_content(); ?>			

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
	<h3>About <?php echo get_the_author() ; ?></h3>
	<?php the_author_meta( 'description' ); ?>
	<?php endif; ?>

	<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'twentyten' ) . ' %title' ); ?>
	<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '' ); ?>

	<?php comments_template( '', true ); ?>

</article>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>