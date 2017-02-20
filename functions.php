<?php
//Loading all of the JavaScript and CSS necessary for the Galleria image slider
function load_my_scripts() {
    wp_enqueue_style('galleriacss','/wp-content/themes/twentyeleven+slider/css/galleria.classic.css');
	wp_enqueue_script('jquerytools','/wp-content/themes/twentyeleven+slider/js/jquery-1.8.3.js');
	wp_enqueue_script('galleriamin','/wp-content/themes/twentyeleven+slider/js/galleria.classic.min.js');            
	wp_enqueue_script('galleriamininroot','/wp-content/themes/twentyeleven+slider/galleria.classic.min.js');  
	wp_enqueue_script('galleria','/wp-content/themes/twentyeleven+slider/js/galleria.classic.js');
	wp_enqueue_script('galleriamain','/wp-content/themes/twentyeleven+slider/js/galleria-1.2.9.js');
	wp_enqueue_script('jquerytools','/wp-content/themes/twentyeleven+slider/js/jquery_tools_1.2.7.js');
}    

add_action('wp_enqueue_scripts', 'load_my_scripts'); // For use on the front end but not within the admin pages

?>