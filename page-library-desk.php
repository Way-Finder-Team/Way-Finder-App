<?php get_header(); ?>

        <div class="desktop">
            <img class="background-vector" src="<?php echo get_template_directory_uri(); ?>/img/category-background.png" alt="classroom 260. Desks and chairs with computers, whiteboards and projector.">
            <h1>Library Desk</h1>
            <p>Find our friendly team here to provide you with the support for you need for a successful library experience:</p>
            <ul id = "desk-list">
                <li>Check out and return books</li>
                <li>Microsoft 365 support</li>
                <li>Password recovery</li>
                <li>Printing help</li>
                <li>Study room bookings</li>
                <li>Access to reserved materials</li>
                <li>General enquiries</li>
            </ul>
            <div class="image-container">
                <img src="<?= get_template_directory_uri(); ?>/img/infoDesk.png" alt="Information desk of library. desk is shaped with architectural design of Wave rock." class="category-images">
            </div>
        </div>
        <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="categoryGoHomeButton">
            <button type="submit" id="submit" class="submit">Go Back to Home</button>
        </form>

    </div>  <!-- wrapper -->
</body>
</html>