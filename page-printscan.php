<?php get_header(); ?>

        <div class="printtop">
            <img class="background-vector" src="<?php echo get_template_directory_uri(); ?>/img/category-background.png" alt="classroom 260. Desks and chairs with computers, whiteboards and projector.">
            <h1>Print and Scan</h1>
            <p>The library provides access to printers that students can use to print, photocopy and scan documents. <br><br>
            Prices are displayed behind the multi function devices (MFDs). <br><br>
            Payments can be made at the service desk via card, at Client Services, or by yourself from the North Metropolitan TAFE Library website.<br><br>
            (Maybe include a note about payments being a $2.00 minimum).</p>
            
            <div class="image-container">
                <img src="<?= get_template_directory_uri(); ?>/img/printer.png" alt="printer and scanner." class="category-images">
            </div>
        </div>
        <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="categoryGoHomeButton">
            <button type="submit" id="submit" class="submit">Go Back to Home</button>
        </form>

    </div>  <!-- wrapper -->
</body>
</html>