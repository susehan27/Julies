<?php get_header();?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <img id="welcome" src="<?php echo get_template_directory_uri(); ?>/images/welcome.jpg"/>
        </div>    
    </div>
    <div class="row">
        <div class="col">
            <div id="first">
                <p class="bebas" id="intro">"At Julie's Nail and Spa, <br>we provide the most comfortable <br> and relaxing environment <br> for your best care and needs"</p>
                <img id="plant" src="<?php echo get_template_directory_uri(); ?>/images/plant.png"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <a class="menuLink" href="http://localhost:8888/wordpress/services/#list-hands">
                <img class="services" id="hands" src="<?php echo get_template_directory_uri(); ?>/images/hands.png"/>
            </a>
        </div>
        <div class="col-md-3">
            <a class="menuLink" href="http://localhost:8888/wordpress/services/#list-feet"> 
                <img class="services" id="feet" src="<?php echo get_template_directory_uri(); ?>/images/feet.png"/>
            </a>
        </div>
        <div class="col-md-3">
            <a class="menuLink" href="http://localhost:8888/wordpress/services/#list-waxing"> 
                <img class="services" id="waxing" src="<?php echo get_template_directory_uri(); ?>/images/waxing.png"/>
            </a>
        </div>
        <div class="col-md-3">
            <a class="menuLink" href="http://localhost:8888/wordpress/services/#list-massage"> 
                <img class="services" id="massage" src="<?php echo get_template_directory_uri(); ?>/images/massage.png"/>
            </a>
        </div>
    </div>
</div>





<div class="container pt-5 pb-5">
    <!-- gets the title from the front page on wordpress.org -->
    
    <!-- gets the content for page in the body from wordpress.org-->
    <?php if (have_posts()): while(have_posts()): the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>
    
    
</div>

<?php get_footer();?>
