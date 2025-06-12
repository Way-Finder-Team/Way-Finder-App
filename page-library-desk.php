<?php get_header(); ?>

<div class="librarydesk container my-4 position-relative overflow-hidden" style="min-height: 60vh;">
    <!-- Background Vector Image -->
    <img class="background-vector position-absolute w-100 h-100"
        src="<?php echo get_template_directory_uri(); ?>/img/category-background.png"
        alt="classroom 260. Desks and chairs with computers, whiteboards and projector."
        style="top: 0; left: 0; object-fit: cover; z-index: 0;">

    <!-- Overlay (optional, for darkening/lightening background) -->
    <div class="overlay position-absolute w-100 h-100 px-2" style="top: 0; left: 0; z-index: 1;"></div>

    <!-- Foreground Content -->
    <div class="position-relative" style="z-index: 2;">
        <h1 class="mb-4 text-black mt-5 fw-bold">Library Desk</h1>
        <p class="lead text-center mb-4 mt-5 text-black">
            Find our friendly team here to provide you with the support you need for a successful library experience:
        </p>


        <ul class="list-group list-group-flush mb-4 mx-auto" style="max-width: 500px;">
            <li class="list-group-item text-center border-0 bg-transparent">Check out and return books</li>
            <li class="list-group-item text-center border-0 bg-transparent">Microsoft 365 support</li>
            <li class="list-group-item text-center border-0 bg-transparent">Password recovery</li>
            <li class="list-group-item text-center border-0 bg-transparent">Printing help</li>
            <li class="list-group-item text-center border-0 bg-transparent">Study room bookings</li>
            <li class="list-group-item text-center border-0 bg-transparent">Access to reserved materials</li>
            <li class="list-group-item text-center border-0 bg-transparent">General enquiries</li>
        </ul>
        <div class="text-center mb-5 image-container">
            <img
                src="<?= get_template_directory_uri(); ?>/img/infoDesk.png"
                alt="Information desk of library. Desk is shaped with architectural design of Wave Rock."
                class="img-fluid category-images"
                style="max-width: 100%; height: auto;">
        </div>
    </div>
</div>

<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="text-center">
    <button type="submit" class="btn btn-primary px-4 py-2">Go Back to Home</button>
</form>
</div> <!-- End container -->


</div> <!-- End container-fluid -->

</body>

</html>