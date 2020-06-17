<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stylus_first
 */

?>

<a name="contato"></a>
<div class="container-fluid cid-qY4RiEMO4A">
    <div class="row m-auto">
        <div class="col-12 col-md-6 pt-5"  data-aos="fade-left">            <!--Google map-->
            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px; padding-top:15px">
                <iframe width="450" height="100%" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=%20RUA%20JURUBATUBA%2C%201350%2C%20CENTRO%2C%20S%C3%83O%20BERNARDO%20DO%20CAMPO%5CSP.&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <!--Google Maps-->
        </div>
        <div class="col-12 col-md-6"  data-aos="fade-up">
            <h2 class="pb-3 text-center display-7">Lorem Ipsum</h2>
            <div>
                <div class="icon-contacts pb-3 text-center ">
                    <h5 class="mbr-fonts-style display-4">
                    Lorem Ipsum
                    </h5>
                    <p class="align-left mbr-fonts-style display-fone text-center ">
						<span class=""> <i class="fa fa-phone" aria-hidden="true"></i> <i class="fa fa-whatsapp" aria-hidden="true"></i> <a href="tel:11940190823">(11) 9-4019-0823</a>
                        </span><br>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:#">#</a>
                    </p>
                </div>
            </div>

            <form class="block mbr-form" action="<? echo get_template_directory_uri().'/mail-file/response.php'?>"
                method="post" data-form-title="email-form">
                <input type="hidden" name="email" data-form-email="true" value="" data-form-field="Email">
                <div class="row">
                    <div class="col-md-6 multi-horizontal" data-for="name">
                        <input type="text" class="form-control input" name="field_name" data-form-field="Name"
                            placeholder="Seu Nome" required="" id="name-form4-8">
                    </div>
                    <div class="col-md-12" data-for="email">
                        <input type="text" class="form-control input" name="email" data-form-field="field_email"
                            placeholder="Email" required="" id="email-form4-8">
                    </div>
                    <div class="col-md-12" data-for="subject">
                        <input type="text" class="form-control input [ input-text ] contact-form__list-item__input"
                            name="field_subject" data-form-field="Subject" placeholder="Assunto" id="">
                    </div>
                    <div class="col-md-12" data-for="message">
                        <textarea class="form-control input" name="field_message" rows="3" data-form-field="Message"
                            placeholder="Mensagem" style="resize:none" id="message-form4-8"></textarea>
                    </div>
                    <div class="input-group-btn col-md-12" style="margin: 10px">
                        <button name="submit" type="submit" value="submit"
                            class="btn btn-primary btn-form">Lorem Ipsum</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>