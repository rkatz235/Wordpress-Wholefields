<?php
/**
 * Default Product Single Template
 * Override this template in your own theme by creating a file at
 * [your-theme]/bigcommerce/single-bigcommerce_product.php
 * 
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header(); ?>
<div class="main-wrapper">
	<header class="page-title">
		<?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        ?>
	</header>
<?php 
echo apply_filters( 'bigcommerce/template/product/single', '', get_the_ID() );
get_footer();
