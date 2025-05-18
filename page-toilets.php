<?php get_header(); ?>

<div class="toilettop">
    <img class="background-vector" src="<?php echo get_template_directory_uri(); ?>/img/category-background.png" alt="classroom 260. Desks and chairs with computers, whiteboards and projector.">
    <h1>Toilets</h1>
    <div class="image-container">
        <img src="<?= get_template_directory_uri(); ?>/img/toiletDisable.png" alt="Toilet door with disable sign on." class="category-images">
    </div>
    <p>The restrooms can be found next to the lift in the main foyer behind the security desk and opposite the Jobs & Skills Centre.<br><br>
     They are regularly serviced to maintain a high standard of cleanliness.
     Male, female and disability facilities are provided.<br></P>
    
    <div class="image-container">
        <img src="<?= get_template_directory_uri(); ?>/img/toilet.png" alt="Toilet doors with female and male signs on." class="category-images">
    </div>
</div>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="categoryGoHomeButton">
    <button type="submit" id="submit" class="submit">Go Back to Home</button>
</form>


</body>
</div>  <!-- wrapper -->