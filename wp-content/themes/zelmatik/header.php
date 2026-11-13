<!DOCTYPE html>
<html>
  <head>
	<link sizes="16x16" rel="shortcut icon" href="<?php bloginfo("template_directory");?>/images/favicon.ico" type="image/x-icon">
	<link sizes="16x16" rel="icon" href="<?php bloginfo("template_directory");?>/images/favicon.ico" type="image/x-icon">

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="<?php bloginfo("template_directory");?>/css/bootstrap.css" rel="stylesheet">
 
	<link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory");?>/css/jquery.fancybox.min.css">
 
	  <link href="<?php bloginfo("template_directory");?>/css/style1.css" rel="stylesheet">
 
	 
	<script src="<?php bloginfo("template_directory");?>/js/jquery.js"></script>
	<script src="<?php bloginfo("template_directory");?>/js/bootstrap.js"></script>
	<script src="<?php bloginfo("template_directory");?>/js/jquery.fancybox.min.js"></script>
 

	<script src="<?php bloginfo("template_directory");?>/js/jquery.validate.js"></script>
 	<script src="<?php bloginfo("template_directory");?>/js/messages_ru.js"></script>
    <script src="<?php bloginfo("template_directory");?>/js/sourcebuster.js"></script>
	<script src="<?php bloginfo("template_directory");?>/js/main.js"></script>
	<script src="<?php bloginfo("template_directory");?>/js/owl.carousel.min.js"></script>
 
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOtvTcJBaReo6aYkmP2f5p13KotQGZREU&callback=initMap"></script>
  													
 	 <?php wp_head(); ?> 
	</head>

<body <?php body_class(); ?>>

 <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44426155 = new Ya.Metrika({
                    id:44426155,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44426155" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  
<div class="headroom">
<header>
	<div class="header-top"> 	
	<div class="container">
	
		 <div class="row">    
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4">
				<div class="logo">
					<a href="/">
						<img src="<?php bloginfo("template_directory");?>/images/logo2.png" alt="">		
					</a>	
				</div>
			</div>	
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
					<div class="header-top-k header-top-tel"> <span>8 (929)</span> 986 38 17</div>	
					<div class="header-top-k header-top-mail"> <span>kat@</span>dinpro.ru</div>	
					<div class="clear"></div>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<?php dynamic_sidebar( 'search' ); ?>
			</div>	
		 </div>	
		 
    </div>
	</div>
	<div class="header-bottom"> 
	<div class="container">
		<div class="row">    
			<div class="col-xs-12">		 
					 
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
							
							<?php wp_nav_menu( array( 'container_class' => 'collapse navbar-collapse', 'menu_class' => 'nav navbar-nav', 'theme_location'=>'primary' ) ); ?>
    					</div>
				</div>	
			</div>	
		</div>	
	</div>	
			 
</header>
</div>
