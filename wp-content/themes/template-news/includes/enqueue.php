<?php 
if(!function_exists('glw_enqueue')){
    function glw_enqueue(){
        $ver = time();

        //css
        wp_register_style('gwl_css', THEME_URI.'/public/css/styles.css');
        wp_register_style('gwl_responsive', THEME_URI.'/public/css/responsive.css');
        wp_register_style('gwl_slick_slide-1',THEME_URI.'/public/css/slick-theme.css');
        wp_register_style('gwl_slick_slide-2',THEME_URI.'/public/css/slick.css');
        wp_register_style('gwl_aos', THEME_URI.'/public/css/aos.css');
        wp_register_style('gwl_fontawesome', THEME_URI.'/public/css/font-awesome-4.7.0/css/font-awesome.css');
        wp_register_style('gwl_fontawesome-min', THEME_URI.'/public/css/font-awesome-4.7.0/css/font-awesome.min.css');
        // wp_register_style('gwl_jquery', THEME_URI.'/public/css/jquery-3.6.0.js');
        //js
        wp_register_script('gwl_script', THEME_URI.'/public/css/scripts.js',array(), $ver, 'in_footer');
        wp_register_script('gwl_jquery', THEME_URI.'/public/css/jquery-3.6.0.js',array(), $ver, 'in_footer');
        wp_register_script('gwl_slick_slide',THEME_URI.'/public/css/slick.js',array(),$ver, 'in_footer');
        wp_register_script('gwl_aos_js',THEME_URI.'/public/css/aos.js',array(),$ver, 'in_footer');
        // wp_register_script('gwl_slickjs',THEME_URI. 'public/css/slick.js',array(),$ver,'in_footer');
        // wp_register_script('gwl_jquery',THEME_URI.'/public/css/jquery-3.6.0.js',array(),$ver,'in_footer');
        // wp_register_script('gwl_slick_slide',THEME_URI.'/public/css/slick.js', array(), $ver, 'in_footer');

        //enqueue css
        wp_enqueue_style('gwl_fontawesome-min');
        wp_enqueue_style('gwl_fontawesome');
        wp_enqueue_style('gwl_aos');
        wp_enqueue_style('gwl_css');
        wp_enqueue_style('gwl_responsive');
        wp_enqueue_style('gwl_slick_slide-1');
        wp_enqueue_style('gwl_slick_slide-2');
        // wp_enqueue_style('gwl_jquery');
        //enqueue js
        wp_enqueue_script('gwl_jquery');
        wp_enqueue_script('gwl_slick_slide');
        wp_enqueue_script('gwl_aos_js');
        wp_enqueue_script('gwl_script');
    }
    add_action('wp_enqueue_scripts', 'glw_enqueue');
}