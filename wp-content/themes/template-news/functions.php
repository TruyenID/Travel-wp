<?php

//Set up - Define

define('THEME_URI', get_stylesheet_directory_uri());
define('THEME_PATH', get_theme_file_path());

//Includes
require_once 'includes/enqueue.php';

function initTheme(){
    add_filter('use_block_editor_for_post', '__return_false');
    register_nav_menu('header-menu',__( 'header menu' ));
    register_nav_menu('contact-header',__( 'contact header' ));
    register_nav_menu('footer-menu-1',__( 'footer menu 1' ));
    register_nav_menu('footer-menu-2',__( 'footer menu 2' ));
    register_nav_menu('footer-menu-3',__( 'footer menu 3' ));
    register_nav_menu('footer-menu-4',__( 'footer menu 4' ));
}
// function initThemeContact(){
//     add_filter('use_block_editor_for_post', '__return_false');
//     register_nav_menu('contact-header',__( 'contact header' ));
// }
add_action('init', 'initTheme');
// add_action('init', 'initThemeContact');
add_theme_support('post-thumbnails');
//menu header
if( !function_exists('header_menu')){
    function header_menu($menu) {
        $menu = array(
            'theme_location' => $menu,
            'container' => 'false', 
            'menu_id' => 'header-menu', 
            'menu_class' => $menu
        );
        wp_nav_menu( $menu );
    }
}
if( !function_exists('contact_header')){
    function contact_header($contact_header) {
        $contact_header = array(
            'theme_location' => $contact_header,
            'container' => 'false', 
            'menu_id' => 'contact-header', 
            'menu_class' => $contact_header
        );
        wp_nav_menu( $contact_header );
    }
}
if( !function_exists('footer_menu_1')){
    function footer_menu_1($footer_menu_1) {
        $footer_menu_1 = array(
            'theme_location' => $footer_menu_1,
            'container' => 'false', 
            'menu_id' => 'footer-menu-1', 
            'menu_class' => $footer_menu_1
        );
        wp_nav_menu( $footer_menu_1 );
    }
}
if( !function_exists('footer_menu_2')){
    function footer_menu_2($footer_menu_2) {
        $footer_menu_2 = array(
            'theme_location' => $footer_menu_2,
            'container' => 'false', 
            'menu_id' => 'footer-menu-2', 
            'menu_class' => $footer_menu_2
        );
        wp_nav_menu( $footer_menu_2 );
    }
}
if( !function_exists('footer_menu_3')){
    function footer_menu_3($footer_menu_3) {
        $footer_menu_3 = array(
            'theme_location' => $footer_menu_3,
            'container' => 'false', 
            'menu_id' => 'footer-menu-3', 
            'menu_class' => $footer_menu_3
        );
        wp_nav_menu( $footer_menu_3 );
    }
}
if( !function_exists('footer_menu_4')){
    function footer_menu_4($footer_menu_4) {
        $footer_menu_4 = array(
            'theme_location' => $footer_menu_4,
            'container' => 'false', 
            'menu_id' => 'footer-menu-4', 
            'menu_class' => $footer_menu_4
        );
        wp_nav_menu( $footer_menu_4 );
    }
}
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ));
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="text-center"><ul class="pagination bounceInUp animated wow" data-wow-delay=".8s">';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
       echo '</ul></div>';
    }
}