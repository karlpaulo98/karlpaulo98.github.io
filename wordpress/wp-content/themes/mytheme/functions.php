<?php


/* This function is the one that imports the stylesheet on all pages */
function stylesheet_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','stylesheet_resources');
/* This function is the one that imports the stylesheet on all pages */



register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu'),
));


?>
