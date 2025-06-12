<?php
/* Template Name: Feedback Form */
get_header();
?>

<div class="container py-5 ml-5 mr-5">
    <h1 class="text-center mb-4">Give Us Some Feedback!</h1>
    <form action="https://formsubmit.co/01f3e4b2a9a1959fa602647b3409d2f9" method="POST" id="feedbackForm" novalidate>
        <input type="hidden" name="_next" value="http://localhost/wordpress/thank-you">
        <input type="hidden" name="_autoresponse" value="Thank you for your submission">
        <input type="hidden" name="_template" value="table">


        <!-- Title Field -->
        <div class="col-12 col-md-6 mb-3">
            <label for="title" class="form-label fw-bold">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                placeholder="Enter your title"
                pattern="^[A-Za-z\s]{3,50}$"
                required
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Title should be 3-50 alphabetic characters">
            <div class="valid-feedback">
                <i class="bi bi-check-circle text-success"></i> Looks good!
            </div>
            <div class="invalid-feedback">
                <i class="bi bi-x-circle text-danger"></i> Please provide a valid title.
            </div>
        </div>

        <!-- Email Field -->
        <div class="col-12 col-md-6 mb-3">
            <label for="email" class="form-label fw-bold">Email Address</label>
            <input type="email" class="form-control" id="email" name="email"
                placeholder="Enter your email address"
                pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$"
                required
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Enter a valid email format (e.g., user@example.com)">
            <div class="valid-feedback">
                <i class="bi bi-check-circle text-success"></i> Looks good!
            </div>
            <div class="invalid-feedback">
                <i class="bi bi-x-circle text-danger"></i> Please provide a valid email.
            </div>
        </div>


        <!-- Feedback Field -->
        <div class="mb-3">
            <label for="enquiry" class="form-label fw-bold">Enquiry</label>
            <textarea class="form-control" id="enquiry" name="enquiry"
                rows="5"
                placeholder="Enter your feedback here"
                pattern="^.{10,500}$"
                required
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Feedback must be between 10 and 500 characters"></textarea>
            <div class="valid-feedback">
                <i class="bi bi-check-circle text-success"></i> Thank you for your feedback!
            </div>
            <div class="invalid-feedback">
                <i class="bi bi-x-circle text-danger"></i> Please provide your feedback (10-500 characters).
            </div>
        </div>

        <!-- Terms and Conditions -->
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input fw-bold" id="terms" name="terms" required>
            <label class="form-check-label" for="terms">I agree with the terms and conditions.</label>
            <div class="invalid-feedback">
                <i class="bi bi-x-circle text-danger"></i> You must agree before submitting.
            </div>
        </div>

        <!-- Buttons -->


        <div class="text-center mb-3">
            <button type="submit" class="btn btn-primary" id="submitButton" disabled>Submit</button>
        </div>
        <div class="text-center">
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>

    </form>
</div>

</div> <!-- wrapper -->


</body>

</html>