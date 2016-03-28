<html>
<head>
<link rel="stylesheet" href="wtfdiary.css">

<script type="text/javascript" src="jquery.min.js"></script>


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
url: "save_form.php",
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
<div id="container">
<h2 style='color:#777777'>Modern Comment System - <a href='http://tuts.wtfdiary.com'>tuts.wtfdiary</a></h2>
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
<h2>Rate our Post :</h2>
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
<?php include('load_comments.php');?>
</div>
</div>

</body>

</html>