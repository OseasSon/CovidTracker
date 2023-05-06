<!-- This file handles the DB connection -->
<!-- It's mainly used to register, log and track users -->

<?php
function OpenCon()
{

    // Server details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "login_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function CloseCon($conn)
{
    // Close connection
    $conn->close();
}