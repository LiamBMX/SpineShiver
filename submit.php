<?php
// Retrieve email from form submission
$email = $_POST['email'];

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
} else {
    // File path to store emails
    $file = 'subscribers.txt';

    // Open the file in append mode
    $fp = fopen($file, 'a');

    // Write the email address to the file
    fwrite($fp, $email . PHP_EOL);

    // Close the file
    fclose($fp);

    echo "Subscription successful";
}
?>
