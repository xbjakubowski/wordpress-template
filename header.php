<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(''); ?></title>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico?123">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>images/favicon.ico?123">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
			<![endif]-->
			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
			<meta name="description" content="<?php bloginfo( 'description' ); ?>">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?<?php echo date('His'); ?>" />
			<script>document.documentElement.className = 'js';</script>
			<?php wp_enqueue_script("jquery"); ?>
			<?php wp_head(); ?>
		</head>
		<body>
			<header>
				<nav class="navbar navbar-fixed-top navbar-top">
					<div class="container">
						<div class="navbar-header">
							<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_gray.svg" alt="MagnaPolonia" class="logo"></a>
						</div>
						<?php wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'container' => false,
							'menu_class'=> '',
							'items_wrap' => '<ul class="menu nav navbar-nav navbar-right top-menu" id="menu">%3$s</ul>',
							)); ?>
						</div>
						<div class="icon">
							<a href="javascript:void(0);" onclick="menu()">&#9776;</a>
						</div>
					</nav>
				</header>
