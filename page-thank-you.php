<?php get_header(); ?>

<div class="thankstop py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-8 text-center">
        <!-- Heading -->
        <h1 class="mb-4 fw-bold">Thank You!</h1>

        <!-- Message -->
        <p id="thanks-text" class="lead mb-4">
          The form was submitted successfully.<br><br>
          We value your feedback!
        </p>

        <!-- Return Link -->
        <p id="feedback-return-text" class="mb-4">
          Return to the original site:
          <a class="btn btn-primary px-4 py-2 mb-4" href="<?php echo esc_url(home_url('/')); ?>">
            Way Finder Home Page
          </a>
        </p>
      </div>
    </div>
  </div>
</div>



</div>


</body>

</html>