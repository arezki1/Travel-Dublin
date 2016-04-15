
 <?php include("header.php");?>
 
   <?php 
    $page=$_GET["page"];

if($_GET["page"]){



$filename=$page . '.php';

if(file_exists($filename)){

include $filename;
}

else{

include 'home.php';

}

}
    
    ?>


<?php include("footer.php");?>


  </body>
</html>
