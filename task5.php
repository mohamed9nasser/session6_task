<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5</title>
</head>
<body>

<?php
/*
Write a class called 'Validation' with static methods to validate email addresses, passwords, and other common input fields.
*/

class Validation {
    public static function validateEmail($email) {
        // Check if the email is valid using a regular expression
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validatePassword($password) {
        // Here's an example that checks if the password is at least 8 characters long
        return strlen($password) >= 8;
    }

    public static function validateField($field) {
        // Here's an example that checks if the field is not empty
        return !empty($field);
    }
}

$email = "admin@gmail.com";
$password = "password1234";
$field = "";

if (Validation::validateEmail($email)) {
    echo "Email is valid.</br>";
} else {
    echo "Email is invalid.</br>";
}

if (Validation::validatePassword($password)) {
    echo "Password is valid.</br>";
} else {
    echo "Password is invalid.v";
}

if (Validation::validateField($field)) {
    echo "Field is valid.</br>";
} else {
    echo "Field is invalid.</br>";
}
?>


</body>
</html>