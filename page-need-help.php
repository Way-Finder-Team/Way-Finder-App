
<?php get_header(); ?>

<div class="top">
    <div id="need-help-slider">
    <?php
    if (is_active_sidebar('custom-need-help-widget')) :
        ?>
            <div id="custom-need-help-widget" class="chw-widget-area widget-area" role="complementary">
                <?php dynamic_sidebar('custom-need-help-widget');
                ?>
            </div>
    <?php endif;
    ?>
    </div>
</div>
</div>  <!-- wrapper -->
</body>
</html>

