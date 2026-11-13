
<div class="xt-shop">
	<a class="xt-refresh-link" href="<?php echo $this->get_section_url('shop', array('nocache'=>'1'));?>">
		<span class="dashicons dashicons-image-rotate"></span> Refresh
	</a>
	<h3>Products you might like</h3>
	<div class="xt-shop-inner">
		<?php
		$products = $this->get_shop_products();
		foreach ($products as $product):
		
		$link = $product['info']['link'].'#'.$this->core->plugin_slug();
		?>
		
		<div class="xt-product">
			<div class="xt-product-inner">
				<div class="xt-product-thumbnail">
					<a target="_blank" href="<?php echo $link; ?>">
						<img src="<?php echo $product['info']['thumbnail']; ?>" />
					</a>
				</div>
				<div class="xt-product-info">
					<div class="xt-product-title">
						<a target="_blank" href="<?php echo $link; ?>">
							<?php echo $product['info']['title']; ?>
						</a>
					</div>
					<div class="xt-product-excerpt">
						<?php echo $product['info']['excerpt']; ?>
					</div>	
				</div>
				<div class="xt-product-footer">
					<div class="xt-product-price">
						$<?php echo $product['pricing']['amount']; ?>
					</div>
	
					<a class="xt-product-link" target="_blank" href="<?php echo $link; ?>">More Info</a>
				</div>					
			</div>
		</div>
	
		<?php endforeach; ?>	
	</div>
</div>
<style>
	.xt-shop,
	.xt-shop *{
		box-sizing: border-box;
	}
	.xt-shop a:focus{
		outline:none;
		-webkit-box-shadow: none;
		box-shadow:none;
	}
	.xt-shop{
		display:block;
		overflow:hidden;
		width:100%;
		color:#111;
	}
	.xt-shop h3{
		margin:0 0 10px 15px;
	}
	.xt-shop .xt-refresh-link{
		margin-right:15px;
		margin-top: 10px;
	}
	.xt-product{
		width: 50%;
		float:left;
		padding:15px;
	}
	@media screen and (max-width: 782px) {
		.xt-product{
			width:100%;	
		}
	}
	.xt-product-inner{
		height: 100%;
		-webkit-box-shadow: 0 0 3px rgba(24,24,24,0.2);
		box-shadow: 0 0 3px rgba(24,24,24,0.2);
		-webkit-transition: box-shadow 0.4s;
		transition: box-shadow 0.4s;	
		border-radius: 3px;	
	}
	.xt-product-inner:hover{
		-webkit-box-shadow: 0 0 14px rgba(24,24,24,0.3);
		box-shadow: 0 0 14px rgba(24,24,24,0.3);
	}	
	.xt-product-thumbnail img {
	    border: 0;
	    border-bottom: 1px solid #eaeaea;
	}
	.xt-product-info {
	    padding: 20px;
	}
	.xt-product-title {
		margin-bottom:10px;
	}
	.xt-product-title a{
		font-size:22px;
		font-weight: 700;
		text-decoration: none;
		color:#111;
	}
	.xt-product-excerpt{
		font-size: 15px;
		line-height: 21px;
		color:#666;
		overflow: hidden;
		display: -webkit-box;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical; 
	}
	.xt-product-footer{
		padding: 20px;
		border-top:1px solid #eaeaea;
		overflow: hidden;
	}
	.xt-product-price{
		font-size: 24px;
		color:#1b95e0;
		display: inline-block;
	}
	.xt-product-link{
		display: inline-block;
		float:right;
		text-decoration: none;
		color:#111;
		-webkit-transition: color 0.4s;
		transition: color 0.4s;	
	}
	.xt-product-inner:hover .xt-product-link{
		color:#1b95e0;
	}
</style>
<script>
;( function( $ ) {
	
	$(window).load(function() {
		
		var resizeShop = function() {
			
			var maxHeight = 0;
			
			$(".xt-product").height('');
			
			$(".xt-product").each(function(){
			    if ($(this).height() > maxHeight) { 
				   maxHeight = $(this).height(); 
			    }
			});
		
			$(".xt-product").height(maxHeight);
		};
		
		$(window).on('resize', function() {
			resizeShop();
		});
		
		resizeShop();
	});
	
})( jQuery );	
</script>