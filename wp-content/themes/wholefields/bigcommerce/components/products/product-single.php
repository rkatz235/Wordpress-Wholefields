<?php
/**
 * @var Product $product
 * @var string  $images
 * @var string  $title
 * @var string  $brand
 * @var string  $price
 * @var string  $rating
 * @var string  $form
 * @var string  $description
 * @var string  $sku
 * @var string  $specs
 * @var string  $related
 * @var string  $reviews
 * @var array[] $post_meta
 * @version 1.0.0
 */

use BigCommerce\Post_Types\Product\Product;


?>

<!-- data-js="bc-product-data-wrapper" is required. -->
<section class="bc-product-single__top" data-js="bc-product-data-wrapper">
	<?php echo $images; ?>
	<!-- data-js="bc-product-meta" is required. -->
	<div class="bc-product-single__meta" data-js="bc-product-meta">
		<?php echo $title; ?>
		<?php echo $brand; ?>
		<?php echo $description; ?>
		<?php echo $price; ?>

		<?php echo $form; ?>
	</div>
</section>

<!-- <section class="bc-single-product__description nutritional_info">
	<h4 class="bc-single-product__section-title">Nutritional Info</h4>
	<div class="nutritional_text">
		<p>Allergens/Nutritional information goes here. Allergens/Nutritional information goes here. Allergens/Nutritional information goes here. Allergens/Nutritional information goes here. Allergens/Nutritional information goes here. Allergens/Nutritional information goes here.</p>
		<div class="nutritional_badges">
			<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/veg-logo.png"/>
			<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/dairy-free.png"/>
		</div>
	</div>
</section> -->


