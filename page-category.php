<?php get_header(); ?>

        <div class="top">
            <div id="category-container">
                <?php
                if ( is_active_sidebar( 'custom-button-widget' ) ) : ?>
                    <div id="button-widget-area" class="chw-widget-area widget-area" role="complementary">
                    <?php dynamic_sidebar( 'custom-button-widget' ); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>  <!-- wrapper -->
</body>
</html>