<?php add_theme_support( 'post-thumbnails' ); 

register_nav_menus( array('primary' => 'Primary Navigation') );
?>

<?php
if ( function_exists('register_sidebar') )
    register_sidebar();

add_theme_support( 'custom-header' );
?>


