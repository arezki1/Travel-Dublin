<!DOCTYPE html>

<html>
<head>
	<title> hello </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script>
	
                 function submitChat(){
                 
                  
                  form1.uname.readOnly = true;
                
                
                  var uname = form1.uname.value;
                  var msg = form1.msg.value;
                  var xmlhttp = new XMLHttpRequest();
 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
  document.getElementById("chatlogs").innerHTML = xmlhttp.responseText;
 
  
           }
 
 }
 xmlhttp.open('GET','insert.php?'+'&uname='+uname+ '<b> Says </b> ' +'&msg='+msg, true);
 xmlhttp.send();
 
 
}
$(document).ready(function(e){
 $.ajaxSetup({cache:false});
 setInterval(function(){$('#chatlogs').load('logs.php');}, 1000);
});
</script>


</head>

<body>
 
<form name = "form1">


                    <p>Enter Your Chatname:</p>
                    
                    
                    <input type="text" name="uname" style="width:200px;" /><br/>
                    
                    
                    <p>Your Message:</p> 
                    
                    
                    <textarea name= "msg" styles = "width:200px; height: 70px"></textarea><br/>

</form>

<br/>


<button onclick= "submitChat()"class= "button">Send</button><br/><br/>


<div id="chatlogs"> 

</div>

</body>


</html>