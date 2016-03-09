       <!--this is a nice feature, but how can we develop it further?-->
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
             
            // We can retrieve a list of members from the database using a SELECT query. 
            // In this case we do not have a WHERE clause because we want to select all 
            // of the rows from the database table. 
            $query = " 
                SELECT 
                    id, 
                    username, 
                    email 
                FROM user 
            "; 
             
            try 
            { 
                // These two statements run the query against your database table. 
                $stmt = $db->prepare($query); 
                $stmt->execute(); 
            } 
            catch(PDOException $ex) 
            { 
                // Note: On a production website, you should not output $ex->getMessage(). 
                // It may provide an attacker with helpful information about your code.  
                die("Failed to run query: " . $ex->getMessage()); 
            } 
                 
            // Finally, we can retrieve all of the found rows into an array using fetchAll 
            $rows = $stmt->fetchAll(); 
        ?> 
        <!--styling-->
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
					<li class = "listItem"><a href="chat.php">Chat</a></li>
					<li class = "listItem"><a href="forum.php">Forum</a></li>
					<li class = "listItem"><a href="memberlist.php">Memberlist</a></li>
					<li class = "listItem"><a href="discover.php">Discover</a></li>
					<li class = "listItem"><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
    	<!--nav end-->
    	<body>
    	    <div class="row">
            <div class="col-md-4">
        
            </div>
            <div class="col-md-4">
                <h1>Chat</h1>
                <h2>user Logged in: </h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>E-Mail Address</th>
                    </tr>
                    <?php foreach($rows as $row): ?>
                    <tr>
                        <td>
                            <?php echo $row[ 'id']; ?>
                        </td>
                        <!-- htmlentities is not needed here because $row['id'] is always an integer -->
                        <td>
                            <?php echo htmlentities($row[ 'username'], ENT_QUOTES, 'UTF-8'); ?>
                        </td>
                        <td>
                            <?php echo htmlentities($row[ 'email'], ENT_QUOTES, 'UTF-8'); ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <a href="logged.php">Go Back</a>
                <br />
        
            </div>
        
        </div>
        <div class="col-md-4">
        
        </div>
    	</body>
        
        	    
