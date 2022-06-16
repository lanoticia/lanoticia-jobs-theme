<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
        <title></title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header class="site-header container">
			<nav class="navegacion">
				<div class="navbar navbar-expand-lg navbar-light">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/lanoticiajobs.png" class="img-fluid">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarlnj" aria-controls="navbarlnj" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarlnj">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'menu_principal',
								'items_wrap' => '<ul id="%1$s" class="nav navbar-nav ml-auto %2$s">%3$s</ul>',
								'container' => false,
								'menu_class' => ''
							));
						?>
					</div>
				</div>
			</nav>			
		</header>