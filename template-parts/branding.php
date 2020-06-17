<?php

// Custom image.
$header_image = get_header_image();

if ($header_image) {

    $header_style = 'style="background-image: url(' . esc_url($header_image) . ');"';
    $header_class = 'banner-enabled';

} else {

    $header_style = '';
    $header_class = 'banner-disabled';

}

$overlay_option = '';

if (1 === absint($overlay_option)) {

    $overlay_class = 'overlay-enabled';

} else {

    $overlay_class = '';
}

?>
<section id="hero"
    class="header10 main-banner <?php echo $header_class . ' ' . $overlay_class; ?>dvr-fullscreen dvr-parallax-background"
    <?php echo $header_style; ?> id="header10-4">
    <div class="dvr-overlay"></div>
    <div class=".container-fluid d-lg-flex align-items-lg-center space-top-2 space-lg-0 min-vh-lg-100">
        <div class="content-pair col-lg-6">
            <div class="content-pair-text">
                <h1 class="heading-7">
                    <span class="blue-bold text-span">Lorem Ipsum</span> </h1>
                <p class="paragraph-large text-large">
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus accumsan
                        tincidunt. Mauris interdum aliquam mauris, quis aliquet massa dictum vel. Suspendisse fringilla
                        urna ipsum, ac ultrices velit blandit vel. Vestibulum vel sem sem. Praesent molestie auctor
                        tellus in ultricies. Praesent faucibus posuere turpis at sodales. Duis aliquam metus non euismod
                        dapibus. Etiam scelerisque faucibus quam in vulputate. Quisque sagittis dolor sit amet semper
                        pharetra.
                    </blockquote>
                </p>
                <div class="row d-flex justify-content-center">
                    <div class="dvr-section-btn header-button">
                        <a class="btn btn-md btn-white-outline display-4 dmv-color"
                            href="https://wa.me/5511940190823?text=Olá,%20meu%20amigo, como podemos ajudar?"
                            target="_blank">Lorem Ipsum</a>
                    </div>
                    <div class="dvr-section-btn  header-button">
                        <a class="btn btn-md btn-white-outline display-4 dmv-color" href="https://damacena.blog.br"
                            target="_blank">Lorem Ipsum</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container dvr-white ml-auto">
            <figure class=" d-none d-lg-block " data-aos="fade-up" style="margin-top: 6.75rem;">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/justice-icon.svg" />
            </figure>
        </div>
    </div>
    <div class="dvr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#nossos-servicos">
            <i class="fa fa-arrow-down dvri-down"></i>
        </a>
    </div>
</section>