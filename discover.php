 <?php require("common.php"); 
             
            // At the top of the page we check to see whether the user is logged in or not 
            if(empty($_SESSION['user'])) 
            { 
                // If they are not, we redirect them to the login page. 
                header("Location: login.php"); 
                 
                // Remember that this die statement is absolutely critical.  Without it, 
                // people can view your members-only content without logging in. 
                die("Redirecting to login.php"); 
            } 
            
 ?>
 <!DOCTYPE html>
 <html>
     <!--styling-->
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <!--styling-->
        <div class="navbar-static-top navbar-inverse">
            <div class="container" id="nav">
                <div class="navbar-brand headerSocH">
                    <!--add name of user in session to navbar brand-->
                    <a href="#">Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>, 
                				</a>
                </div>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse" style="color:white; border-color:white; margin-right:0px">
                    Menu
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right headerBndt">
                        <li class="listItem"><a href="logged.php">Home</a></li>
                        <li class="listItem"><a href="Chat/index.php">Chat</a></li>
                        <li class="listItem"><a href="#">Forum</a></li>
                        <li class="listItem"><a href="memberlist.php">Memberlist</a></li>
                        <li class="listItem"><a href="discover.php">Discover</a></li>
                        <li class="listItem"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
 </html>