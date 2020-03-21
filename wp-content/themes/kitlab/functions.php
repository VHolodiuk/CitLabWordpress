<?php
/**
 * Functions (functions.php)
 * @package WordPress
 * @subpackage kitlab
 */
// Меню ----------------------------------------------------------------------------------------------------------------

register_nav_menus(array(
    'header_menu' => 'Меню в Header',
    'footer_menu' => 'Меню в Footer' 
));

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

//------SHortcad--------------------------------------
add_shortcode('table', 'show_table' );
function show_table(){

}

?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>