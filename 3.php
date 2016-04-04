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
	    
	     <link rel="stylesheet" href="comment/wtfdiary.css">

<script type="text/javascript" src="comment/jquery.min.js"></script>


<script type="text/javascript" >
$(function() {
$("#comment_submit").click(function() 
{
var name = $("#name").val();
var email = $("#email").val();
var rating = $("#rating").val();
var comment = $("#comment").val();

var dataString = 'name='+ name + '&email='+ email + '&comment='+ comment + '&rating=' +rating;
if(name=='' || email=='' || comment=='' || rating=='')
{
alert('Please fill all textboxes');
}
else
{

$.ajax({
type: "POST",
url: "comment/save_form.php",
data: dataString,
cache: false,
success: function(html){
$("#name").val('');
$("#email").val('');
$("#rating").val('');
$("#comment").val('');
$("#success_msg").prepend(html);
}
});
}return false;
}); 
});
</script>

	       
	       
	                                  
	    
                       
  </head>
  

 <body>
 <div class="navbar-static-top navbar-inverse">
 	<div class = "container">
 		<div class = "navbar-brand headerSocH">
 			<a href="#" style="color:white;font-weight:bold">Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>:
			</a>
		</div>
		<button class = "navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse" style ="color:white; border-color:white; margin-right:0px">
			Menu
		</button>
		<div class = "collapse navbar-collapse navHeaderCollapse" >
			<ul class = "nav navbar-nav navbar-right">
				<li class = "listItem"><a href="logged.php" style="color:white;font-weight:bold">Home</a></li>
				<li class = "listItem"><a href="Chat/index.php"style="color:white;font-weight:bold">Chat</a></li>
				<li class = "listItem"><a href="forum.php"style="color:white;font-weight:bold">Forum</a></li>
				<li class = "listItem"><a href="memberlist.php"style="color:white;font-weight:bold">Memberlist</a></li>
				<li class ="listItem"><a href="discover.php"style="color:white;font-weight:bold">Discover</a></li>

			<li class = "listItem"><a href="logout.php"style="color:white;font-weight:bold">Logout</a></li>
 			</ul>
 		</div>
 	</div>
 </div>

    <div class="container">

      <div class="starter-template">
		        <h1>Phoenix Park</h1>
		       <div class="container">
		  	    <img class="img-responsive" src="img/PhoenPark.jpg" width="980" height="600">
		  	   </div>
		      </div>
				<p>This is Dublin's playground 
				- the largest urban enclosed park in Europe, with a Circumference of 11km (7m)
				and a total area of 712 hectares (1,760 acres). Situated 3km (2m) west of the city centre. 
				Ornamental gardens, nature trails, and broad expanses of grassland, separated by avenues of trees,
				including oak, beech, pine, chestnut, and lime. Livestock graze peacefully on pasturelands, 
				deer roam the forested areas, and horses romp on polo fields.</p>
				<h3>Information</h3>
				<p>Address : The Whitefields, Phoenix Park, Dublin 8, Ireland</br>
				Opening Time : Monday - Sunday 24 hrs</br>
				Phone : +353 (0)1 677-0095 </br>
				Website : www.phoenixpark.ie</p>
		 
	
		
	
		
		
		
		
                                                                		<div id="container">
                                                                <h1 style='color:#6C267A ;font-weight:bold;	'>Please leave your comment below ! </h1>
                                                                <form action="#" method="POST">
                                                                <table>
                                                                <tr><td colspan="2">
                                                                <h2>Name :</h2>
                                                                <div><input type="text" name="name" placeholder="Enter your Name..." class="textbox" id="name"/></div>
                                                                </td></tr>
                                                                <tr><td style="width:220px;">
                                                                <h2>Email :</h2>
                                                                <div><input type="text" name="email" placeholder="Enter your Email Address..." class="textbox" id="email"/></div>
                                                                </td>
                                                                <td>
                                                                <h2>Rate This Place :</h2>
                                                                <div><select id="rating">
                                                                <option value="l">Love it</option>
                                                                <option value="i">Interesting</option>
                                                                <option value="t">Hot</option>
                                                                <option value="u">Useful</option>
                                                                <option value="a">Average</option>
                                                                <option value="b">Boring</option>
                                                                <option value="h">Hate it</option>
                                                                </select>
                                                                </div>
                                                                </td></tr>
                                                                <tr><td colspan="2">
                                                                <h2>Comment :</h2>
                                                                <div><textarea name="name" placeholder="Write your comment..." id="comment"></textarea></div>
                                                                </td></tr>
                                                                </table>
                                                                <div><input type="submit" class="btn" value="Comment" id="comment_submit"></div>
                                                                
                                                                </form>
                                                                <div id="success_msg">
                                                                <?php include('comment/load_comments.php');?>
                                                                </div>
                                                                </div>
                                                                		
                                                                		
                                                                		
                                                                		
                                                                		
                                                                		
                                                                		
                                                                		
                                                                		
                                                                		
		</br></br>
		


             <div style="text-align:center">       
		 
		<a href="forum.php">
		<button type="button" class="btn btn-warning" >Back to Forum Page</button></a>
		
		         </div>
		
   	 </div>
	  

   </br></br>

   <footer class="bottom" style="position:relative;
bottom:0;
width:100%;background-color:#0F0606;color:white;font-weight: bold;">

<div class="container hidden-xs">


  <p class="navbar-text pull-left">NCI Team <a href="Http:/ncirl.ie">
      
      
  </br>  </br></a> Interdisciplinary Project</p></br>
  
<p class="navbar-text pull-center"> Group C  2016  All Right Reserved.</p>


  <a href="http://www.ncirl.ie" class="navbar-btn btn-danger btn "> NCI Students</a>

  </div>


</footer>

</br>
  
	
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