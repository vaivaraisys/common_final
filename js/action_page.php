<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form </title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $country = $_POST["country"];
    $subject = $_POST["subject"];

    // Create a string with the form data
    $form_data = "First Name: $firstname\nLast Name: $lastname\nCountry: $country\nSubject: $subject\n\n";

    // Specify the path to the text file where you want to store the form data
    $file_path = "form_data.txt";

    // Open the file in append mode and write the form data
    file_put_contents($file_path, $form_data, FILE_APPEND);

    // Display a thank you message or redirect to a thank you page
    echo "Thank you for submitting the form!";
} 
?>
</body>
</html>