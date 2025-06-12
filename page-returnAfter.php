<?php get_header(); ?>

<div class="returnafter container my-4 position-relative overflow-hidden" style="min-height: 60vh;">
    <!-- Background Vector Image -->
    <img class="background-vector position-absolute w-100 h-100"
        src="<?php echo get_template_directory_uri(); ?>/img/category-background.png"
        alt="classroom 260. Desks and chairs with computers, whiteboards and projector."
        style="top: 0; left: 0; object-fit: cover; z-index: 0;">

    <!-- Overlay (optional, for darkening/lightening background) -->
    <div class="overlay position-absolute w-100 h-100 px-2" style="top: 0; left: 0; z-index: 1;"></div>

    <!-- Foreground Content -->
    <div class="position-relative" style="z-index: 2;">

        <h1 class="mb-3 mt-5 text-center fw-bold text-black">Book Return After Hour</h1>

        <div class="image-container mb-4 mt-5 text-center">
            <img src="<?= get_template_directory_uri(); ?>/img/returnAfter1.png" alt="Book Return post from a distance." class="img-fluid category-images">
        </div>

        <p class="mb-4 mt-5 text-center lead text-black ">
            Located inside the foyer on the outside of the library next to the door, the designated Drop-Box can be used to return borrowed material when the library is closed. It can be found on the outside of the library.
        </p>

        <div class="image-container mb-4 mt-5 text-center">
            <img src="<?= get_template_directory_uri(); ?>/img/returnAfter2.png" alt="Book Return post from close up." class="img-fluid category-images">
        </div>
    </div>
    </div>

        <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="text-center">
            <button type="submit" id="submit" class="btn btn-primary">Go Back to Home</button>
        </form>
    </div> 
    <!-- /.container -->
</div> <!-- /.container-fluid -->


</body>

</html>