<?php get_header(); ?>

<div class="container my-4 position-relative overflow-hidden" style="min-height: 60vh;">
    <!-- Background Vector Image -->
    <img class="background-vector position-absolute w-100 h-100"
        src="<?php echo get_template_directory_uri(); ?>/img/category-background.png"
        alt="classroom 260. Desks and chairs with computers, whiteboards and projector."
        style="top: 0; left: 0; object-fit: cover; z-index: 0;">

    <!-- Overlay (optional, for darkening/lightening background) -->
    <div class="overlay position-absolute w-100 h-100 px-2" style="top: 0; left: 0; z-index: 1;"></div>

    <!-- Foreground Content -->
    <div class="position-relative" style="z-index: 2;">
        <!-- Widget Area -->
        <?php if (is_active_sidebar('custom-classroom-widget')) : ?>
            <div id="custom-classroom-widget" class="chw-widget-area widget-area mt-3" role="complementary">
                <?php dynamic_sidebar('custom-classroom-widget'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Go Back Button -->
<div class="row mt-4">
    <div class="col-12 text-center">
        <form action="<?php echo esc_url(home_url('/')); ?>" method="get" id="classroomGoHomeButton">
            <button type="submit" class="btn btn-danger btn-lg">Go Back to Home</button>
        </form>
    </div>
</div>
</div>
</div>
</body>

</html>