<?php get_header ( 'archive' );
?>
<aside id="widget-area-top">
    <?php if ( !function_exists ( 'dynamic_sidebar' ) || !dynamic_sidebar ( 'widget-area-top' ) ) {
    } ?>
</aside>

<?php get_sidebar (); ?>
<div id="content" style="text-align: center" class="cf">

    <div class="post intro">
        <!--        <h1> Brazilian JiuJitsu Techniques</h1>-->
        <p> Bjj Flux was created in order to give a unique experience to the Brazilian JuJitsu online student. No more
            namedroppings !<br>
            Instead is a collection of live videos ordered in a fight flow that enables you to see and decide in "real
            time" where to go next. Enjoy ! </p>
        <br>
        <?php
        ( $post->post_title ) ? $post->post_title : '';
        $next_moves = query_posts ( array( 'posts_per_page' => 20 ,
                'category__in' => array( 1 ) ) );
        ?>
        <div class="home-posts"><?php
            if ( have_posts () ) :
                get_template_part ( 'loop' );
                ?>
                <div class="navigation g3 cf"><p><?php // posts_nav_link();      
                        ?>
                    </p></div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer (); ?>
