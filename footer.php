<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stylus_first
 */



	    $custom_logo_id = get_theme_mod( 'custom_logo' );
         $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
         $description = get_bloginfo('description', 'display');

?>
<section class="footer4 cid-qY4RtJlfI8 p-5" id="footer4-9">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center align-center">
            <!-- <div class="col-md-2 my-col col-sm-4">
                <div class="menu-footer">
                    <?php
                wp_nav_menu( array(
                    'theme_location' => 'meu_menu',
                    'depth' => 1,
                    'container' => 'div',
                    'container_class' => 'footer-menu',
                    'container_id' => 'footer-m',
                    )
                );
                ?>
                </div>
            </div> -->

            <div class="col-md-8 col-sm-4 footer-adv display-7">
                <a href="#">Lorem Ipsum</a>
            </div>

            <div class="col-md-8 col-sm-4 align-center">
                <p class="display-5">
                    Lorem Ipsum</p>
                <div class="row justify-content-center align-center m-auto">
                    <div class="col col-lg-2">
                        <a href="3" target="_blank">
                            <i class="fa fa-facebook-square fa-2x"></i>
                        </a>
                    </div>
                    <div class="col col-lg-2">
                        <a href="#" target="_blank">
                        <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>

                        </a>
                    </div>
                    <div class="col col-lg-2">
                        <a href="#" target="_blank">
                        <i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 align-center">
                <div class="footer-lower">
                    <div class="media-container-row">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </div>
                    <div class="media-container-row mbr-white">
                        <div class="col-sm-12 copyright">
                            <p class="mbr-text  display-5">
                                &#169; <?php bloginfo('name');?> - All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php wp_footer()?>
</body>

</html>