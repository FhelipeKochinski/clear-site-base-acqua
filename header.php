<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="author" content="Diovan Decol - Muito Mais Digital">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="all" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico" type="image/x-icon"/>
	<?php wp_head(); ?>
</head>

<body> 
	
	<header id="header">

		<!-- Top Header -->
		<div class="topHeader">
			<div class="container">
			
				<!-- Logo -->
				<figure id="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php getImagemObj(get_field('logo_header', 'option')['sizes'], '2048x2048', 'Acqua Time') ?>
					</a>
				</figure>

				<!-- E-mail -->
				<?php if (get_field('email', 'options')) { ?>
					<div class="linkHeader email">
						<i class="fa fa-envelope-o"></i>
						<div class="texto">
							<a href="mailto: <?= get_field('email', 'options') ?>" id="emailHeader">
								<?= get_field('email', 'options') ?>
							</a>
						</div>
					</div>
				<?php } ?>

				<!-- Telefone -->
				<?php if (get_field('telefone', 'options')) { ?>
					<div class="linkHeader telefoneHeader">
						<i class="fa fa-phone"></i>
						<div class="texto">
							<a href="tel: <?= linkTelefone(get_field('telefone', 'options')) ?>" id="telefoneHeader">
								<?= get_field('telefone', 'options') ?>
							</a>
						</div>
					</div>
				<?php } ?>

			</div>
		</div>

		<!-- Bottom Header -->
		<div class="bottomHeader">
			<div class="container">

				<!-- Menu -->
				<div id="boxMenu">

					<!-- Fecha Menu -->
					<figure id="fechaMenu">
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/05/fecha-menu.png" alt="Fecha Menu" />
					</figure>

					<!-- Menu -->
					<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => '')); ?>

				</div>
						
			</div>
		</div>
			
	</header>