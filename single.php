<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>

	<h2><?php the_title(); ?></h2>
	<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
	<?php the_content(); ?>			

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
	<h3>About <?php echo get_the_author() ; ?></h3>
	<?php the_author_meta( 'description' ); ?>
	<?php endif; ?>
		<div id="post-nav" class="row">
			<div id="prev-post">
			    <?php $prevPost = get_previous_post(true);
			        if($prevPost) {
			            $args = array(
			                'posts_per_page' => 1,
			                'include' => $prevPost->ID
			            );
			            $prevPost = get_posts($args);
			            foreach ($prevPost as $post) {
			                setup_postdata($post);
			    ?>
			        <div class="post-previous">
			            <a class="previous" href="<?php the_permalink(); ?>">&laquo; Previous Story</a>
			            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
			            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			            <small><?php the_date('F j, Y'); ?></small>
			        </div>
			    <?php
			                wp_reset_postdata();
			            } //end foreach
			        } // end if
			    ?>
			</div><!-- #prev-post -->
			<div id="next-post">
			    <?php
			        $nextPost = get_next_post(true);
			        if($nextPost) {
			            $args = array(
			                'posts_per_page' => 1,
			                'include' => $nextPost->ID
			            );
			            $nextPost = get_posts($args);
			            foreach ($nextPost as $post) {
			                setup_postdata($post);
			    ?>
			        <div class="post-next">
			            <a class="next" href="<?php the_permalink(); ?>">Next Story &raquo;</a>
			            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
			            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			            <small><?php the_date('F j, Y'); ?></small>
			        </div>
			    <?php
			                wp_reset_postdata();
			            } //end foreach
			        } // end if
			    ?>
			</div><!-- #next-post -->
		</div><!-- #post-nav -->

	<?php comments_template( '', true ); ?>

</article>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>