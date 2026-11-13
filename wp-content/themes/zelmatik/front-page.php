<?php get_header(); ?>

<div class="slider-home">
	<div class="container">
		<div class="row"> 
				<div class="owl-carousel mysl">
					<? while ( have_rows('field_5a2e2688bd4c2') ) : the_row(); ?>
					<div class="item">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5"> 	
					 <div class="sl-box">
					 
						<?php if(get_sub_field('field_5a2e26e0bd4c4', 24846)!=''):?><div class="sl-name"><?the_sub_field('field_5a2e26e0bd4c4', 24846);?></div><?php endif?>
						
						<?php if(get_sub_field('field_5a2e26eebd4c5', 24846)!=''):?><div class="sl-descr"><?the_sub_field('field_5a2e26eebd4c5', 24846);?></div><?php endif?>
						<?php if(get_sub_field('field_5a2e26f5bd4c6', 24846)!=''):?><div class="sl-old_price"><?the_sub_field('field_5a2e26f5bd4c6', 24846);?></div><?php endif?>
						<?php if(get_sub_field('field_5a2e2701bd4c7', 24846)!=''):?><div class="sl-new_price"><?the_sub_field('field_5a2e2701bd4c7', 24846);?></div><?php endif?>
					 </div>		
					</div>	
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-7"> 	 
						<div class="sl-img">
							<?php if(get_sub_field('field_5a2e2ad69eb6e', 24846)!=''):?><div class="sl-sale"><?the_sub_field('field_5a2e2ad69eb6e', 24846);?></div><?php endif?>
							<?php if(get_sub_field('field_5a2e26ccbd4c3', 24846)!=''):?><a href="<?the_sub_field('field_5a2e270abd4c8', 24846);?>"><img src="<?the_sub_field('field_5a2e26ccbd4c3', 24846);?>" alt=""></a><?php endif?>
						</div>
					</div>	   
					</div>
				<? endwhile; ?>	 	
			</div>
		</div> 
	</div> 
</div> 
 
<div class="preim">
	<div class="container">
		<div class="row"> 
			<? while ( have_rows('field_5a2e36ca51428') ) : the_row(); ?>
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

<div class="homesale">
	<div class="container">
		<div class="row"> 
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php dynamic_sidebar( 'homesale' ); ?>
			</div> 
		</div> 
	</div> 
</div> 
 
 
<div class="homecatalog">
	<div class="container">
		<div class="row"> 
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="home-txt1"> 
					<?the_field('field_5a2ee97c0a4e2');?>
				</div>
				<div class="myinzh"><h1>Инженерная сантехника</h1></div>
			</div> 
		</div> 	
		<div class="row"> 
			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
				<div class="home-brend"> 
					<img src="<?php bloginfo("template_directory");?>/images/brend1.png" alt="">
				</div>
			</div> 	
			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-4">
				<div class="home-brend"> 
					<img src="<?php bloginfo("template_directory");?>/images/brend2.png" alt="">
				</div>
			</div> 	
			<? while ( have_rows('field_5a2ee98a0a4e3') ) : the_row(); ?>
			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
				<div class="cat-box">
					<a href="<?the_sub_field('field_5a2ee9de0a4e6', 24846);?>">
						<span class="cat-box-img">
						<img src="<?the_sub_field('field_5a2ee9be0a4e4', 24846);?>" alt="">
						</span> 
						<span class="cat-box-title">
						<?the_sub_field('field_5a2ee9d40a4e5', 24846);?>
						</span> 
					</a>
				</div> 
			</div> 
			<? endwhile; ?>	 	
			
		</div> 
	</div> 
</div> 


<div class="homesale homereed">
	<div class="container">
		<div class="row"> 
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php dynamic_sidebar( 'homeprosm' ); ?>	
			</div> 
		</div> 
	</div> 
</div> 
			
			
<?php get_footer(); ?> 