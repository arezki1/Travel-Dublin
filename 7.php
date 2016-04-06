

<?php

 session_start();
 include("comment/db.php");


$sql="Select * from attractions order by title desc";
$command=mysql_query($sql);
while($data=mysql_fetch_row($command)){
$address=$data[2];
$title=$data[0];
$description=$data[1];

}



require("common.php"); 
 
if(empty($_SESSION['user'])) 
{ 

    header("Location: login.php"); 
    
    die("Redirecting to login.php"); 
} 
 
	
?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>HotelSocial F O R U M</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <link rel="stylesheet" href="comment/wtfdiary.css">
     <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script type="text/javascript" src="comment/jquery.min.js"></script>

		<style>
		  body {padding-top: 50px;}
	    </style>
	    
	    
	    


<script type="text/javascript" >
$(function() {
$("#comment_submit").click(function() 
{
var name = $("#name").val();
var email = $("#email").val();
var rating = $("#rating").val();
var comment = $("#comment").val();
var attraction=$("#attraction").text();

var dataString = 'name='+ name + '&email='+ email + '&comment='+ comment + '&rating=' +rating+'&attraction='+attraction;
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
$("#attraction").text('');
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
        
        <?php
        echo
        
        "<h1 style=' padding: 40px 15px; text-align: center;'>$title</h1>";
       
        
      ?>
  	    <img class="img-responsive" src="img/templebar.jpg" width="980" height="600"><br><br>
  	   
      
	
		 <?php
        
        
     echo   "<p>$description</p></br><br>";
     echo  "<h3> Information</h3>";
	echo	"<p>$address</p>";
		
        
      ?>
		
	
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
  <option value="6">Love it</option>
  <option value="5">Interesting</option>
  <option value="4">Hot</option>
  <option value="3">Useful</option>
  <option value="2">Average</option>
  <option value="1">Boring</option>
  <option value="0">Hate it</option>
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
  
