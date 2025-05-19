<?php get_header(); ?>

<div class="studyrmtop">
    <div class="studyroomslide">
        <div class="studyroom-image-container">
            <img class="background-vector" src="<?php echo get_template_directory_uri(); ?>/img/category-background.png" alt="studyroom description page with default background picture">

            <?php if (is_active_sidebar('custom-studyroom-widget')) : ?>
                <div id="custom-studyroom-widget" class="studyroom-chw-widget-area widget-area" role="complementary">
                    <?php dynamic_sidebar('custom-studyroom-widget'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="classroomGoHomeButton">
    <button type="submit" id="submit" class="submit">Go Back to Home</button>
</form>
</div>  <!-- wrapper -->

</body>
</html>