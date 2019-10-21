<?php get_header(); ?>

<?php
    if( (bool)mythemes_mod( 'breadcrumbs', true ) ){
?>
        <div class="mythemes-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="mythemes-nav-inline">
                            <ul class="mythemes-menu">
                                <?php echo mythemes_breadcrumbs::home(); ?>
                                <li></li>
                            </ul>
                        </nav>
                        <h1><?php printf( __( 'Error %s' , 'treeson' ) , number_format_i18n( 404 ) ); ?></h1>
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

                <!-- CONTENT -->
                <section class="col-lg-12">

                    <div>
                        <h1 class="error-404"><?php echo number_format_i18n( 404 ); ?></h1>
                        <big class="error-404-message"><?php _e( 'Resource not found' , 'treeson' )?></big>
                        <p class="error-404-description"><?php _e( 'We apologize but this page, post or resource does not exist or can not be found.' , 'treeson' ) ?></p>

                        <div class="error-404-search">
                            <?php get_search_form(); ?>
                        </div>
                    <div>

                </section>

            </div>
        </div>
    </div>

<?php get_footer(); ?>