<?php
	//Connect to mysql server
	$link = mysql_connect('localhost','root','');
	if(!$link)
	 {
		echo"Failed to connect to server" . mysql_error();
	}
	else
	{
	mysql_select_db("imcs",$link);
	$query=mysql_query("insert into comment values('','$_POST[Firstname]','$_POST[Lastname]','$_POST[email]','$_POST[comment]',now())");
	if(!$query)
	{
	die('Data not inserted !'.mysql_error());
	}
	else
	{
	echo'<a href="comment.php"><img src="images/BACK100.png" /></a><h4 style="color:green;text-align:center;border:0px solid green;padding:5px 0px;font-size:20px;
	box-shadow:0px 0px 8px 0px #009900;
-moz-box-shadow:0px 0px 8px 0px #009900;
-webkit-box-shadow:0px 0px 8px 0px #009900;
text-shadow:2px 2px 2px #009900;
-moz-text-shadow:2px 2px 2px #009900;
background:url(images/ok.png)no-repeat;">Your comment sent successfully!!!,Thank u!!!..........</h1><p style="float:right;background:url(images/ok.png);"></p>';
	}}
	mysql_close($link);
	?>