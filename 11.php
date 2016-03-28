

<?php

session_start();



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
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>HotelSocial F O R U M</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		<style>
		body {
              padding-top: 50px;}
              .starter-template {
              padding: 40px 15px;
              text-align: center;}
	    </style>
	    
	    
	                                  
	    
                                              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
                                              	<script>
                                              	
                                                               function submitChat(){
                                                                if(form1.uname.value == '' || form1.msg.value == '' ){
                                                                 alert('ALL FIELDS ARE MANDATORY!!!!');
                                                                 return;
                                                                }
                                                                
                                                                form1.uname.readOnly = true;
                                                                form1.uname.style.border = 'none';
                                                                $("imageload").show();
                                                                var uname = form1.uname.value;
                                                                var msg = form1.msg.value;
                                                                var xmlhttp = new XMLHttpRequest();
                                               
                                               xmlhttp.onreadystatechange = function(){
                                               if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                                                document.getElementById("chatlogs").innerHTML = xmlhttp.responseText;
                                               
                                                 $("imageload").hide();
                                                         }
                                               
                                               }
                                               xmlhttp.open('GET','Chat/insert.php?'+'&uname='+uname+'&msg='+msg, true);
                                               xmlhttp.send();
                                               
                                               
                                              }
                                              $(document).ready(function(e){
                                               $.ajaxSetup({cache:false});
                                               setInterval(function(){$('#chatlogs').load('Chat/logs.php');}, 1000);
                                              });
                                              </script>

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
 				<li class = "listItem"><a href="forum.php">Forum</a></li>
 				<li class = "listItem"><a href="memberlist.php">Memberlist</a></li>
 				<li class ="listItem"><a href="discover.php">Discover</a></li>

 			<li class = "listItem"><a href="logout.php">Logout</a></li>
 			</ul>
 		</div>
 	</div>
 </div>

    <div class="container">

      <div class="starter-template">
        <h1>Temple Bar</h1>
       <div class="container">
  	    <img class="img-responsive" src="img/templebar.jpg" width="980" height="600">
  	   </div>
      </div>
		<p>Some of Dublin's best night spots, restaurants and unusual shops line these narrow, cobbled streets running between the Bank of Ireland and Christ Church Cathedral. In the 18th century the area was home to many insalubrious characters-Fownes Street was noted for its brothels. It was also the birthplace of parliamentarian Henry Grattan. Skilled craftsmen and artisans, such as clockmakers and printers, lived and worked around Temple Bar until post-Emergency (post-war) industrialisation led to a decline in the area's fortunes. In the 1970s, the CIE (national transport authority) bought up parcels of land in this area to build a major bus depot. While waiting to acquire the land in this area to buildings needed, the CIE rented out, on cheap leases, some of the old retail and warehouse premises to young artists and to record, clothing and book shops. The area developed an "alternative" identity and a successful lobby by local residents persuaded CIE to drop their plans. As more cynical Dubliners put it, the area became the city's "officially designated arts zone". But while the new investment and planning may have added a slight air of contrivance, it's still an exciting, atmospheric and essentially very young place. Organisations based here include the Irish Film Centre (IFC), the experimental Projects Arts Centre and around a dozen galleries. There are also centres for music, multi-media and photography as well as a Children's Cultural Centre-an arts centre offering theatre, workshops and other entertainment for children.</p>
		<h3>Information</h3>
		<p>Address : Temple Bar, Co. Dublin</p>
		<p>Opening Time : All day</p>
		<p>Phone : xxxxxxxxx </p>
		<p>Website : www.templebar.ie
		<h3>Please leave your comment here! Merci</h3>
		
		
		
		 <div id="form-chat">
                       
                    <form name = "form1">
                    
                    
                                        <p><b>Choose a Chatname:</b></p>
                                        
                                        
                                        <input type="text" name="uname" style="width:200px;" /><br/><br/>
                                        
                                        
                                        <p> <b>Your Message:</b></p> 
                                        
                                        
                                        <textarea name= "msg" styles = "width:200px; height: 70px"></textarea><br/>
                    
                    </form>
                               
                              
                    <br/>
                    
                    
                    <button onclick= "submitChat()"class= "button">Send</button><br/><br/>
                    
                    <div id="imageload" style="display:none;"> 
                    <img src="loading.gif"/>
                    </div>
                    
                    <div id="chatlogs" style="border:solid grey"> 
                  
                    <h1>Loading .... </h1><img src="loading.gif"/>
                    </div>

   </div>

                    
		 
		<a href="forum.php">
		<button type="button" class="btn btn-warning">Back to Forum Page</button></a>
   	 </div>
	  

    </div><!-- /.container -->
	
	<div class="container"> <!--footer-->
		<hr>
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright 2015 &copy; Turbo ltd </p>
			</div>
		</div>
	</footer>
	</div><!--Footer-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>