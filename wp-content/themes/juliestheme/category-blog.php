<?php get_header();?>

<?php if (have_posts()): while(have_posts()): the_post();?>
    <div class="card mb-4 blogs">
        <div class="card-body georgia">

            <?php if(has_post_thumbnail()):?>

                <img id="image" src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
                <br>
                <br>
            <?php endif;?>

            <h3><?php the_title();?></h3>

            <?php the_excerpt();?>

            <a href="<?php the_permalink()?>" class="btn btn-light">read more</a>
        </div>
    </div>
<?php endwhile; endif;?>

<?php get_footer();?>