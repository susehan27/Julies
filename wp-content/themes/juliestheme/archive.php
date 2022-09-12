<?php get_header();?>

<div class="container pt-5 pb-5">
    <!-- gets the title from the front page on wordpress.org -->
    <h1><?php single_cat_title();?></h1>

    <!-- gets the content for page in the body from wordpress.org-->
    <?php if (have_posts()): while(have_posts()): the_post();?>
        <div class="card mb-4">
            <div class="card-body">

                <?php if(has_post_thumbnail()):?>

                    <img id="image" src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">

                <?php endif;?>

                <h3><?php the_title();?></h3>

                <?php the_excerpt();?>

                <a href="<?php the_permalink()?>" class="btn btn-success">read more</a>
            </div>
        </div>
    <?php endwhile; endif;?>
</div>

<?php get_footer();?>
