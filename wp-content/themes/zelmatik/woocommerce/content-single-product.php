<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
global $product;
global $woocommerce;
 
 $_product = $product->post;
$_product->post_content; 
 
?>

<?php
/**
 * woocommerce_before_single_product hook.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form();
    return;
}
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>"
     id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	 
		 
	 
	  
<div class="myblrelkont-title">
		<?php 
        do_action('woocommerce_single_product_summary1'); 
        ?>
</div> 
    
<div class="myblrelkont">
	<div class="myblrelkont-l">
		<? do_action('woocommerce_before_single_product_summary'); ?>
	</div>
	<div class="myblrelkont-r">
	<?php
        /*do_action('woocommerce_single_product_summary'); */
        ?>
		<?php
        do_action('gadget_single_price1'); 
		
		?><div class="arti">Артикул: <?echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'woocommerce' );?></div><?
		
		do_action('gadget_single_price2'); 
		do_action('gadget_single_price3'); 
        ?>
	</div>
<div class="clear"></div>
<div class="myblrelkont1">
    <?php
    /**
     * woocommerce_after_single_product_summary hook.
     *
     * @hooked woocommerce_output_product_data_tabs - 10
     * @hooked woocommerce_upsell_display - 15
     * @hooked woocommerce_output_related_products - 20
     */


    do_action('woocommerce_after_single_product_summary');

    ?>

    <meta itemprop="url" content="<?php the_permalink(); ?>"/>

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action('woocommerce_after_single_product'); ?>
</div>
</div>