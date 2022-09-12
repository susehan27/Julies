<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>

</head> 

<body>
    <div class="container-fluid m-0 p-0">
    <nav class="navbar sticky-top justify-content-center">
    
        <?php
            if (function_exists("the_custom_logo")) {
                the_custom_logo();
            }
        ;?>
        
        <div class="nav justify-content-center">	
            <?php
                wp_nav_menu(
                    array(
                        'menu_class' => 'header',
                        'theme_location' => 'primary',
                        'items_wrap' => '<a class="nav-item" href="#">%3$s</a>',
                    )

                );
            ?>
        </div>

    </nav>

    <!-- <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php the_title();?></h1>
		</header> -->