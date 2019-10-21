<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package EasyPoint
 */

get_header();
?>

<header class="page-header ep-error-404">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'easypoint' ); ?></h1>
					<?php easypoint_breadcrumb_trail(); ?>
				</header><!-- .page-header -->
			</div>
		</div>
	</div>
</header><!-- .page-header -->

<div class="container">
	<div class="row justify-content-center">

		<?php
			if ( get_theme_mod( 'blog_archive_sidebar_position', 'right' ) === 'left' ) {
				get_sidebar();
			}
		?>

		<div id="primary" class="content-area col-md-9 <?php if( get_theme_mod( 'blog_archive_sidebar_position', 'right' ) === 'left' ) : echo 'order-first order-md-last'; endif; ?>">
			<main id="main" class="site-main">

				<section class="error-404 not-found">

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'easypoint' ); ?></p>

						<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts', array(), array(
							'before_title' => '<h5 class="widget-title mt-4">',
							'after_title'  => '</h5>',
						) );
						?>

						<div class="widget widget_categories">
							<h5 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'easypoint' ); ?></h5>
							<ul>
								<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
								?>
							</ul>
						</div><!-- .widget -->

						<?php
							the_widget( 'WP_Widget_Archives', 'dropdown=1', array(
								'before_title' => '<h5 class="widget-title">',
								'after_title'  => '</h5>',
							) );

							the_widget( 'WP_Widget_Tag_Cloud', array(), array(
								'before_title' => '<h5 class="widget-title">',
								'after_title'  => '</h5>',
							) );
						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php
			if ( get_theme_mod( 'blog_archive_sidebar_position', 'right' ) === 'right' ) {
				get_sidebar();
			}
		?>

	</div><!-- /.row -->
</div><!-- /.container -->

<?php
get_footer();
