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

        // Specify the path to the CSV file
        $file = 'submissions.csv'; // Adjust the path as needed

        // Try to open the file for appending
        $handle = fopen($file, 'a'); // 'a' mode for appending

        if ($handle === false) {
            echo "Error opening the file";
        } else {
            // Create an array with the form data
            $csvData = array($name, $email, $message);

            // Write the data to the CSV file
            fputcsv($handle, $csvData);

            // Close the file
            fclose($handle);

            echo "Data appended to CSV successfully.";
        }
    }
} else {
    // Not a POST request, redirect to the form or show an error
    echo "Form not submitted correctly.";
}
?>
