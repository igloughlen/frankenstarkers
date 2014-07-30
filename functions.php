<?php
	/**
	 * FrankenStarkers functions and definitions
	 *
	 * Functions that are not pluggable (not wrapped in function_exists()) are
	 * instead attached to a filter or action hook.
	 *
	 * For more information on hooks, actions, and filters,
	 * @link http://codex.wordpress.org/Plugin_API
	 *
 	 * @package 	WordPress
 	 * @subpackage 	FrankenStarkers
 	 * @since 		FrankenStarkers 1.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings
	
	======================================================================================================================== */

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	
	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'custom-image-size', 1038, 576, true );

	// Add CSS to Visual Editor
	add_editor_style('css/bootstrap.css');
	add_editor_style('style.css');
	
	// Custom excerpt length
	function custom_excerpt_length( $length ) {
	return 100;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length' );

	// Replaces the excerpt "more" text by a link
	function new_excerpt_more($more) {
    global $post;
	return ' <a class="moretag" href="'. get_permalink($post->ID) . '">Read the full article...</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'frankenstarkers' ),
		'footer' => __( 'Footer menu', 'frankenstarkers' ),
	) );

	//Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );



	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	// If a search returns only 1 post, redirect to that post
	add_action('template_redirect', 'redirect_single_post');
	function redirect_single_post() {
    if (is_search()) {
        global $wp_query;
        if ($wp_query->post_count == 1 && $wp_query->max_num_pages == 1) {
            wp_redirect( get_permalink( $wp_query->posts['0']->ID ) );
            exit;
        	}
    	}
	}



	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	//Enable SVG upload
	function cc_mime_types( $mimes ){
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter( 'upload_mimes', 'cc_mime_types' );

	//Fix SVG display in Media Library
	function custom_admin_head() {
		$css = '';
		$css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';
		echo '<style type="text/css">'.$css.'</style>';
	}
	add_action('admin_head', 'custom_admin_head');

	/* ========================================================================================================================
	
	Widgets
	
	======================================================================================================================== */
	function arphabet_widgets_init() {

	/*Example Widget */
	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	/* Example Widget End */
	
	/* New Widgets Start*/

	/* New Widgets End */
	} 


	add_action( 'widgets_init', 'arphabet_widgets_init' );
	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}