<?php get_header(); ?>

<div class="container">
	<div class="row"> 
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
			<div class="breadcrumbs"> 		  
				<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' | '); ?>
			</div>
		</div>	
	</div>	
</div>			
 
<div class="container">
	<div class="row"> 
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9"> 
			<div class="the_content"> 
			<h1 class="entry-title"><?php the_title(); ?></h1>
			 
			
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php the_content(); ?>
					
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>	 
		<?php include 'sidebar.php';?>
	</div>	
</div>			
			
			
<?php get_footer(); ?> 