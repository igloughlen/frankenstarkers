	<!-- jQuery
    ================================================== -->
    <!-- Remove if you don't plan on using jQuery --> 
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Bootstrap javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->    
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-button.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap-typeahead.js"></script>

    <!--Responsive-Nav Hookup-->
    <script>
      var nav = responsiveNav(".nav-collapse");
    </script>

    <?php
    /* Always have wp_footer() just before the closing </body>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to reference JavaScript files.
     */
    wp_footer();
    ?>
	</body>
</html>