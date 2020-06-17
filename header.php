<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stylus_first
 */

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="9BDkBAGLkXNUzn2qZNAEjZjL3pHbqzSkfuvyXWfmqnk" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124488012-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-124488012-1');
    </script>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
// logo image.
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
    <!-- Just an image -->

    <section class="menu section-menu" once="menu" id="menu2-3">
        <nav
            class="navbar navbar-expand beta-menu navbar-dropdown shadow p-3 mb-5 align-items-center navbar-fixed-top navbar-toggleable-sm bg-color">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo $image[0]; ?>" alt="" title="">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap">
                        <a class="navbar-caption text-white" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php bloginfo('name');?>
                        </a>
                    </span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'meu_menu',
                    'depth' => 2,
                    'container' => 'div',
                    'menu_class' => 'navbar-nav',
                    'container_id' => 'navbarSupportedContent',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker())
                );
                ?>
                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-white-outline"
                        href="https://wa.me/5511940190823?text=Olá,%20meu%20amigo, como podemos ajudar?"
                        target="_blank">
                        <i class="fa fa-whatsapp"></i>#
                    </a>
                </div>
            </div>
        </nav>

    </section>