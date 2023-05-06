<!-- Destroy session when logout and redirect to the login page -->

<?php
session_start();
session_destroy();

header("Location: login.php");
exit;