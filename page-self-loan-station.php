<?php

/**
 * Self Loan Station Page Template
 */

get_header(); ?>

<div class="selfloan container my-4 position-relative overflow-hidden" style="min-height: 60vh;">
    <!-- Background Vector Image -->
    <img class="background-vector position-absolute w-100 h-100"
        src="<?php echo get_template_directory_uri(); ?>/img/category-background.png"
        alt="classroom 260. Desks and chairs with computers, whiteboards and projector."
        style="top: 0; left: 0; object-fit: cover; z-index: 0;">

    <!-- Overlay (optional, for darkening/lightening background) -->
    <div class="overlay position-absolute w-100 h-100 px-2" style="top: 0; left: 0; z-index: 1;"></div>

    <!-- Foreground Content -->
    <div class="position-relative" style="z-index: 2;">
        <!-- Section Title -->
        <h1 class="text-center mb-4 mt-5 fw-bold">Self-loan Station</h1>

        <!-- First Image -->
        <div class="text-center mb-4 mt-5">
            <img
                src="<?= get_template_directory_uri(); ?>/img/selfLoan-1.png"
                alt="computer on a table with sign of Library Catalogue."
                class="img-fluid rounded shadow-sm"
                style="max-width: 600px;">
        </div>

        <!-- Description -->
        <p class="text-center text-md-start lead mb-4 lead text-black">
            The Self Loan Station allows you to easily check out your library items at your convenience.<br><br>
            Simply follow the on-screen prompts to complete your transaction quickly and efficiently,
            making borrowing books and resources hassle-free!
        </p>

        <!-- Second Image -->
        <div class="text-center mb-5">
            <img
                src="<?= get_template_directory_uri(); ?>/img/selfLoan-2.png"
                alt="A self-loan station at the front desk to loan resources by themselves"
                class="img-fluid rounded shadow-sm"
                style="max-width: 600px;">
        </div>
    </div>
</div>
<!-- Back Button -->
<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="text-center">
    <button type="submit" id="submit" class="btn btn-primary btn-lg px-4">
        Go Back to Home
    </button>
</form>
</div>

</div> <!-- /.container-fluid -->


</body>

</html>