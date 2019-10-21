<?php get_header(); ?>

<?php
    if( have_posts() ){
        while( have_posts() ){
            the_post();

            if( (bool)mythemes_mod( 'breadcrumbs', true ) ){
        ?>
                <div class="mythemes-page-header">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="mythemes-nav-inline">
                                    <ul class="mythemes-menu">
                                        <?php
                                            echo mythemes_breadcrumbs::home();
                                            echo mythemes_breadcrumbs::pages( $post );
                                        ?>
                                        <li></li>
                                    </ul>
                                </nav>
                                <h1><?php the_title(); ?></h1>
                            </div>
                        </div>
                    </div>

                </div>
        <?php
            }
        ?>
            <div class="content">
                <div class="container">
                    <div class="row">

                    <?php
                        global $mythemes_layout;

                        $settings = 'page';

                        if( mythemes_mod( 'special-page' , 2 ) == $post -> ID ){
                            $settings = 'special-page';                            
                        }

                        /* GET LAYOUT DETAILS */
                        $mythemes_layout = new mythemes_layout( $settings );

                        /* LEFT SIDEBAR */
                        $mythemes_layout -> sidebar( 'left' );
                    ?>
                        <!-- CONTENT -->
                        <section class="<?php echo $mythemes_layout -> classes(); ?>">

                        <?php
                            /* LEFT WRAPPER */
                            echo $mythemes_layout -> wrapper( 'left' );

                        ?>
                            <div <?php post_class( 'mythemes-page' ); ?>>

                                <?php
                                    $p_thumbnail = get_post( get_post_thumbnail_id( $post -> ID ) );

                                    if( has_post_thumbnail() && isset( $p_thumbnail -> ID ) ){
                                ?>
                                        <div class="post-thumbnail">
                                            <?php 
                                                echo get_the_post_thumbnail( $post -> ID , 'mythemes-classic', array(
                                                    'alt' => mythemes_post::title( $post -> ID, true )
                                                ));
                                                
                                                $c_thumbanil = isset( $p_thumbnail -> post_excerpt ) ? esc_html( $p_thumbnail -> post_excerpt ) : null;

                                                if( !empty( $c_thumbanil ) ){
                                                    echo '<footer>' . $c_thumbanil . '</footer>';
                                                }
                                            ?>
                                        </div>
                                <?php
                                    }
                                ?>

                                <!-- CONTENT -->
                                <?php the_content(); ?>

                                <div class="clearfix"></div>

                                <?php
                                    wp_link_pages( array( 
                                        'before'        => '<div class="mythemes-paged-post"><span class="mythemes-pagination-title">' . __( 'Pages', 'treeson' ) . ': </span>',
                                        'after'         => '</div>',
                                        'link_before'   => '<span class="mythemes-pagination-item">',
                                        'link_after'    => '</span>'
                                    ));
                                ?>

                                <div class="clearfix"></div>

                            </div>

                            <!-- COMMENTS -->
                            <?php comments_template(); ?>

                        <?php
                            /* RIGHT WRAPPER */
                            echo $mythemes_layout -> wrapper( 'right' );
                        ?>

                        </section>

                    <?php
                        /* RIGHT SIDEBAR */
                        $mythemes_layout -> sidebar( 'right' );
                    ?>
                    
                    </div>
                </div>
            </div>
<?php
        } /* END PAGE */
    }
?>

<?php get_footer(); ?>