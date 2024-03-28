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

//add google fonts
function blogtheme_google_fonts()
{
    // wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&display=swap');

    wp_register_style('OpenSans', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&display=swap');
    wp_enqueue_style('OpenSans');

}
add_action('wp_enqueue_scripts', 'blogtheme_google_fonts');
//new feature to automatically add feature
add_theme_support('title-tag');
function custom_settings_add_menu() {
    add_menu_page(
        'Custom Settings', // Page title
        'Custom Settings', // Menu title
        'manage_options',  // Capability required to access
        'custom_settings', // Menu slug
        'custom_settings_page', // Callback function to display page content
        null, // Icon URL or Dashicons class
        99 // Position in the menu
    );
}
add_action('admin_menu', 'custom_settings_add_menu');

//Github
function setting_github(){
    ?>
    <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>">
    <?php
}
function setting_twitter(){
    ?>
    <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>">
    <?php
}
function setting_facebook(){
    ?>
    <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>">
    <?php
}


//create custom global settings
function custom_settings_page() {
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">Custom Settings</h1>
        <!-- <hr class="wp-header-end"> -->
        <form method="post" action="options.php">
            <?php
            settings_fields('section');
            do_settings_sections('theme-options');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
function custom_settings_page_setup() {
    add_settings_section('section','All Settings',null,"theme-options");
    add_settings_field("github",'Github URL','setting_github','theme-options','section');
    add_settings_field("twitter",'Twitter URL','setting_twitter','theme-options','section');
    add_settings_field("facebook",'Facebook URL','setting_facebook','theme-options','section');

    register_setting('section','twitter');
    register_setting('section','facebook');
    register_setting('section','github');
}

add_action('admin_init', 'custom_settings_page_setup');

add_theme_support( 'post-thumbnails' );
