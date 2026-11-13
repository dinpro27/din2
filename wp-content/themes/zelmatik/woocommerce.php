<?php get_header(); ?>
<?
global $product;
$description = term_description();
  
?>
<div class="preim">
	<div class="container">
		<div class="row"> 
			<? while ( have_rows('field_5a2e36ca51428', 24846) ) : the_row(); ?>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="preim-box">
					<?php if(get_sub_field('field_5a2e36f05142a', 24846)!=''):?>
					<div class="preim-txt" style="background: url(<?the_sub_field('field_5a2e36df51429', 24846);?>) no-repeat left center;">
						<?the_sub_field('field_5a2e36f05142a', 24846);?>
					</div>
					<?php endif?>
				</div> 
			</div> 
			<? endwhile; ?>	 	
		</div> 
	</div> 
</div> 

 		
 
<div class="container">
	<div class="row"> 
		
		<?php include 'sidebar.php';?>
		
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9"> 
			<div class="row">  
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
					<div class="breadcrumbs"> 		  
						<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' | '); ?>
					</div>
				</div>	
			</div>	
	
			<div class="the_content"> 
				 
			 
				<?php woocommerce_content(); ?>
				
				<div class="clear"></div>  
				<?if($description):?>
				<div class="bg-whi">
					<?do_action( 'woocommerce_archive_description1' );?>
				</div>
				<?endif?>
			</div>
		</div>	 
		 
	</div>	
</div>			
			
			
<?php get_footer(); ?> 
