<?php 
function assignment_bootstrapping(){
    load_theme_textdomain("assignment");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");

    register_nav_menu("mainmenu", __("Top Menu","assignment"));
    register_nav_menu("footermenu", __("Footer Menu","assignment"));
    
}

add_action("after_setup_theme","assignment_bootstrapping");


function assignment_assets(){
    
    wp_enqueue_style("bootstrap","//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
    wp_enqueue_style("assignment",get_stylesheet_uri());
}

add_action("wp_enqueue_scripts","assignment_assets");


function assignment_sidebar(){
    register_sidebar(
        array(
            'name'          => __( 'Main Sidebar', 'alpha' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets on the side.', 'alpha' ),
            'before_widget' => '<section id="%1$s" class="widget">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        )
    );
    
}
add_action("widgets_init","assignment_sidebar");