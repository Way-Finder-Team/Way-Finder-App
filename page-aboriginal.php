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
        <h1 class="mb-3 mt-5 text-center fw-bold text-black">Aboriginal Engagement Team</h1>
        <p class="lead text-center mb-4 mt-5 text-black">
            The Aboriginal Engagement Team focuses on empowering disengaged Aboriginal youth
            by providing support in careers, training, and employment opportunities.<br><br>
            Through tailored programs and mentorship, the team fosters skills development and builds confidence,
            helping young individuals connect with their cultural identity while navigating pathways to
            sustainable futures in their communities.
        </p>

        <!-- Image Section -->
        <div class="text-center mb-4 mt-5">
            <img
                src="<?= get_template_directory_uri(); ?>/img/aboriginal.png"
                alt="Printer and scanner."
                class="img-fluid rounded shadow-lg"
                style="max-width: 300px;">
        </div>
    </div>
</div>

<!-- Go Back to Home Button -->
<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="text-center">
    <button type="submit" id="submit" class="btn btn-primary btn-lg px-4">
        Go Back to Home
    </button>
</form>
</div>


</div>
</body>

</html>