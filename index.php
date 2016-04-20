
 <?php include("templates/header.php");?>
 
  <?php


$routes = [
	'home'			=> 'home.php',
	'logout'		=> 'logout.php',
	'discover'		=> 'discover.php',
	'attraction'	=> 'attraction.php',
	'chat'			=> 'Chat/chat.php',
	'forum'			=> 'Chat/chat.php',
	'currency'		=> 'currency.php'
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


  </body>
</html>
