<?php
/**
 * The template for displaying search forms in Joesnellpdx
 *
 * @package Joesnellpdx
 * @since Joesnellpdx 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'joesnellpdx' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'joesnellpdx' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'joesnellpdx' ); ?>" />
	</form>
