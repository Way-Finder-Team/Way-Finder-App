<?php
/**
 * FILE TITLE GOES HERE
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        page-self-loan-station.php
 * Location:        FILE_LOCATION
 * Project:         Way-Finder-App
 * Date Created:    9/05/2025
 *
 * Author:          Yui_Migaki
 *
 */

get_header(); ?>

<div class="selfLoanTop">
    <img class="background-vector" src="<?php echo get_template_directory_uri(); ?>/img/category-background.png" alt="classroom 260. Desks and chairs with computers, whiteboards and projector.">
    <h1>Self-loan Station</h1>
    <div class="image-container">
        <img src="<?= get_template_directory_uri(); ?>/img/selfLoan-1.png"
             alt="computer on a table with sign of Library Catalogue."  class="category-images">
    </div>
    <p>The Self Loan Station allows you to easily check out your library items at your convenience. <br>
        Simply follow the on-screen prompts to complete your transaction quickly and efficiently, <br>
        making borrowing books and resources hassle-free!</p>
    <div class="image-container">
        <img src="<?= get_template_directory_uri(); ?>/img/selfLoan-2.png"
             alt="A self-loan station at the front desk to loan resources by themselves" class="category-images">
    </div>
</div>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="categoryGoHomeButton">
    <button type="submit" id="submit" class="submit">Go Back to Home</button>
</form>
</div>  <!-- wrapper -->
</body>
</html>