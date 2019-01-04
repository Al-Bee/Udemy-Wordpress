<?php

function rad_college_files() {
  wp_enqueue_style('rad_college_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'rad_college_files');

 ?>
