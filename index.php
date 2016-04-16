
<<<<<<< HEAD
 <?php include("templates/header.php");?>
 
  <?php


$routes = [
	'home'			=> 'home.php',
	'logout'		=> 'logout.php',
	'discover'		=> 'discover.php',
	'attraction'	=> 'attraction.php',
	'chat'			=> 'Chat/chat.php'
];

$default = 'home.php';

if (empty($_GET['page']) == false) {

	foreach($routes as $route => $file) {

		if ($route == $_GET['page']) {
			$page = $file;
		}
	}
	
	if (empty($page)) {
		// No route matched
		header('Location: index.php');
		die();
	}
} else {
	// No page specified
	$page = $default;
}

include($page);
    ?>


<?php include("templates/footer.php");?>
=======
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
>>>>>>> b92aed22aaec0a7d04b6837cddae08d378858b0a


  </body>
</html>
