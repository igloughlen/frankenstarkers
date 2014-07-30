<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	FrankenStarkers
 * @since 		FrankenStarkers 1.0
 */
//Get the <head>
Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>

<?php 
//Get the header
Starkers_Utilities::get_template_parts( array( 'parts/shared/header' ) ); ?>

      <div id="featured_posts" class="row">
        <hr>
        <div id="index_loop" class="col-md-6 col-md-offset-3">
            <?php query_posts( array( 
              'post_type' => 'post', 
              'order' => 'ASC',
              'orderby' => 'date',
              )); 
            ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php if(is_category('featured')): ?>class="featured-post"<?php endif; ?>>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h2>    

              <p>
                Published on <?php the_time('M j, Y'); ?> 
                by <span class="badge"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(', '); ?></a></span>
                in <span class="badge"><?php the_category(', '); ?></span>
              </p>

              <?php the_excerpt(); ?>

            </article>

            <?php endwhile; else: ?>

              <h2>Sorry, we couldn't find any posts</H2>
              <p>Maybe, you can try searching for what you were looking for.</p>
              <?php get_search_form(); ?>

            <?php endif; ?>
          </div><!-- #index_loop -->
      </div><!-- row -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>