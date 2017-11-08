<! DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>"> 
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">
<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page_main" class="b7radius">
		<div class="wrapper">
			<div id="header">			
				<div id="header_logo">
					<a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/Logo.png" alt="Логотип"></a>				
				</div>
			</div>
			<!-- Главное навигационное меню подключенное стандартными средствами WordPress -->
			<nav class="top_nav">
				<?php //объявляем меню в шаблоне
				wp_nav_menu(array('menu' => 'main_menu', 'menu_class' => 'top-menu','container' => '','theme_location'  => 'main_menu'));?>
			</nav>

		 
		
		