
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate input data
    // For simplicity, this example only checks if fields are empty.
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all required fields.";
    } else {
        // Process the data (e.g., save to database, send email)
        // This example just echoes the data back
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Message: " . $message . "<br>";

        // Here you could add code to save the data to a database
        // or send an email with the form data
    }
} else {
    // Not a POST request, redirect to the form or show an error
    echo "Form not submitted correctly.";
}
?>
