<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // remove tags from input for security reasons
        $name = strip_tags(trim($_POST["name"]));
		// FILTER_SANITIZE_EMAIL removes all illegal characters from an email address (e.g. ?!#()&, etc.)
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = strip_tags(trim($_POST["message"]));

        // Check that data was sent to the mailer
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit
            http_response_code(400);
            echo "There was an issue with your email address. Please try again!";
            exit;
        }

        // Set the recipient email address
        // FIXME: Update this to your desired email address.
        $myEmail = "contact@asmiley.me";

        // Subject line for the email
        $subject_line = "Message from $name";

        // Email content
        $email_content = "Name: $name\nEmail: $email\n\nMessage:\n$message\n";

        // Email header
        $email_headers = "From: $name <$email>";

        // Send the email
        if (mail($myEmail, $subject_line, $email_content, $email_headers)) {
            // Set a 200 (okay) response code
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>