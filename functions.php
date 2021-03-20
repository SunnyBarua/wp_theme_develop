<?php
get_template_part('/inc/sunny-options');

function sunny_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails',array('post','sliders','team','testimonials','portfolio'));
    load_theme_textdomain('sunny',get_template_directory_uri().'/languages');

    register_nav_menus(array(
        'main-menu'=>__('Primary Menu','sunny')
    ));

}
add_action('after_setup_theme','sunny_setup_theme');

function sunny_css_js_enqueue(){
    wp_enqueue_style('poppins-font',"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700");
    
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1.0','all');

    wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );

 

    wp_enqueue_style('magnific-css',get_template_directory_uri().'/assets/css/magnific-popup.css',array(),'1.0','all');

    wp_enqueue_style('owlcarousel-css',get_template_directory_uri().'/assets/css/owl.carousel.css',array(),'1.0','all');

    wp_enqueue_style('main-css',get_template_directory_uri().'/assets/css/style.css',array(),'1.0','all');

    wp_enqueue_style('responsive-css',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0','all');

    wp_enqueue_style('style-css',get_stylesheet_uri());

    
    wp_enqueue_script('popper-js', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owlcarousel-js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('magnific-js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('isotope-js', get_template_directory_uri().'/assets/js/isotope.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('imageloaded-js', get_template_directory_uri().'/assets/js/imageloaded.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('counter-js', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('waypoint-js', get_template_directory_uri().'/assets/js/waypoint.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true);


  
}
add_action('wp_enqueue_scripts','sunny_css_js_enqueue');


function sunny_custom_posts(){
    register_post_type('sliders',array(
        'labels' =>array(
            'name'=> __('Slides','Sunny'),
            'singular_name'=>__('Slider','Sunny')
        ),
        'public'=>true,
        'supports'=>array('title','editor','thumbnail','custom-fields')
    ));
    register_post_type('services',array(
        'labels' =>array(
            'name'=> __('Services','Sunny'),
            'singular_name'=>__('Service','Sunny')
        ),
        'public'=>true,
        'supports'=>array('title','editor','custom-fields')
    ));

    register_post_type('team',array(
        'labels' =>array(
            'name'=> __('Teams','Sunny'),
            'singular_name'=>__('Team','Sunny')
        ),
        'public'=>true,
        'supports'=>array('title','editor','thumbnail','custom-fields','page-attributes')
    ));
    register_post_type('testimonials',array(
        'labels' =>array(
            'name'=> __('Testimonials','Sunny'),
            'singular_name'=>__('Testimonial','Sunny')
        ),
        'public'=>true,
        'supports'=>array('thumbnail','custom-field','page-attributes')
    ));

    register_post_type('gallery',array(
        'labels' =>array(
            'name'=> __('Gallerys','Sunny'),
            'singular_name'=>__('Gallery','Sunny')
        ),
        'public'=>true,
        'supports'=>array('title','custom-field','page-attributes')
    ));

    register_post_type('portfolio',array(
        'labels' =>array(
            'name'=> __('Portfolios','Sunny'),
            'singular_name'=>__('Portfolio','Sunny')
        ),
        'public'=>true,
        'supports'=>array('title','editor','thumbnail','custom-field','page-attributes')
    ));

    register_taxonomy('portfolio-cat','portfolio',array(
        'labels'=>array(
            'name'=>__('Categories','sunny'),
            'singular_name'=>__('Category','sunny')
        ),
        'hierarchical'=>true,
        'show_admin_column'=>true
    ));


}
add_action('init','sunny_custom_posts');


function sunny_widgets(){

    register_sidebar( array(
        'name'=>__('Main Sidebar','sunny'),
        'id'=>'main_sidebar',
        'description'=>__('Main Sidebar for Blog Page','sunny'),
        'before_widget'=>'<div class="single-sidebar">',
        'after_widget'=>'</div>',

        'before_title'=>'<h4>',
        'after_title'=>'</h4>'
    ));

    register_sidebar( array(
        'name'=>__('Footer Sidebar 1','sunny'),
        'id'=>'footer_sidebar1',
        'description'=>__('Footer Widget 1 for showing widget','sunny'),
        'before_widget'=>'<div class="single-footer footer-logo">',
        'after_widget'=>'</div>',

        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
    ));

    register_sidebar( array(
        'name'=>__('Footer Sidebar 2','sunny'),
        'id'=>'footer_sidebar2',
        'description'=>__('Footer Widgets 2 for showing widget','sunny'),
        'before_widget'=>'<div class="single-footer ">',
        'after_widget'=>'</div>',

        'before_title'=>'<h4>',
        'after_title'=>'</h4>'
    ));
 
    register_sidebar( array(
        'name'=>__('Footer Sidebar 3','sunny'),
        'id'=>'footer_sidebar3',
        'description'=>__('Footer Widgets 3 for showing widget','sunny'),
        'before_widget'=>'<div class="single-footer">',
        'after_widget'=>'</div>',

        'before_title'=>'<h4>',
        'after_title'=>'</h4>'
    ));

    register_sidebar( array(
        'name'=>__('Footer Sidebar 4','sunny'),
        'id'=>'footer_sidebar4',
        'description'=>__('Footer Widgets 4 for showing widget','sunny'),
        'before_widget'=>'<div class="single-footer">',
        'after_widget'=>'</div>',

        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
    ));

}

add_action('widgets_init','sunny_widgets' );


function sunny_comments_field($fields){

    $comment= $fields['comment'];
    $name= $fields['name'];
    $email= $fields['email'];

    $website= $fields['website'];
    $cokkies= $fields['cokkies'];

     unset($fields['comment']);
     unset($fields['name']);
     unset($fields['email']);
     unset($fields['website']);
     unset($fields['cokkies']);

     $fields['name']=$name;
     $fields['email']=$email;
     $fields['website']=$website;
     $fields['comment']=$comment;
     $fields['cokkies']=$cokkies;

     return $fields;
}
add_filter('comments_form_filed','sunny_comments_field');

require_once get_template_directory().'/inc/sunny-activation.php';