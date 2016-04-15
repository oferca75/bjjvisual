<?php
add_action( 'widgets_init', 'child_register_sidebar' );

function child_register_sidebar(){
    register_sidebar(array(
        'name' => 'Widget Area Top' ,
        'id' => 'widget-area-top' ,
        'before_widget' => '<div id="%1$s" class="widget %2$s">' ,
        'after_widget' => '</div>' ,
        'before_title' => '<h4 class="widgettitle">' ,
        'after_title' => '</h4>' ,
    ) );
    
    register_sidebar ( array(
        'name' => 'Main Sidebar' ,
        'id' => 'main-sidebar' ,
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
}