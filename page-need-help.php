<?php get_header(); ?>




<div class="container my-5 top">
    <!-- Slider Section -->
    <div id="need-help-slider" class="carousel slide" data-bs-ride="carousel">
        <?php if (is_active_sidebar('custom-need-help-widget')) : ?>
            <div id="custom-need-help-widget" class="chw-widget-area widget-area carousel-inner" role="complementary">
                <?php dynamic_sidebar('custom-need-help-widget'); ?>
            </div>
        <?php else: ?>
            <!-- Placeholder Content -->
            <div class="carousel-item active">
                <div class="text-center p-4">
                    <p>No widgets found. Add your content in the "Need Help" widget area.</p>
                </div>
            </div>
        <?php endif; ?>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#need-help-slider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#need-help-slider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div> <!-- /.container -->







</div> <!-- /.container-fluid -->

</body>

</html>