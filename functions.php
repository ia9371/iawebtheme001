<?php

$header_info = array(
    'width'         => 1000,
    'height'        => 250,
    'default-image' => get_template_directory_uri() . '/images/default-image.jpg',
);
add_theme_support( 'custom-header', $header_info );



function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );
		
?>