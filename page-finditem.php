<?php get_header(); ?>

        <div class="findItemtop">
            <img class="background-vector" src="<?php echo get_template_directory_uri(); ?>/img/category-background.png" alt="classroom 260. Desks and chairs with computers, whiteboards and projector.">
            <h1>Find Library Items</h1>
            <p>Students can browse the Library Catalogue with the computer opposite the Service Desk. 
            This tool enables the user to search by title, author, subject or keywords
            which can be further refined with advanced filters to check an item's location and availability.</p>
            <h2>Note: This Catalogue can be accessed from the North Metropolitan TAFE Library website at any time.</h2>
            <div class="image-container">
                <img src="<?= get_template_directory_uri(); ?>/img/findItem.png" alt="computer on a table with sign of Library Catalogue." class="category-images">
            </div>
        </div>
        <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="categoryGoHomeButton">
            <button type="submit" id="submit" class="submit">Go Back to Home</button>
        </form>
    </div>  <!-- wrapper -->
</body>
</html>