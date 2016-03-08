<?php

session_start();



?>
        <!--styling-->
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <script type="text/javascript" src="../js/bootstrap.js"></script>
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
                        <li class="listItem"><a href="../logged.php">Home</a></li>
                        <li class="listItem"><a href="#">Chat</a></li>
                        <li class="listItem"><a href="#">Forum</a></li>
                        <li class="listItem"><a href="../memberlist.php">Memberlist</a></li>
                        <li class="listItem"><a href="../discover.php">Discover</a></li>
                        <li class="listItem"><a href="../logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

<!DOCTYPE html>

<html>
<head>
	<title> hello </title>
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
 xmlhttp.open('GET','insert.php?'+'&uname='+uname+'&msg='+msg, true);
 xmlhttp.send();
 
 
}
$(document).ready(function(e){
 $.ajaxSetup({cache:false});
 setInterval(function(){$('#chatlogs').load('logs.php');}, 1000);
});
</script>

<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
    
   
<form name = "form1">


                    <p>Choose a Chatname:</p>
                    
                    
                    <input type="text" name="uname" style="width:200px;" /><br/>
                    
                    
                    <p>Your Message:</p> 
                    
                    
                    <textarea name= "msg" styles = "width:200px; height: 70px"></textarea><br/>

</form>

<br/>


<button onclick= "submitChat()"class= "button">Send</button><br/><br/>

<div id="imageload" style="display:none;"> 
<img src="loading.gif"/>
</div>

<div id="chatlogs"> 
<h1>Loading .... </h1><img src="loading.gif"/>
</div>

</body>


</html>