<?php get_header(); ?>


        <div class="aboriginaltop">
            <img class="background-vector" src="<?php echo get_template_directory_uri(); ?>/img/category-background.png" alt="classroom 260. Desks and chairs with computers, whiteboards and projector.">
            <h1>Aboriginal Engagement Team</h1>
            <p>The Aboriginal Engagement Team focuses on empowering disengaged Aboriginal youth 
                by providing support in careers, training, and employment opportunities.<br><br> 
                Through tailored programs and mentorship, the team fosters skills development and builds confidence,
                helping young individuals connect with their cultural identity 
                while navigating pathways to sustainable futures in their communities. </p>

            <div class="aboriginal-image-container">
                <img src="<?= get_template_directory_uri(); ?>/img/aboriginal.png" alt="printer and scanner." class="category-images">
            </div>
        </div>
        <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="categoryGoHomeButton">
            <button type="submit" id="submit" class="submit">Go Back to Home</button>
        </form>


    </div>  <!-- wrapper -->
</body>
</html>