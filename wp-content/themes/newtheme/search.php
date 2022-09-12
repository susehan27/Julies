<?php
	get_header();
?>

	<article class="content px-3 py-5 p-md-5">
	
		<?php
			if( have_posts() ){
				
				while( have_posts() ){

					the_post();
					
                    get_template_part('template-parts/content', 'archive');
				}
			}
            else {
                echo '<h1>No Results Found</h1>';
                get_search_form();

            }
		?>

	</article>
    


<?php
	get_footer();
?>