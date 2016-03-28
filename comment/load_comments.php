<?php
include("db.php");


$sql="Select * from comment order by com_id desc LIMIT 10";
$command=mysql_query($sql);
while($data=mysql_fetch_row($command))
{
$name=$data[1];	
$email=$data[2];
$lowercase = strtolower($email);
	
$image = md5($lowercase);


$rating=$data[3];
$comment=$data[4];


echo "<div class='comment_box'>";
echo "<div class='image_box'><img src='http://www.gravatar.com/avatar/$image?s=50' id='avatar_img'/></div>";
echo "<div class='body'>";

echo "<div><span><b>$name</b></span> ";
echo "<span style='float:right;'><small>";
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
echo "</small></span></div>";

echo "<div class='txt'>$comment</div>";
echo "</div>";
echo "</div>";
}
?>