<?php get_header(); ?>

        <div class="returnAftertop">
            <img class="background-vector" src="<?php echo get_template_directory_uri(); ?>/img/category-background.png" alt="classroom 260. Desks and chairs with computers, whiteboards and projector.">
            <h1>Book Return After Hour</h1>
            <div class="image-container">
                <img src="<?= get_template_directory_uri(); ?>/img/returnAfter1.png" alt="Book Return post from a distance." class="category-images">
            </div>
            <p>Located inside the foyer on the outside of the library next to the door,<br>
            the designated Drop-Box can be used to return borrowed material when the library is closed. <br>
            It can be found on the outside of the library.<br></P>
            
            <div class="image-container">
                <img src="<?= get_template_directory_uri(); ?>/img/returnAfter2.png" alt="Book Return post from close up." class="category-images">
            </div>
        </div>
        <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="categoryGoHomeButton">
            <button type="submit" id="submit" class="submit">Go Back to Home</button>
        </form>


    </div>  <!-- wrapper -->
</body>
</html>