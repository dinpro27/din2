<?php get_header(); ?>

 
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
			<h1 class="entry-title"><?php the_title(); ?></h1>
			 

			 
				<div class="slider-akcii">
 
				<div class="owl-carousel mysl">
					<? while ( have_rows('field_5a32478beea2f') ) : the_row(); ?>
					<div class="item">
					 
					 <div class="sl-box" style="background: url(<?the_sub_field('field_5a32479feea30', 24899);?>) no-repeat center top / cover;">
 
						<?php if(get_sub_field('field_5a3247baeea31', 24899)!=''):?>
							<div class="sl-name1"><?the_sub_field('field_5a3247baeea31', 24899);?></div>
						<?php endif?> 
						<?php if(get_sub_field('field_5a3247cceea32', 24899)!=''):?>
							<div class="sl-name2"><?the_sub_field('field_5a3247cceea32', 24899);?></div>
						<?php endif?> 
 
					 </div>		
					 
					<div class="sl-box-time">
						<div class="sl-box-time-l">До конца акции осталось:</div>
						<div class="sl-box-time-r">
							<ul class="timer">
								<li><span><?the_sub_field('field_5a325c824a868', 24899);?></span>Дней</li>
								<li><span>10</span>Часов</li>
								<li><span>40</span>Минут</li>
								<li><span>20</span>Секунд</li>
							</ul>							
						</div>
					</div>
					  
					</div>
					
				<? endwhile; ?>	 	
			</div>
 
</div> 



			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php the_content(); ?>
					
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>	 
		 
	</div>	
</div>			
 
<?php get_footer(); ?> 