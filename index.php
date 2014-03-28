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
Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/header' ) ); ?>
      
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-sm-4">
          <img class="img-circle" src="http://placekitten.com/200/200"></img>
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default btn-sm" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-sm-4">
          <img class="img-circle" src="http://placekitten.com/200/200"></img>
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default btn-sm" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-sm-4">
          <img class="img-circle" src="http://placekitten.com/200/200"></img>
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default btn-sm" href="#">View details &raquo;</a></p>
        </div>
      </div><!-- .row -->
      <div class="row">
        <hr>
        <div id="index_loop" class="col-md-6 col-md-offset-3">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php if(is_category('featured')): ?>class="featured-post"<?php endif; ?>>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h2>    

              <p>
                Published on <?php the_time('M j, Y'); ?> 
                by <span class="badge"><?php the_author(', '); ?></span>
                in <span class="badge"><?php the_category(', '); ?></span>
              </p>

              <?php the_excerpt(); ?>

            </article>

            <?php endwhile; else: ?>

              <p>Sorry, this post does not exist</p>

            <?php endif; ?>
          </div><!-- #index_loop -->
      </div><!-- row -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>