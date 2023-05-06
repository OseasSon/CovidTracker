<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!--jQuery validate-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
    <!--Validation script-->
    <script src="validation.js" defer></script>
    <style>
        .error {
            color: red;
        }
    </style>
    <title>Signup | Covid Tracker</title>
</head>

<body>
    <h1>Register</h1>

    <!-- Signup form -->
    <form id="signup" action="signup_validation.php" method="post">
        <div>
            <input type="text" id="name" name="name" placeholder="Name">
        </div>

        <div>
            <input type="email" id="email" name="email" placeholder="Email">
        </div>

        <div>
            <input type="password" id="password" name="password" placeholder="Password">
        </div>

        <div>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Password confirmation">
        </div>

        <div>
            <select name="user_type" id="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
        </div>

        <button>Signup</button>
    </form>

    <p>Already have an account? <a href="login.php">Login here</a></p>

</body>

</html>