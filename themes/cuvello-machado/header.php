<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cuvello-machado
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
  	<meta name="description" content="<?php bloginfo('description'); ?>">
  	<meta name="author" content="<?php bloginfo('admin_email'); ?>">
  	<meta name="generator" content="Wordpress <?php bloginfo('version'); ?>">
  	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=1" /> 

  	<!-- TEXTAREA EDITOR -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">

	<!-- DATATABLE -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/responsive/2.2.0/css/responsive.bootstrap.min.css" rel="stylesheet">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- FONTAWESOME -->
	<script src="https://use.fontawesome.com/8df0f545f4.js"></script>

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Open+Sans:300|Raleway:300,400,500,600,700|Source+Sans+Pro:300i,400" rel="stylesheet">

	<!-- ESTILO CSS -->
	<link href="<?php bloginfo('template_directory');?>/css/style.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/css/responsivo.css" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body id="home" <?php body_class(); ?> data-spy="scroll" data-target=".navbar-fixed-top">
	<header class="header">
		<nav class="navbar navbar-default navbar-fixed-top navbar-bootsnipp animate" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand no-padding" href="<?php echo get_home_url(); ?>/home"><img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="" class="cuvellomachado-logo"></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<?php if ( is_front_page() || is_home() ) { ?>
							<?php if(is_page('processo') || is_page('timeline')) : ?>
								<li><a href="<?php echo get_stylesheet_directory_uri() . '/timeline/logout.php' ?>">Sair</a></li>
							<?php else : ?>
								<li><a class="page-scroll" data-scroll="#home" href="#home">Home</a></li>
								<li><a class="page-scroll" data-scroll="#blog-section" href="#blog-section">Nosso Blog</a></li>
								<li><a class="page-scroll" data-scroll="#services-section" href="#services-section">Áreas de Atuação</a></li>
								<li><a class="page-scroll" data-scroll="#client-area" href="#client-area">Área do Cliente</a></li>
								<li><a class="page-scroll" data-scroll="#team-section" href="#team-section">Equipe</a></li>
								<li><a class="page-scroll" data-scroll="#contact-section" href="#contact-section">Contato</a></li>
								<?php if (isset($_SESSION['logado'])) : ?>
									<li><a class="exit" href="<?php echo get_home_url(); ?>/timeline">Área do Cliente</a></li>
									<li><a class="exit" href="<?php echo get_stylesheet_directory_uri() . '/timeline/logout.php' ?>">Sair</a></li>
								<?php endif; ?>
							<?php endif; ?>
						<?php } else { ?>
							<?php if(is_page('processo') || is_page('timeline')) : ?>
								<li><a href="<?php echo get_stylesheet_directory_uri() . '/timeline/logout.php' ?>">Sair</a></li>
							<?php else : ?>
								<li><a class="page-scroll" href="<?php echo esc_url(home_url('/'));?>#home">Home</a></li>
								<li><a class="page-scroll" href="<?php echo esc_url(home_url('/'));?>#blog-section">Nosso Blog</a></li>
								<li><a class="page-scroll" href="<?php echo esc_url(home_url('/'));?>#services-section">Áreas de Atuação</a></li>
								<li><a class="page-scroll" href="<?php echo esc_url(home_url('/'));?>#client-area">Área do Cliente</a></li>
								<li><a class="page-scroll" href="<?php echo esc_url(home_url('/'));?>#team-section">Equipe</a></li>
								<li><a class="page-scroll" href="<?php echo esc_url(home_url('/'));?>#contact-section">Contato</a></li>
								<?php if (isset($_SESSION['logado'])) : ?>
									<li><a class="exit" href="<?php echo get_home_url(); ?>/timeline">Área do Cliente</a></li>
									<li><a class="exit" href="<?php echo get_stylesheet_directory_uri() . '/timeline/logout.php' ?>">Sair</a></li>
								<?php endif; ?>
							<?php endif; ?>
						<?php } ?>
					</ul>
				</div>
			<div class="border-menu"></div>
			</div>
		</nav>
	</header>




