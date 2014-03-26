		<div class="container">
			
			<header>

				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<h3><?php bloginfo( 'description' ); ?></h3>
				
				<nav class="nav-collapse">
					<div id="access" role="navigation">
					  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
						<a href="#content" style="display:none;" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a>
						<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
						<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
					</div><!-- #access -->
					<div id="header_search"><?php get_search_form(); ?></div>
				</nav>

			</header>
