<?php
include("db.php");


$sql="Select * from comments order by rating desc LIMIT 10";
$command=mysql_query($sql);
while($data=mysql_fetch_row($command))
{
$name=$data[1];	
$email=$data[2];
$lowercase = strtolower($email);
	
$image = md5($lowercase);


$rating=$data[3];
$comment=$data[4];
$attraction=$data[5];

echo "<div class='comment_box'>";

echo "<div class='image_box'><img src='http://www.gravatar.com/avatar/$image?s=50' id='avatar_img'/></div>";
echo "<div class='body'>";

echo "<div><span><b>$name</b></span> ";


echo "<span style='float:right;'><small>";
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
echo "</small></span></div>";

echo "<div class='txt'>$comment</div>";
echo "</div>";
echo "</div>";
}
?>

