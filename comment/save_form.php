<?php
include("db.php");

if($_POST)
{
$name=$_POST['name'];	

$email=$_POST['email'];
$lowercase = strtolower($email);
	
$image = md5($lowercase);


$rating=$_POST['rating'];
$comment=$_POST['comment'];

$sql="INSERT INTO comment(name,email,rating,comment) VALUES ('$name','$email','$rating','$comment')";
$command=mysql_query($sql);

echo "<div class='comment_box'>";
echo "<div class='image_box'><img src='http://www.gravatar.com/avatar/$image?s=50' id='avatar_img'/></div>";
echo "<div class='body'>";
echo "<div><span><b>$name</b></span> ";
echo "<span style='float:right;'>";
if($rating=="l")
{
echo "&nbsp; <img src='icons/heart-icon.png'> Loved it";
}
else if($rating=="i")
{
echo "&nbsp; <img src='icons/thumb-up-icon.png'> Interesting";
}
else if($rating=="t")
{
echo "&nbsp; <img src='icons/fire-icon.png'> Hot";
}
else if($rating=="u")
{
echo "&nbsp; <img src='icons/flag-icon.png'> Useful";
}

else if($rating=="b")
{
echo "&nbsp; <img src='icons/thumb-down-icon.png'> Boring";
}
else if($rating=="h")
{
echo "&nbsp; <img src='icons/hate-icon.png'> Hate it";
}
echo "</span></div>";

echo "<div class='txt'>$comment</div>";
echo "</div>";
echo "</div>";
}
?>