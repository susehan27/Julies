<?php get_header();?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/nail_chairs.jpg" alt="First slide"/>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/pedi_chairs.jpg" alt="Second slide"/>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/waxing_room.jpg" alt="Third slide"/>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/spa_room.jpg" alt="Fourth slide"/>
                    </div>
                </div>
            </div>
            <p class="georgia" id="julies"><strong>Julie's Nail and Spa</strong> <br> 165 Yorktown Plz <br> Elkins Park, PA 19027<br> Phone: 215-886-1188 </p>
        </div>
    </div> 
</div>

<?php get_footer();?>