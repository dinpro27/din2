<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 sidebar"> 
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				<div class="widget-wrap">
				<aside id="archives" class="widget">
					<h2 class="widget-title"><?php _e( 'Archives', 'media-maven' ); ?></h2>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>
                </div>

				<div class="widget-wrap">
                <aside id="meta" class="widget">
					<h2 class="widget-title"><?php _e( 'Meta', 'media-maven' ); ?></h2>
					<ul>
						<?php wp_register(); ?>
						<aside><?php wp_loginout(); ?></aside>
						<?php wp_meta(); ?>
					</ul>
				</aside>
                </div>
	<?php endif; // end sidebar widget area ?>	
</div>