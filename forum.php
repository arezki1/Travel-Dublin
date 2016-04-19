<?php

if (empty($_GET["id"])==false){
    
    $id=$_GET["id"];
}

else{
    header('Location:index.php');
    
    exit;
}
 session_start();
 include("comment/db.php");


$sql="Select * from attractions where id=$id";
$command=mysql_query($sql);
while($data=mysql_fetch_row($command)){
$address=$data[2];
$title=$data[0];
$description=$data[1];
$image=$data[4];
$phone=$data[6];
$opening=$data[7];
$website=$data[8];
}



require("registration/common.php"); 
 
if(empty($_SESSION['user'])) 
{ 

    header("Location: registration/login.php"); 
    
    die("Redirecting to registration/login.php"); 
} 
 
	
?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>HotelSocial F O R U M</title>
    <script type="text/javascript" src="../comment/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->
    <link rel="stylesheet" href="comment/wtfdiary.css">
     <link rel="stylesheet" href="../css/style.css" type="text/css" />
    

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
  	<div class="navbar-static-top navbar-inverse">

		  <div class="container" id="nav">
		        <div class="navbar-brand headerSocH">
                    <!--add name of user in session to navbar brand-->
                   	<a href="index.php" style="color:white;font-weight:bold">Go Home</a>
			        
		       </div>
              
		<button class = "navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse" style ="color:white; border-color:white; margin-right:0px">
			Menu
		</button>
    	
    		<div class = "collapse navbar-collapse navHeaderCollapse" >
    		    <nav id="nav1">
    			<ul class = "nav navbar-nav navbar-right">
    				
    				<li class = "items"><a href="forum.php?id=1" style="color:white">Dublin Castle      </a></li>
    				<li class = "items"><a href="forum.php?id=2" style="color:white">Phoenix Park       </a></li>
    				<li class = "items"><a href="forum.php?id=3" style="color:white">Temple Bar         </a></li>
    				<li class = "items"><a href="forum.php?id=4" style="color:white">Christ Church      </a></li>
    				<li class = "items"><a href="forum.php?id=5" style="color:white">Guinness Storehouse</a></li>
    				<li class = "items"><a href="forum.php?id=6" style="color:white">National Museum    </a></li>
    				
    			</ul>
    			</nav>
		   </div>
		       
	</div>
    </div>
    
    
  
  
 <body>


    <div class="container img-responsive">

        <div class ="row">
             <?php
        echo
        
        "<h1 style=' padding: 40px 15px; text-align: center;' class='coolFont box bradius'>$title</h1>";

              ?>
  	    <img style="max-width: 70%" class="center-block"  src="img/<?= $image; ?>" >
            <!--max-width="970" max-height="590"-->
        </div>
        
        </div>
    
  	   <br/><br/>
      
	    <div class="row bradius box coolFont">
	        	 <?php
        
        
                    echo    "<p style='color: black;'>$description</p></br><br>";
                    echo    "<h3 style='color: black; text-align: center;'> Information</h3>";
                    echo	"<p style='color: black; text-align: center;'>$address</p>";
                    echo	"<p style='color: black; text-align: center;'>$phone</p>";
                    echo	"<p style='color: black; text-align: center;'>$opening</p>";
                    echo	"<p style='color: black; text-align: center;'>$website</p>";
        
                ?>
	        
	    </div>
	    <br><br>
	
  		<div id="container" class="bradius box">
          <h1 class="coolFont" style="text-align: center;">Please leave your comment below !</h1>
              <div class ="form-group">
                   <form role="form" action="#" method="POST" id="commentForm">
                      <table>
                        <tr>
                            <td colspan="2">
                              <h2 class="coolFont">Name :</h2>
                              <div><input type="text" name="name" placeholder="Enter your Name..." class="textbox .form-control" id="name"/></div>
                            </td>
                        </tr>
                  <tr> 
                      <td style="width:220px;">
                      
                      <h2 class="coolFont">Email :</h2>
                  
                      <div><input type="text" name="email" placeholder="Enter your Email Address..." class=" textbox .form-control" id="email"/></div>
                  
                      </td>
                      <tr>
                    <td>
                        <h2 class="coolFont">Rate This Place :</h2>
                        <div class="form-group">
                          <select id="rating">
                              <option value="6">Love it</option>
                              <option value="5">Interesting</option>
                              <option value="4">Hot</option>
                              <option value="3">Useful</option>
                              <option value="2">Average</option>
                              <option value="1">Boring</option>
                              <option value="0">Hate it</option>
                          </select>
                         </div>
                  </td> 
                          
                      </tr>
                 </tr>
                  <tr><td colspan="2">
                      
                  <h2 class="coolFont">Comment :</h2>
                  <div><textarea name="name" placeholder="Write your comment..." id="comment"></textarea></div>
                  </td></tr>
                  </table>
                  <div><input type="submit" class="btn .form-control" value="Comment" id="comment_submit"></div>
                
                    </form>
                </div>
 
  
  
  <div id="success_msg">
  <?php include('comment/load_comments.php');?>
  </br>
  </div>
      
  
  </div>
  
                                                                		
	
   	 </div>
	  


  
	
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
  
