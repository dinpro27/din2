<div class="form-box">
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