<?php
/* Template Name: Contact Form */
get_header();
?>




<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="contacttop py-4">
                <div id="contact-container" class="text-center">
                    <h1 class="mb-4">Contact Us</h1>
                    <ul id="contact-list" class="list-unstyled">
                        <li class="contact-info mb-2">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/icon_mail.png" alt="icon of envelope" class="me-2" style="width:24px;">
                            library@nmtafe.wa.edu.au
                        </li>
                        <li class="contact-info mb-2">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/icon_phone.png" alt="icon of phone" class="me-2" style="width:24px;">
                            08 9427 1450
                        </li>
                        <li class="contact-info mb-2">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/icon_map.png" alt="icon of map pointer" class="me-2" style="width:24px;">
                            30 Aberdeen Street, Perth 6000
                        </li>
                        <li class="contact-info mb-2">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/icon_clock.png" alt="icon of clock" class="me-2" style="width:24px;">
                            Mon - Thu: 8:00am - 6:00pm
                        </li>
                        <li class="contact-info"><span class="ms-4">Fri: 8:00am - 5:00pm</span></li>
                        <li class="contact-info"><span class="ms-4">(During Semester)</span></li>
                        <li class="contact-info"><span class="ms-4">Closed on Public Holidays</span></li>
                        <li id="contact-text" class="mt-3">
                            For term/semester break hours,<br>please visit our library website.
                        </li>
                        <li id="contact-library-link" class="mt-2">
                            <a href="https://guides.dtwd.wa.gov.au/nmtafe-library" class="btn btn-primary w-100 w-md-auto" target="_blank">
                                TAFE Library Website <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>






</div> <!-- End container -->

</body>

</html>