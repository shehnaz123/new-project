        <footer>
            <?php
                $are_active_sidebras =  is_active_sidebar( 'footer-first' ) ||
                                        is_active_sidebar( 'footer-second' ) ||
                                        is_active_sidebar( 'footer-third' );
                
                if( $are_active_sidebras || (bool)mythemes_mod( 'default-content', true ) ){
            ?>
                    <aside>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <?php get_sidebar( 'footer-first' ); ?>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                    <?php get_sidebar( 'footer-second' ); ?>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                    <?php get_sidebar( 'footer-third' ); ?>
                                </div>
                            </div>
                        </div>
                    </aside>
            <?php
                }
            ?>

            <div class="mythemes-black-side">
                <div class="container mythemes-copyright">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <p>
                                <span class="copyright"><?php echo mythemes_validate_copyright( mythemes_mod( 'copyright' , sprintf( __( 'Copyright &copy; 2015. Powered by %s.' , 'treeson' ) , '<a href="http://wordpress.org/">WordPress</a>' ) ) ); ?></span>
                                <span><?php echo mythemes_options::get( 'author-link' ); ?></span>
                            </p>
                        </div>
                        <?php
                            if( isset( $wp_customize ) ) {
                                $vimeo      = esc_url( mythemes_mod( 'vimeo', 'http://vimeo.com/#' ) );
                                $twitter    = esc_url( mythemes_mod( 'twitter', 'http://twitter.com/#' ) );
                                $skype      = esc_url( mythemes_mod( 'skype' ) );
                                $renren     = esc_url( mythemes_mod( 'renren' ) );
                                $github     = esc_url( mythemes_mod( 'github' ) );
                                $rdio       = esc_url( mythemes_mod( 'rdio' ) );
                                $linkedin   = esc_url( mythemes_mod( 'linkedin' ) );
                                $behance    = esc_url( mythemes_mod( 'behance', 'http://behance.com/#' ) );
                                $dropbox    = esc_url( mythemes_mod( 'dropbox' ) );
                                $flickr     = esc_url( mythemes_mod( 'flickr', 'http://flickr.com/#' ) );
                                $tumblr     = esc_url( mythemes_mod( 'tumblr' ) );
                                $instagram  = esc_url( mythemes_mod( 'instagram' ) );
                                $vkontakte  = esc_url( mythemes_mod( 'vkontakte' ) );
                                $facebook   = esc_url( mythemes_mod( 'facebook', 'http://facebook.com/#' ) );
                                $evernote   = esc_url( mythemes_mod( 'evernote' ) );
                                $flattr     = esc_url( mythemes_mod( 'flattr' ) );
                                $picasa     = esc_url( mythemes_mod( 'picasa' ) );
                                $dribbble   = esc_url( mythemes_mod( 'dribbble' ) );
                                $mixi       = esc_url( mythemes_mod( 'mixi' ) );
                                $stumbl     = esc_url( mythemes_mod( 'stumbleupon' ) );
                                $lastfm     = esc_url( mythemes_mod( 'lastfm' ) );
                                $gplus      = esc_url( mythemes_mod( 'gplus' ) );
                                $gcircle    = esc_url( mythemes_mod( 'google-circles' ) );
                                $pinterest  = esc_url( mythemes_mod( 'pinterest', 'http://pinterest.com/#' ) );
                                $smashing   = esc_url( mythemes_mod( 'smashing' ) );
                                $soundcloud = esc_url( mythemes_mod( 'soundcloud' ) );
                                $rss        = esc_url( mythemes_mod( 'rss', esc_url( get_bloginfo('rss2_url') ) ) );

                                $vm_class   = empty( $vimeo ) ? 'hidden' : '';
                                $tw_class   = empty( $twitter ) ? 'hidden' : '';
                                $sk_class   = empty( $skype ) ? 'hidden' : '';
                                $rn_class   = empty( $renren ) ? 'hidden' : '';
                                $gt_class   = empty( $github ) ? 'hidden' : '';
                                $rd_class   = empty( $rdio ) ? 'hidden' : '';
                                $ln_class   = empty( $linkedin ) ? 'hidden' : '';
                                $bh_class   = empty( $behance ) ? 'hidden' : '';
                                $db_class   = empty( $dropbox ) ? 'hidden' : '';
                                $fk_class   = empty( $flickr ) ? 'hidden' : '';
                                $tm_class   = empty( $tumblr ) ? 'hidden' : '';
                                $in_class   = empty( $instagram ) ? 'hidden' : '';
                                $vk_class   = empty( $vkontakte ) ? 'hidden' : '';
                                $fb_class   = empty( $facebook ) ? 'hidden' : '';
                                $ev_class   = empty( $evernote ) ? 'hidden' : '';
                                $ft_class   = empty( $flattr ) ? 'hidden' : '';
                                $pc_class   = empty( $picasa ) ? 'hidden' : '';
                                $dr_class   = empty( $dribbble ) ? 'hidden' : '';
                                $mx_class   = empty( $mixi ) ? 'hidden' : '';
                                $st_class   = empty( $stumbl ) ? 'hidden' : '';
                                $ls_class   = empty( $lastfm ) ? 'hidden' : '';
                                $gp_class   = empty( $gplus ) ? 'hidden' : '';
                                $gc_class   = empty( $gcircle ) ? 'hidden' : '';
                                $pn_class   = empty( $pinterest ) ? 'hidden' : '';
                                $sm_class   = empty( $smashing ) ? 'hidden' : '';
                                $sc_class   = empty( $soundcloud ) ? 'hidden' : '';
                                $rs_class   = empty( $rss ) ? 'hidden' : '';

                                $vimeo      = empty( $vimeo ) ?  esc_url( home_url() ) : $vimeo;
                                $twitter    = empty( $twitter ) ? esc_url( home_url() ) : $twitter;
                                $skype      = empty( $skype ) ? esc_url( home_url() ) : $skype;
                                $renren     = empty( $renren ) ? esc_url( home_url() ) : $renren;
                                $github     = empty( $github ) ? esc_url( home_url() ) : $github;
                                $rdio       = empty( $rdio ) ? esc_url( home_url() ) : $rdio;
                                $linkedin   = empty( $linkedin ) ? esc_url( home_url() ) : $linkedin;
                                $behance    = empty( $behance ) ? esc_url( home_url() ) : $behance;
                                $dropbox    = empty( $dropbox ) ? esc_url( home_url() ) : $dropbox;
                                $flickr     = empty( $flickr ) ? esc_url( home_url() ) : $flickr;
                                $tumblr     = empty( $tumblr ) ? esc_url( home_url() ) : $tumblr;
                                $instagram  = empty( $instagram ) ? esc_url( home_url() ) : $instagram;
                                $vkontakte  = empty( $vkontakte ) ? esc_url( home_url() ) : $vkontakte;
                                $facebook   = empty( $facebook ) ? esc_url( home_url() ) : $facebook;
                                $evernote   = empty( $evernote ) ? esc_url( home_url() ) : $evernote;
                                $flattr     = empty( $flattr ) ? esc_url( home_url() ) : $flattr;
                                $picasa     = empty( $picasa ) ? esc_url( home_url() ) : $picasa;
                                $dribbble   = empty( $dribbble ) ? esc_url( home_url() ) : $dribbble;
                                $mixi       = empty( $mixi ) ? esc_url( home_url() ) : $mixi;
                                $stumbl     = empty( $stumbl ) ? esc_url( home_url() ) : $stumbl;
                                $lastfm     = empty( $lastfm ) ? esc_url( home_url() ) : $lastfm;
                                $gplus      = empty( $gplus ) ? esc_url( home_url() ) : $gplus;
                                $gcircle    = empty( $gcircle ) ? esc_url( home_url() ) : $gcircle;
                                $pinterest  = empty( $pinterest ) ? esc_url( home_url() ) : $pinterest;
                                $smashing   = empty( $smashing ) ? esc_url( home_url() ) : $smashing;
                                $soundcloud = empty( $soundcloud ) ? esc_url( home_url() ) : $soundcloud;
                                $rss        = empty( $rss ) ? esc_url( home_url() ) : $rss;
                            }
                            else{
                                $vimeo      = esc_url( mythemes_mod( 'vimeo', 'http://vimeo.com/#' ) );
                                $twitter    = esc_url( mythemes_mod( 'twitter', 'http://twitter.com/#' ) );
                                $skype      = esc_url( mythemes_mod( 'skype' ) );
                                $renren     = esc_url( mythemes_mod( 'renren' ) );
                                $github     = esc_url( mythemes_mod( 'github' ) );
                                $rdio       = esc_url( mythemes_mod( 'rdio' ) );
                                $linkedin   = esc_url( mythemes_mod( 'linkedin' ) );
                                $behance    = esc_url( mythemes_mod( 'behance', 'http://behance.com/#' ) );
                                $dropbox    = esc_url( mythemes_mod( 'dropbox' ) );
                                $flickr     = esc_url( mythemes_mod( 'flickr', 'http://flickr.com/#' ) );
                                $tumblr     = esc_url( mythemes_mod( 'tumblr' ) );
                                $instagram  = esc_url( mythemes_mod( 'instagram' ) );
                                $vkontakte  = esc_url( mythemes_mod( 'vkontakte' ) );
                                $facebook   = esc_url( mythemes_mod( 'facebook', 'http://facebook.com/#' ) );
                                $evernote   = esc_url( mythemes_mod( 'evernote' ) );
                                $flattr     = esc_url( mythemes_mod( 'flattr' ) );
                                $picasa     = esc_url( mythemes_mod( 'picasa' ) );
                                $dribbble   = esc_url( mythemes_mod( 'dribbble' ) );
                                $mixi       = esc_url( mythemes_mod( 'mixi' ) );
                                $stumbl     = esc_url( mythemes_mod( 'stumbleupon' ) );
                                $lastfm     = esc_url( mythemes_mod( 'lastfm' ) );
                                $gplus      = esc_url( mythemes_mod( 'gplus' ) );
                                $gcircle    = esc_url( mythemes_mod( 'google-circles' ) );
                                $pinterest  = esc_url( mythemes_mod( 'pinterest', 'http://pinterest.com/#' ) );
                                $smashing   = esc_url( mythemes_mod( 'smashing' ) );
                                $soundcloud = esc_url( mythemes_mod( 'soundcloud' ) );
                                $rss        = esc_url( mythemes_mod( 'rss', esc_url( get_bloginfo('rss2_url') ) ) );

                                $vm_class   = '';
                                $tw_class   = '';
                                $sk_class   = '';
                                $rn_class   = '';
                                $gt_class   = '';
                                $rd_class   = '';
                                $ln_class   = '';
                                $bh_class   = '';
                                $db_class   = '';
                                $fk_class   = '';
                                $tm_class   = '';
                                $in_class   = '';
                                $vk_class   = '';
                                $fb_class   = '';
                                $ev_class   = '';
                                $ft_class   = '';
                                $pc_class   = '';
                                $dr_class   = '';
                                $mx_class   = '';
                                $st_class   = '';
                                $ls_class   = '';
                                $gp_class   = '';
                                $gc_class   = '';
                                $pn_class   = '';
                                $sm_class   = '';
                                $sc_class   = '';
                                $rs_class   = '';
                            }
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="mythemes-social">
                                <?php
                                    if( !empty( $vimeo ) ){
                                        echo '<a href="' . esc_url( $vimeo ) . '" class="mythemes-icon-vimeo ' . esc_attr( $vm_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $twitter ) ){
                                        echo '<a href="' . esc_url( $twitter ) . '" class="mythemes-icon-twitter ' . esc_attr( $tw_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $skype ) ){
                                        echo '<a href="' . esc_url( $skype ) . '" class="mythemes-icon-skype ' . esc_attr( $sk_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $renren ) ){
                                        echo '<a href="' . esc_url( $renren ) . '" class="mythemes-icon-renren ' . esc_attr( $rn_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $github ) ){
                                        echo '<a href="' . esc_url( $github ) . '" class="mythemes-icon-github ' . esc_attr( $gt_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $rdio ) ){
                                        echo '<a href="' . esc_url( $rdio ) . '" class="mythemes-icon-rdio ' . esc_attr( $rd_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $linkedin ) ){
                                        echo '<a href="' . esc_url( $linkedin ) . '" class="mythemes-icon-linkedin ' . esc_attr( $ln_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $behance ) ){
                                        echo '<a href="' . esc_url( $behance ) . '" class="mythemes-icon-behance ' . esc_attr( $bh_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $dropbox ) ){
                                        echo '<a href="' . esc_url( $dropbox ) . '" class="mythemes-icon-dropbox ' . esc_attr( $db_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $flickr ) ){
                                        echo '<a href="' . esc_url( $flickr ) . '" class="mythemes-icon-flickr ' . esc_attr( $fk_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $tumblr ) ){
                                        echo '<a href="' . esc_url( $tumblr ) . '" class="mythemes-icon-tumblr ' . esc_attr( $tm_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $instagram ) ){
                                        echo '<a href="' . esc_url( $instagram ) . '" class="mythemes-icon-instagram ' . esc_attr( $in_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $vkontakte ) ){
                                        echo '<a href="' . esc_url( $vkontakte ) . '" class="mythemes-icon-vkontakte ' . esc_attr( $vk_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $facebook ) ){
                                        echo '<a href="' . esc_url( $facebook ) . '" class="mythemes-icon-facebook ' . esc_attr( $fb_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $evernote ) ){
                                        echo '<a href="' . esc_url( $evernote ) . '" class="mythemes-icon-evernote ' . esc_attr( $ev_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $flattr ) ){
                                        echo '<a href="' . esc_url( $flattr ) . '" class="mythemes-icon-flattr ' . esc_attr( $ft_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $picasa ) ){
                                        echo '<a href="' . esc_url( $picasa ) . '" class="mythemes-icon-picasa ' . esc_attr( $pc_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $dribbble ) ){
                                        echo '<a href="' . esc_url( $dribbble ) . '" class="mythemes-icon-dribbble ' . esc_attr( $dr_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $mixi ) ){
                                        echo '<a href="' . esc_url( $mixi ) . '" class="mythemes-icon-mixi ' . esc_attr( $mx_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $stumbl ) ){
                                        echo '<a href="' . esc_url( $stumbl ) . '" class="mythemes-icon-stumbleupon ' . esc_attr( $st_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $lastfm ) ){
                                        echo '<a href="' . esc_url( $lastfm ) . '" class="mythemes-icon-lastfm ' . esc_attr( $ls_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $gplus ) ){
                                        echo '<a href="' . esc_url( $gplus ) . '" class="mythemes-icon-gplus ' . esc_attr( $gp_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $gcircle ) ){
                                        echo '<a href="' . esc_url( $gcircle ) . '" class="mythemes-icon-google-circles ' . esc_attr( $gc_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $pinterest ) ){
                                        echo '<a href="' . esc_url( $pinterest ) . '" class="mythemes-icon-pinterest ' . esc_attr( $pn_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $smashing ) ){
                                        echo '<a href="' . esc_url( $smashing ) . '" class="mythemes-icon-smashing ' . esc_attr( $sm_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $soundcloud ) ){
                                        echo '<a href="' . esc_url( $soundcloud ) . '" class="mythemes-icon-soundcloud ' . esc_attr( $sc_class ) . '" target="_blank"></a>';
                                    }
                                    if( !empty( $rss ) ){
                                        echo '<a href="' . esc_url( $rss ) . '" class="mythemes-icon-rss ' . esc_attr( $rs_class ) . '" target="_blank"></a>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        <?php wp_footer(); ?>

    </body>
</html>