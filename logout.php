<!--http://forums.devshed.com/php-faqs-stickies-167/program-basic-secure-login-system-using-php-mysql-891201.html -->
<!--http://www.formget.com/login-form-in-php-->

<?php 

    // First we execute our common code to connection to the database and start the session 
    require("registration/common.php"); 
     
    // We remove the user's data from the session 
    unset($_SESSION['user']); 
     
    // We redirect them to the login page 
    header("Location: registration/login.php"); 
    die("Redirecting to: registration/login.php");