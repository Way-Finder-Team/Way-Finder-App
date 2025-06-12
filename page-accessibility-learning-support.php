<?php

/**
 * Template Name: Accessibility and Learning Support
 * Description: A page template for Accessibility and Learning Support.
 */
get_header(); ?>

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
        <h1 class="mb-3 mt-5 text-center fw-bold text-black">Accessibility and Learning Support</h1>
        <p class="lead text-center mb-4 mt-5 text-black">
            By addressing academic and accessibility challenges, ALS ensures that students have the tools,
            support, and resources they need to thrive academically and participate fully in campus life. <br><br>
            This comprehensive approach empowers students to overcome obstacles, build confidence,
            and succeed in their studies, regardless of their unique circumstances.
        </p>

        <!-- Image Section -->
        <div class="text-center mb-4 mt-5">
            <img src="<?= get_template_directory_uri(); ?>/img/accessibility.png"
                alt="A room for accessibility and learning support"
                class="img-fluid rounded shadow-lg">
        </div>
    </div>
</div>

<!-- Go Back Button -->

<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="text-center">
    <button type="submit" id="submit" class="btn btn-primary btn-lg px-4">
        Go Back to Home
    </button>
</form>
</div>

</div>


</body>

</html>