<?php get_header(); ?>

        <div class="top">
                <h1>Category</h1>
                <?php
                if ( is_active_sidebar( 'custom-button-widget' ) ) : ?>
                    <div id="button-widget-area" class="chw-widget-area widget-area" role="complementary">
                    <?php dynamic_sidebar( 'custom-button-widget' ); ?>
                    </div>
                <?php endif; ?>
        </div>
    </div>  <!-- wrapper -->
</body>
</html>