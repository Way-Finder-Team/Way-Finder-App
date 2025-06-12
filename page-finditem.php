<?php get_header(); ?>

<div class="finditem container my-4 position-relative overflow-hidden" style="min-height: 60vh;">
  <!-- Background Vector Image -->
  <img class="background-vector position-absolute w-100 h-100"
    src="<?php echo get_template_directory_uri(); ?>/img/category-background.png"
    alt="classroom 260. Desks and chairs with computers, whiteboards and projector."
    style="top: 0; left: 0; object-fit: cover; z-index: 0;">

  <!-- Overlay (optional, for darkening/lightening background) -->
  <div class="overlay position-absolute w-100 h-100 px-2" style="top: 0; left: 0; z-index: 1;"></div>

  <!-- Foreground Content -->
  <div class="position-relative" style="z-index: 2;">

    <h1 class="mb-4 text-black mt-5 fw-bold">Find Library Items</h1>

    <p class="lead text-center mb-4 mt-5 text-black">
      Students can browse the Library Catalogue with the computer opposite the Service Desk.
      This tool enables the user to search by title, author, subject, or keywords,
      which can be further refined with advanced filters to check an item's location and availability.
    </p>

    <h5 class="mb-4 mt-5 fw-bold text-black text-center fst-italic">
      Note: This Catalogue can be accessed from the North Metropolitan TAFE Library website at any time.
    </h5>
    <div class="mb-5 mt-5 text-center">
      <img
        src="<?= get_template_directory_uri(); ?>/img/findItem.png"
        alt="computer on a table with sign of Library Catalogue."
        class="img-fluid category-images"
        style="max-width: 100%; height: auto;">
    </div>
  </div>
</div> <!--End finditem container-->

<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="text-center">
  <button type="submit" class="btn btn-primary px-4 py-2">Go Back to Home</button>
</form>
</div> <!--End container -->
</div> <!--End container-fluid-->



</body>

</html>