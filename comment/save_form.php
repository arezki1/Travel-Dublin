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
$attraction=$_POST['attraction'];

$sql="INSERT INTO comments(name,email,rating,comment,attraction) VALUES ('$name','$email','$rating','$comment','$attraction')";
$command=mysql_query($sql);

echo "<div class='comment_box'>";
echo '<div class="image_box"><img src="http://www.gravatar.com/avatar/' . md5($email) . '?s=50" id="avatar_img"/></div>';
echo "<div class='body'>";
echo "<div><span><b>$name</b></span> ";
echo "<span style='float:right;'>";
if($rating=="6")
{
echo "&nbsp; <img src='comment/icons/heart-icon.png'> Loved it";
}
else if($rating=="5")
{
echo "&nbsp; <img src='comment/icons/thumb-up-icon.png'> Interesting";
}
else if($rating=="4")
{
echo "&nbsp; <img src='comment/icons/fire-icon.png'> Hot";
}
else if($rating=="3")
{
echo "&nbsp; <img src='comment/icons/flag-icon.png'> Useful";
}

else if($rating=="2")
{
echo "&nbsp; <img src='comment/icons/thumb-down-icon.png'> Boring";
}
else if($rating=="1")
{
echo "&nbsp; <img src='comment/icons/hate-icon.png'> Hate it";
}
echo "</span></div>";

echo "<div class='txt'>$comment</div>";
echo "</div>";
echo "</div>";
}
?>