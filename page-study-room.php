<?php

/**
 * Stusy room  Page Template
 */

get_header(); ?>

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
    <!-- Section Title -->

    <!-- Custom Widget -->
    <?php if (is_active_sidebar('custom-studyroom-widget')) : ?>
      <div
        id="custom-studyroom-widget"
        class="studyroom-chw-widget-area widget-area position-absolute top-50 start-50 translate-middle text-center bg-light p-3 rounded shadow"
        style="max-width: 80%;"
        role="complementary">
        <?php dynamic_sidebar('custom-studyroom-widget'); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<!-- Back Button -->
<form action="<?php echo esc_url(home_url('/')); ?>" method="get" id="classroomGoHomeButton" class="text-center mt-4">
  <button type="submit" id="submit" class="btn btn-primary btn-lg px-4">
    Go Back to Home
  </button>
</form>
</div>

</div> <!-- /.container -->


</body>

</html>