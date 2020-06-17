<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stylus_first
 */
get_header();
?>
    <?php get_template_part('template-parts/branding');?>
    <?php get_template_part('template-parts/post-blog-section');?>
    <?php get_template_part('template-parts/nossos-servicos');?>
    <?php get_template_part('template-parts/contato');?>
    
<?php
get_footer();
