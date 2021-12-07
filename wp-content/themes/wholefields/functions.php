<?php

function wholefields_theme_support(){
    // Adds dynamic title tag support 
    //comes from inside settings > general settings
    add_theme_support('title-tag'); 
    add_theme_support('custom-logo'); //allows custom icon in themes -> customize -> site identity
}
add_action('after_setup_theme', 'wholefields_theme_support');



function wholefields_menus(){
    //add support for dynamic menus...creating two different menus
    $locations = array(
        'primary' => "Desktop Primary",
        'footer' => "Footer Menu Items",
        'contact' => "Footer Contact",
        'info' => "Footer Info",
        'follow' => "Footer Follow"
    );
    register_nav_menus($locations);
}
add_action('init', 'wholefields_menus');




function wholefields_register_styles(){
    wp_enqueue_style('montserrat-google-fonts', "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap", array(), '1.0', 'all');
    
    wp_enqueue_style('wf-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    wp_enqueue_style('nav-style', get_template_directory_uri() . "/assets/css/nav.css");
    wp_enqueue_style('footer-style', get_template_directory_uri() . "/assets/css/footer.css");
    wp_enqueue_style('button-style', get_template_directory_uri() . "/assets/css/buttons.css");
    wp_enqueue_style('locations-style', get_template_directory_uri() . "/assets/css/locations.css");

    wp_enqueue_style('about-style', get_template_directory_uri() . "/assets/css/about.css");
    wp_enqueue_style('faq-style', get_template_directory_uri() . "/assets/css/faq.css");
    wp_enqueue_style('home-style', get_template_directory_uri() . "/assets/css/front-page.css");
    wp_enqueue_style('bc-product-archive-style', get_template_directory_uri() . "/assets/css/custom-bc-archive.css");

    wp_enqueue_style('bc-product-quickview-style', get_template_directory_uri() . "/assets/css/custom-bc-quickview.css");
    wp_enqueue_style('bc-product-singleproduct-style', get_template_directory_uri() . "/assets/css/custom-bc-singleproduct.css");


}
add_action('wp_enqueue_scripts','wholefields_register_styles');




function wholefields_register_scripts(){
    // wp_enqueue_script('wf-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true); //true places the script in the footer
    wp_enqueue_script('wf-jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', array(), '1.12.4', true); //true places the script in the footer

    wp_enqueue_script('wf-js-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true); //true places the script in the footer

}
add_action('wp_enqueue_scripts','wholefields_register_scripts');

?>