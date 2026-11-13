<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
global $wp_query;


$_product = $product->post;
$_product->post_content; 
 
 if(isset($wp_query->query_vars['product_cat'])):
    $category_name = $wp_query->query_vars['product_cat'];
 
endif;	
 
// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php post_class(); ?>>
	<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	 
 
	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	 ?><div class="cat_prod_img">
	  <a href="<?echo get_permalink($product->post->id)?>">
	 <?
	 
	do_action( 'woocommerce_before_shop_loop_item_title' );
	 
	?></a></div><?
	?><div class="cat_prod_info"><?
	 ?><div class="cat_prod_info_title"><a href="<?echo get_permalink($product->post->id)?>"><?do_action( 'woocommerce_shop_loop_item_title' );?></a></div><?
	if($product->sku!=''):?><div class="cat_prod_info_sky">Артикул: <?echo $product->sku?></div><?endif;?>
	
	 
	<?do_action( 'woocommerce_singlex' );?>
	
	</div>
	
	<div class="cat_prod_add"><?
 	 
	do_action( 'woocommerce_after_shop_loop_item_title' );
	do_action( 'woocommerce_after_shop_loop_item' );
	?></div>
</li>
