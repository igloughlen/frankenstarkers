	<!-- jQuery
    ================================================== -->
    <!-- Remove if you don't plan on using jQuery --> 
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Bootstrap javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
    <!-- To activate .js plugins, uncomment and remove from php -->    
    <script src="<?php echo get_template_directory_uri();?>/js/affix.js"></script>
    <?php /* <script src="<?php echo get_template_directory_uri();?>/js/alert.js"></script> */ ?>
    <script src="<?php echo get_template_directory_uri();?>/js/button.js"></script>
    <?php /* <script src="<?php echo get_template_directory_uri();?>/js/carousel.js"></script> */ ?>
    <?php /* <script src="<?php echo get_template_directory_uri();?>/js/collapse.js"></script> */ ?>
    <?php /* <script src="<?php echo get_template_directory_uri();?>/js/dropdown.js"></script> */ ?>
    <?php /* <script src="<?php echo get_template_directory_uri();?>/js/modal.js"></script> */ ?>
    <?php /* <script src="<?php echo get_template_directory_uri();?>/js/popover.js"></script> */ ?>
    <script src="<?php echo get_template_directory_uri();?>/js/scrollspy.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/site.js"></script>
    <?php /* <script src="<?php echo get_template_directory_uri();?>/js/tab.js"></script> */ ?>
    <?php /* <script src="<?php echo get_template_directory_uri();?>/js/tooltip.js"></script> */ ?>
    <script src="<?php echo get_template_directory_uri();?>/js/transition.js"></script>

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