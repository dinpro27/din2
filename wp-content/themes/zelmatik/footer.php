<div class="preim preim-footer">
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

<footer id="footer">
 
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
				<div class="logo">
					<a href="/">
						<img src="<?php bloginfo("template_directory");?>/images/flogo2.png" alt="">		
					</a>	
				</div>
			</div>	
			
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
				<div class="footer-tel">
					<div class="header-top-k header-top-tel"> 8 (929) 986 38 17</div>	
					<div class="header-top-k header-top-mail"> kat@dinpro.ru</div>	
				</div>	
				<div class="navbar navbar-default" role="navigation">
        					<div class="navbar-header">
								<div class="mymen">Меню &rarr;</div>
          						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            					<span class="sr-only">Toggle navigation</span>
            					<span class="icon-bar"></span>
            					<span class="icon-bar"></span>
            					<span class="icon-bar"></span>
								 
          						</button>
								 
        					</div>
							
							<?php wp_nav_menu( array( 'container_class' => 'collapse navbar-collapse', 'menu_class' => 'nav navbar-nav', 'theme_location'=>'mfooter' ) ); ?>
    					</div>
			</div>
       	</div>
	</div>
</div>

</footer>  

 
 
<!-- Modal -->
<div class="modal fade modal-no-padding" id="modalcallback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-body">
	   		<button type="button" class="close" data-dismiss="modal">
	   			<span aria-hidden="true"></span><span class="sr-only">Close</span>
	   		</button> 
         	<div class="modal-title"> отправить заявку</div>
<form class="block-form form" action="<?php bloginfo("template_directory");?>/crm/handler.php" method="post" role="form" target="subscribe" enctype="multipart/form-data">
	<input name="form_name" value="ОТПРАВЬТЕ ЗАПРОС МЕНЕДЖЕРУ" type="hidden">
	<input name="form_name1" value="<?echo "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" type="hidden">
				
	<div class="blockform"> 
		<input name="name" placeholder="Ваше имя" class="form-control" type="text">
	</div>
	
	<div class="blockform">
		<input id="phone2" name="phone" placeholder="Телефон" class="form-control" type="phone">
	</div>
	
	<div class="blockform">
		<input id="email" name="email" placeholder="Email" class="form-control" type="email">
	</div>
	
	<div class="blockform">
		<textarea name="message" placeholder="Текст сообщения" class="form-control"></textarea>	
	</div>
					 
	<button id="submit" type="submit" class="button btn-block btn-custom"  >Отправить заявку</button>
</form> 

	  </div>
    </div>
  </div>
</div>
<!-- End Modal --> 

 

<!-- After Close Modal -->
<div class="modal fade modal-no-padding" id="modalTnx" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-body text-center">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	     <div class="modal_tnx_h">Спасибо</div>
         <p class="vzo">Наши менеджеры свяжутся с Вами в ближайшее время.</p>
      </div>
    </div>
  </div>
</div>
<!-- End --> 

 <iframe name="subscribe" src="about:blank" class="hidden"></iframe>
 
<?php wp_footer(); ?>   
 
	  <link href="<?php bloginfo("template_directory");?>/css/style1.css" rel="stylesheet">
 
 
</body>
</html>