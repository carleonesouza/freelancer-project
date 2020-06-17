<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stylus_first
 */

?>
<?php
 $description = get_bloginfo('description', 'display');
?>
<a name="nossos-servicos"></a>
<section id="features" class="nossos-servicos">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Lorem Ipsum</h2>
            <p class="text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus accumsan tincidunt. Mauris
                interdum aliquam mauris, quis aliquet massa dictum vel. Suspendisse fringilla urna ipsum, ac ultrices
                velit blandit vel. Vestibulum vel sem sem. Praesent molestie auctor tellus in ultricies. Praesent
                faucibus posuere turpis at sodales. Duis aliquam metus non euismod dapibus. Etiam scelerisque faucibus
                quam in vulputate. Quisque sagittis dolor sit amet semper pharetra.
            </p>
        </div>

        <div class="row no-gutters">
            <div class="col-xl-5 d-flex align-items-stretch justify-content-center order-2 order-lg-1"
                data-aos="fade-right" data-aos-delay="100">
                <figure class="mx-auto">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/people-justice.svg"
                        class="img-fluid" />
                </figure>
            </div>
            <div class="col-xl-7 d-flex justify-content-center order-2 order-lg-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 text-center" data-aos="fade-up">
                            <h4 class="display-7">Lorem Ipsum</h4>
                        </div>


                        <div class="col-12 text-center" data-aos="fade-up">
                            <h4 class="display-7">Lorem Ipsum</h4>
                        </div>
                        <div class="col-12 text-center" data-aos="fade-up">
                            <h4 class="display-7">Lorem Ipsum</h4>
                        </div>
                        <div class="col-12 text-center" data-aos="fade-up">
                            <h4 class="display-7">Lorem Ipsum*</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>