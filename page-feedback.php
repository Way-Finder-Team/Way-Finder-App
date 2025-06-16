<?php
/* Template Name: Feedback Form */
get_header();
?>

<div class="feedBacktop">
    <form action="https://formsubmit.co/01f3e4b2a9a1959fa602647b3409d2f9" method="POST" id="theForm">
        <input type="hidden" name="_next" value="https://wayfinder2025.library.screencraft.net.au/thank-you">
        <input type="hidden" name="_autoresponse" value="Thank you for your submission">
        <input type="hidden" name="_template" value="table">

        <h1 class="feedback-h1">Give Us Some Feedback!</h1>
        <div id="form-container">
            <div class="two">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Enter your title" required>
            </div>
            <div class="two">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email address">
            </div>
            <div class="three">
                <label for="enquiry">Enquiry</label>
                <textarea name="enquiry" id="enquiry" placeholder="Enter your feedback here" rows="5" cols="50" required></textarea>
            </div>
            <div class="four">
                <label for="terms">
                    <input type="checkbox" name="terms" id="terms" required>I agreed with terms and conditions.</label>
            </div>
            <div class="four">
                <input type="submit" value="Submit" id="submit" class="submit">
            </div>
            <div class="four">
                <input type="reset" value="Cancel" id="cancel">
            </div>
        </div>
    </form>
</div>
</div> <!-- wrapper -->
</body>

</html>