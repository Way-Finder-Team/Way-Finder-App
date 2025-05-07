<?php
/**
 * FILE TITLE GOES HERE
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        send-email.php
 * Location:        FILE_LOCATION
 * Project:         Way-Finder-App
 * Date Created:    7/05/2025
 *
 * Author:          Yui_Migaki
 *
 */


// Reference from : https://mailtrap.io/blog/html-form-send-email/


// This ensures no previous output has been sent
ob_start();
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-load.php' );

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get POST data
    $title = isset($_POST['title']) ? strip_tags(trim($_POST['title'])) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $enquiry = isset($_POST['enquiry']) ? strip_tags(trim($_POST['enquiry'])) : '';

    // Validate form fields
    if (empty($title)) {
        $errors[] = 'Title is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email is invalid';
        }
    }

    if (empty($enquiry)) {
        $errors[] = 'Enquiry is empty';
    }


    // If no errors, send email
    if (empty($errors)) {
        // Recipient email address (replace with your own)
        $recipient = "example@gmail.com";

        // Additional headers
        $headers = "From: $title <$email>";

        // Send email
        if (mail($recipient, $enquiry, $headers)) {
            wp_redirect(home_url('/feedback') . "?status=success");
            exit;
        } else {
            echo "Failed to send email. Please try again later.";
        }
    } else {
        // Display errors
        echo "The form contains the following errors:<br>";
        foreach ($errors as $error) {
            echo "- $error<br>";
        }
        // Redirect to feedback page
        wp_redirect(home_url('/feedback') . "?status=failed");
        exit;
    }
} else {
    // Not a POST request, display a 403 forbidden error
    header("HTTP/1.1 403 Forbidden");
    echo "You are not allowed to access this page.";
    wp_redirect(home_url('/feedback') . "?status=failed");
    exit;
}




