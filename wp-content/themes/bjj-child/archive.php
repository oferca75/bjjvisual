<?php get_header (); ?>

<!--<aside id="widget-area-top">-->
<!--    --><?php //if ( !function_exists ( 'dynamic_sidebar' ) || !dynamic_sidebar ( 'widget-area-top' ) ) {
//    } ?>
<!--</aside>-->

<?php get_sidebar();

?>

<div id="content" class="cf">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    if ( have_posts () ) :
        get_template_part ( 'loop' );
        ?>
        <div class="navigation g3 cf"><p><?php posts_nav_link (); ?></p></div>
    <?php endif; ?>
</div>
<?php get_footer (); ?>
