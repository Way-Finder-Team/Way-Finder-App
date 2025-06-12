<?php get_header(); ?>

<div class="printtop container my-4 position-relative overflow-hidden" style="min-height: 60vh;">
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
        <h1 class="mb-3 mt-5 text-center fw-bold text-black">Print and Scan</h1>

        <!-- Description -->
        <p class="lead text-center mb-4 mt-5 text-black">
            The library provides access to printers that students can use to print, photocopy, and scan documents.<br><br>
            Prices are displayed behind the multi-function devices (MFDs).
            Payments can be made at the service desk via card, at Client Services, or by yourself from the North Metropolitan TAFE Library website.
            <br><br><em>Note: Payments require a $2.00 minimum.</em>
        </p>

        <!-- Printer Image -->
        <div class="image-container text-center my-4">
            <img
                src="<?= get_template_directory_uri(); ?>/img/printer.png"
                alt="Printer and scanner."
                class="img-fluid rounded shadow-sm"
                style="max-width: 600px;">
        </div>
    </div>
</div>

<!-- Back to Home Button -->
<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="text-center">
    <button type="submit" id="submit" class="btn btn-primary btn-lg px-4">
        Go Back to Home
    </button>
</form>
</div>


</div> <!-- /.container-fluid -->

</body>

</html>