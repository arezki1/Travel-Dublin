
	    <?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: login.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login.php"); 
    } 
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?> <!--styling-->
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <!--nav start-->
    <!--weather script start-->
    <script src="//www.powr.io/powr.js" external-type="html"></script>
    <!--weather script end-->
	</head>
    <body>
	<div class="navbar-static-top navbar-inverse">
		<div class = "container">
			<div class = "navbar-brand headerSocH">
			    <!--add name of user in session to navbar brand-->
				<a href="#">Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>, 
				</a>
			</div>
			<button class = "navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse" style ="color:white; border-color:white; margin-right:0px">
				Menu
			</button>
			<div class = "collapse navbar-collapse navHeaderCollapse">
				<ul class = "nav navbar-nav navbar-right">
					<li class = "listItem"><a href="logged.php">Home</a></li>
					<li class = "listItem"><a href="Chat/index.php">Chat</a></li>
					<li class = "listItem"><a href="#">Forum</a></li>
					<li class = "listItem"><a href="memberlist.php">Memberlist</a></li>
					<li class ="listItem"><a href="discover.php">Discover</a></li>

				<li class = "listItem"><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
		
	<!--nav end-->
	<br/>
	<!--manin page area for home-->
    <div class="container">
	
    <img class="img-responsive" src="img/City.jpg">
	<h1 class = "text-center" id="mainh1">Welcome to Social Hotel</h1>
   </div>
   <h1 class="bg-primary">One Click for all</h1>
   <p class="bg-danger">
   <body>


</head>
<body>
		<span class="label label-warning">Currenct Converter</span>
	<form class="center" action="" method="post">

		<label for="from">From</label>
		<select name="from">
			<option value="usd">USD</option>
			<option value="pound">POUND</option>
		</select>

		<label for="to">To</label>
		<select name="to">
			<option value="euro">EURO</option>
			<option value="baht">BAHT</option>
		</select>

		<label for="c_input">Enter Amount</label>
		<input type="number" name="camount" required=""/>

		
		<button type="submit" name="convert" value="Convert" class="btn btn-success">Change</button>
	</form>
	<br /><br /><br />
</body>
</html>

<?php 
	if (isset($_POST['convert'])) {
		$from=$_POST['from'];
		$to=$_POST['to'];
		$amount=$_POST['camount'];

		if($amount==''||is_int($amount))
		{
			echo "Please Enter Valid Amount";
			exit();
		}

		echo '<div class="center">';
		if($from=='usd'){
			if($to=='euro'){
				$result=$amount*0.88;
				echo "Exchange is ".$result." euro";
			}
			else if ($to=='baht') {
				$result=$amount*34.82;
				echo "Exchange is ".$result." baht";
			}
		}
		else if ($from=='pound') {
			if($to=='euro'){
				$result=$amount*1.27;
				echo "Exchange is ".$result." euro";
			}
			else if ($to=='baht') {
				$result=$amount*50.13;
				echo "Exchange is ".$result." baht";
			}
		}
		echo '</div>';
	}
 ?>
		
		
	</body>
	   </html>
	    
