<?php
/**
 * FILE TITLE GOES HERE
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        page-accessibility-learning-support.php
 * Location:        FILE_LOCATION
 * Project:         Way-Finder-App
 * Date Created:    9/05/2025
 *
 * Author:          Yui_Migaki
 *
 */

get_header(); ?>

<div class="accessibilityTop">
    <img class="background-vector" src="<?php echo get_template_directory_uri(); ?>/img/category-background.png" alt="classroom 260. Desks and chairs with computers, whiteboards and projector.">
    <h1>Accessibility and Learning Support</h1>
    <p>By addressing academic and accessibility challenges, <br>
        ALS ensures that students have the tools, support, <br>
        and resources they need to thrive academically and participate fully in campus life. <br>
        This comprehensive approach empowers students to overcome obstacles, build confidence, <br>
        and succeed in their studies, regardless of their unique circumstances.</p>
    <div class="image-container">
        <img src="<?= get_template_directory_uri(); ?>/img/accessibility.png"
             alt="A room for accessibility and learning support" class="category-images">
    </div>
</div>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="categoryGoHomeButton">
    <button type="submit" id="submit" class="submit">Go Back to Home</button>
</form>
</div>  <!-- wrapper -->
</body>
</html>