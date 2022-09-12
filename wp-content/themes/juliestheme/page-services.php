<?php get_header();?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="menu">
            <!-- <div class="row">
                <div class="col">
                    <div class="list-group bebas" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-hands" role="tab" aria-controls="home">Hands</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-feet" role="tab" aria-controls="profile">Feet</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-waxing" role="tab" aria-controls="messages">Waxing</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-massage" role="tab" aria-controls="settings">Massage</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-kids" role="tab" aria-controls="kids">Kids</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-more" role="tab" aria-controls="more">More</a>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-hands" role="tabpanel" aria-labelledby="list-home-list">
                            <img class="menu" id="hands" src="<?php echo get_template_directory_uri(); ?>/images/menu_hands2.png"/>
                        </div>
                        <div class="tab-pane fade" id="list-feet" role="tabpanel" aria-labelledby="list-profile-list">
                            <img class="menu" id="feet" src="<?php echo get_template_directory_uri(); ?>/images/menu_feet2.png"/>
                        </div>
                        <div class="tab-pane fade" id="list-waxing" role="tabpanel" aria-labelledby="list-messages-list">
                            <img class="menu" id="waxing" src="<?php echo get_template_directory_uri(); ?>/images/menu_waxing2.png"/>
                        </div>
                        <div class="tab-pane fade" id="list-massage" role="tabpanel" aria-labelledby="list-settings-list">
                            <img class="menu" id="massage" src="<?php echo get_template_directory_uri(); ?>/images/menu_massage2.png"/>
                        </div>
                        <div class="tab-pane fade" id="list-kids" role="tabpanel" aria-labelledby="list-kids-list">
                            <img class="menu" id="kids" src="<?php echo get_template_directory_uri(); ?>/images/menu_kids2.png"/>
                        </div>
                        <div class="tab-pane fade" id="list-more" role="tabpanel" aria-labelledby="list-more-list">
                            <img class="menu" id="more" src="<?php echo get_template_directory_uri(); ?>/images/menu_more2.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();?>