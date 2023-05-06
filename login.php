<?php

$is_invalid = false;

// Once the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Open connection
    include "login_db_connection.php";
    $conn = OpenCon();

    // Prepare and format query to check for existing user email in the DB
    $sql = sprintf("SELECT * FROM USER WHERE email = '%s'", $conn->real_escape_string($_POST["email"]));

    // Execute query
    $result = $conn->query($sql);


    if ($result) {

        // Saves result in an array
        $user = $result->fetch_assoc();

        // If password matched, start a user session
        if (password_verify($_POST["password"], $user["password_hash"])) {

            session_start();
            session_regenerate_id();
            $_SESSION["user_id"] = $user["id"];
            header("Location: dashboard.php");
            exit;
        } else {
            $is_invalid = true;
        }
    }

    CloseCon($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <title>Login | Covid Tracker</title>
    <style>
        b {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Login</h1>

    <?php if ($is_invalid) : // If email and password does not match?>
        <b>Invalid login<br><br></b>
    <?php endif ?>

    <form method="post" id="login_validation">
        <div>
            <input type="email" id="email" name="email" placeholder="Email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        </div>

        <div>
            <input type="password" id="password" name="password" placeholder="Password">
        </div>

        <button>Login</button>
    </form>

    <p>Don't have an account? <a href="signup.php">Register here</a></p>

</body>

</html>