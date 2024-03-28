<?php

//Add scripts and stylesheets
function blogtheme_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . './css/bootstrap.min.css',array(),'3.3.5');
    wp_enqueue_style('blog', get_template_directory_uri() . './css/blog.css',array());
    wp_enqueue_script('bootstrap', get_template_directory_uri() . './js/bootstrap.min.js',array('jquery'),'3.3.5',true);
    // true is to put js to the bottom  
}

add_action('wp_enqueue_scripts', 'blogtheme_scripts');