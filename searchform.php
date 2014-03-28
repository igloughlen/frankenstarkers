<?php
/**
 * Template for displaying search forms in FrankenStarkers
 *
 * @package WordPress
 * @subpackage FrankenStarkers
 * @since FrankenStarkers 1.0
 */
?>

<form role="search" method="get" class="search-form input-group" action="<?php echo home_url( '/' ); ?>">
	<input type="search" class="search-field form-control" placeholder="Search" name="s" title="Search for:">
	<span class="input-group-btn">
		<input class="search-submit btn btn-default" type="submit" value="Go!">
	</span>
</form><!-- /input-group -->