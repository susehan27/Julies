<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<header class="sticky-top">
    <div class="container">
        
        <div class="nav justify-content-center bebas">
            <?php wp_nav_menu(
                array(
                    "theme_location" => "top-menu",
                    "menu_class" => "navigation"
                )
            );?>
        </div>

        <div class="custom_logo">
            <a href="location.href='http://localhost:8888/wordpress/';">
                <?php
                    if (function_exists("the_custom_logo")) {
                        the_custom_logo();
                    }
                ;?>
            </a>
        </div>
    </div>
</header>
