

<?php get_header(); ?>

<div class="classroomTop">
    <div class="classroom-image-container">
        <img class="background-vector" src="<?php echo get_template_directory_uri(); ?>/img/category-background.png" alt="classroom 260. Desks and chairs with computers, whiteboards and projector.">

        <?php if (is_active_sidebar('custom-classroom-widget')) : ?>
            <div id="custom-classroom-widget" class="chw-widget-area widget-area" role="complementary">
                <?php dynamic_sidebar('custom-classroom-widget'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="classroomGoHomeButton">
    <button type="submit" id="submit" class="submit">Go Back to Home</button>
</form>
</div>  <!-- wrapper -->
</body>
</html>