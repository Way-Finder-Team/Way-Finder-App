<?php get_header(); ?>

<div class="thankstop">
    <div class="thank-you-container">
        <div class="col">
            <div class="col-md-8 offset-md-2">
                <h1>Thank You!</h1>
                <p id="thanks-text">The form was submitted successfully. <br><br>
                    We value your feedback! <br><br>
                </p>
                <p id="feedback-return-text">Return to original site:
                    <a class="padded-link" href='<?php echo esc_url(home_url('/')); ?>'>Way Finder Home Page</a>
                </p>
            </div> <!-- .col-md-8 -->
        </div> <!-- .col -->
    </div> <!-- .thank-you-container -->
</div> <!-- .thankstop -->

<?php get_footer(); ?>
