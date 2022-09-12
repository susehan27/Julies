<?php get_header();?>

<div class="container pt-5 pb-5">
    <!-- gets the title from the front page on wordpress.org -->
    <h1><?php the_title();?></h1>
    
    <!-- gets the content for page in the body from wordpress.org-->
    <?php if (have_posts()): while(have_posts()): the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>
</div>

<?php get_footer();?>
