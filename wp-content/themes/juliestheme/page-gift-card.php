<?php get_header();?>

<div class="container">
    <div class="row">
        <div class="col">
            <p class="gift bebas">
                purchase a gift card for your loved one!
            </p>
        </div>
    </div>
</div>

<div class="container pt-5 pb-5">
    <!-- gets the title from the front page on wordpress.org -->
    

    <?php if(has_post_thumbnail()):?>

        <img id="image" src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">

    <?php endif;?>
        
    <!-- gets the content for page in the body from wordpress.org-->
    <?php if (have_posts()): while(have_posts()): the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>
</div>

<?php get_footer();?>