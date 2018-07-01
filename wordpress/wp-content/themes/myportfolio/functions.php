<?php

//this function will load the stylesheet
function stylesheet() {
	wp_enqueue_script('main-portfolio-js', get_theme_file_uri('/js/jquery-3.2.1.js'), NULL, '1.0', true);
	wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
	wp_enqueue_script('script-js', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);	
	wp_enqueue_style('style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts','stylesheet');



function pagename() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'pagename');










S


?>