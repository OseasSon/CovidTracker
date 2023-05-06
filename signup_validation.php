<?php

// Specify PHP errors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//Checks if 'name' is empty
if (empty($_POST["name"])) {
    die("Name is required");
}

//Filter email address
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("The email entered is not valid");
}

//Check password lenght
if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 charcaters");
}

//Checks for letters in the pwd
if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

//Checks for numbers in the pwd
if (!preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

//Checks if the pwd confirmation matches
if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must macth");
}

//Use a hash function to encrypt pwd
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

//Open connection
include "login_db_connection.php";
$conn = OpenCon();

//The SQL query. The interrogation marks are place holders
$sql = "INSERT INTO user (name, email, password_hash, user_type) VALUES (?, ?, ?, ?)";

//Using stmt_init() to avoid injection
$stmt = $conn->stmt_init();

//Prepare the query anc check for errors
if (!$stmt->prepare($sql)) {
    die("SQL error: " . $conn->error);
}

//Bind the paramters into the placeholders in the query
$stmt->bind_param("ssss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash,
                  $_POST["user_type"]);

//Execute the query and check for errors
try {
    $stmt->execute();
    CloseCon($conn);
    header("Location: signup_success.html");
    exit;
} catch(mysqli_sql_exception $e){
    die($conn->error);
}