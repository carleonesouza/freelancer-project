<?php
/**
 * Template Name: Quem Somos
 *
 *
 */
get_header();
?>
<section id="features" class="features">
    <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center justify-content-center">
        <div id="loader" class="loader"></div>
    </div>
    <div class="container-fluid">
        <div class="section-title p-5" data-aos="fade-up">

            <h2>Lorem Ipsum</h2>
            <p class="text-center pb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus accumsan
                tincidunt. Mauris interdum aliquam mauris, quis aliquet massa dictum vel.
                Suspendisse fringilla urna ipsum, ac ultrices velit blandit vel. Vestibulum vel sem
                sem. Praesent molestie auctor tellus in ultricies. Praesent faucibus posuere turpis
                at sodales. Duis aliquam metus non euismod dapibus. Etiam scelerisque faucibus quam
                in vulputate. Quisque sagittis dolor sit amet semper pharetra.
            </p>
        </div>
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-4 section-title">
                <h2> Lorem Ipsum</h2>
            </div>
            <div class="col-12 gallery pb-5 pt-5" id="gallery">
                <div class="owl-carousel gallery-carousel" data-aos="fade-up">
                    <a href="<?php echo get_template_directory_uri().''?>" class="venobox"
                        data-gall="gallery-carousel"><img src="<?php echo get_template_directory_uri().''?>" alt=""
                            class="img-gallery"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="section-title" data-aos="fade-up">
            <h2>Lorem Ipsum</h2>
        </div>
        <div class="row align-items-center" data-aos="fade-left">
            <div class="col-md-10 card-container">
                <div class="card-item">
                    <div class="row user">
                        <div class="col-lg-3 col-md-4">
                            <div class="user-image">
                                <img src="<?php echo get_template_directory_uri() . '' ?>" alt="" title="">
                            </div>
                        </div>
                        <div class="card-caption col-lg-9 col-md-8">
                            <div class="user-text ">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus accumsan
                                    tincidunt. Mauris interdum aliquam mauris, quis aliquet massa dictum vel.
                                    Suspendisse fringilla urna ipsum, ac ultrices velit blandit vel. Vestibulum vel sem
                                    sem. Praesent molestie auctor tellus in ultricies. Praesent faucibus posuere turpis
                                    at sodales. Duis aliquam metus non euismod dapibus. Etiam scelerisque faucibus quam
                                    in vulputate. Quisque sagittis dolor sit amet semper pharetra.
                                </p>
                            </div>
                            <div class="user-name display-4 align-left pt-3">
                                Lorem Ipsum
                            </div>
                            <div class="user-desk align-left pt-2">
                                Lorem Ipsum</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-10 card-container mt-5 mb-5">
                <div class="card-item">
                    <div class="row user">
                        <div class="col-lg-3 col-md-4">
                            <div class="user-image">
                                <img src="<?php echo get_template_directory_uri() . '' ?>">
                            </div>
                        </div>
                        <div class="col-lg-9 card-caption">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus accumsan
                                tincidunt. Mauris interdum aliquam mauris, quis aliquet massa dictum vel. Suspendisse
                                fringilla urna ipsum, ac ultrices velit blandit vel. Vestibulum vel sem sem. Praesent
                                molestie auctor tellus in ultricies. Praesent faucibus posuere turpis at sodales. Duis
                                aliquam metus non euismod dapibus. Etiam scelerisque faucibus quam in vulputate. Quisque
                                sagittis dolor sit amet semper pharetra.
                            </p>
                            <div class="user-name display-4 align-left pt-3">
                                Lorem Ipsum
                            </div>
                            <div class="user-desk  align-left pt-2">
                                Lorem Ipsum
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();