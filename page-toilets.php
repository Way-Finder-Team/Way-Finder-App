<?php get_header(); ?>

<div class="toilets container my-4 position-relative overflow-hidden" style="min-height: 60vh;">
    <!-- Background Vector Image -->
    <img class="background-vector position-absolute w-100 h-100"
        src="<?php echo get_template_directory_uri(); ?>/img/category-background.png"
        alt="classroom 260. Desks and chairs with computers, whiteboards and projector."
        style="top: 0; left: 0; object-fit: cover; z-index: 0;">

    <!-- Overlay (optional, for darkening/lightening background) -->
    <div class="overlay position-absolute w-100 h-100 px-2" style="top: 0; left: 0; z-index: 1;"></div>

    <!-- Foreground Content -->
    <div class="position-relative" style="z-index: 2;">
        <h1 class="mb-4 text-black mt-5 fw-bold">Toilets</h1>

        <div class="image-container mb-4 mt-5 text-center">
            <img src="<?= get_template_directory_uri(); ?>/img/toiletDisable.png" alt="Toilet door with disable sign on."
                class="category-images img-fluid" style="max-width: 300px;">
        </div>

        <p class="mb-4 lead text-center mt-5 text-black">
            The restrooms can be found next to the lift in the main foyer behind the security desk and opposite the Jobs & Skills Centre.<br><br>
            They are regularly serviced to maintain a high standard of cleanliness.<br>
            Male, female and disability facilities are provided.
        </p>

        <div class="image-container mb-5 mt-5 text-center">
            <img src="<?= get_template_directory_uri(); ?>/img/toilet.png" alt="Toilet doors with female and male signs on."
                class="category-images img-fluid" style="max-width: 300px;">
        </div>
    </div>
</div>

<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="categoryGoHomeButton text-center">
    <button type="submit" id="submit" class="btn btn-primary btn-lg">Go Back to Home</button>
</form>
</div>



</div>
<!-- Bootstrap JS Bundle (Popper + Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>