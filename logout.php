<?php 

    // First we execute our common code to connection to the database and start the session 
<<<<<<< HEAD
    require("registration/common.php"); 
=======
    require("common.php"); 
>>>>>>> b92aed22aaec0a7d04b6837cddae08d378858b0a
     
    // We remove the user's data from the session 
    unset($_SESSION['user']); 
     
    // We redirect them to the login page 
<<<<<<< HEAD
    header("Location: registration/login.php"); 
    die("Redirecting to: registration/login.php");
=======
    header("Location: login.php"); 
    die("Redirecting to: l");
>>>>>>> b92aed22aaec0a7d04b6837cddae08d378858b0a
