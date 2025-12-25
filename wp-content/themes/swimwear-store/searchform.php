<?php
/**
 * The template for displaying search form.
 *
 * @package     Swimwear Store
 * @since       0.1
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'swimwear-store' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search …', 'swimwear-store' ); ?>" value="" name="s">
	</label>
	<button type="submit" class="search-submit" value="<?php esc_attr_e( 'Search', 'swimwear-store' ); ?>">
		<i class="fa fa-search"></i>
	</button>
</form>