<?php get_header();?>

<div class="container pt-5 pb-5">
    <!-- gets the title from the front page on wordpress.org -->
    <h1 class="blogTitle"><?php the_title();?></h1>
    <p class="blogDate georgia">Posted: <?php the_time('F jS, Y'); ?></p>
    <div class="blogPic">
        <?php if(has_post_thumbnail()):?>

            <img id="image" src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">

        <?php endif;?>
    </div>
    <!-- gets the content for page in the body from wordpress.org-->
    <div class="blogContent">
        <?php if (have_posts()): while(have_posts()): the_post();?>
            <?php the_content();?>
        <?php endwhile; endif;?>

        <br>
        <br>
        <div class="blogsButton">
            <a href="" class="bebas btnBlog btn btn-light">back to blogs</a>
        </div>
    </div>
</div>

<?php get_footer();?>
