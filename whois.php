<?php
	$__username=$_SESSION['login']['username'];
	$__password=$_SESSION['login']['password'];
	$con=mysql_connect('localhost', 'root', '') or die(mysql_error());
	mysql_select_db('imcs') or die(mysql_error());
	$query="SELECT * FROM users_table,signup_table WHERE users_table.USERNAME='$__username' AND users_table.PWD='$__password' AND users_table.USER_ID=signup_table.USER_ID";
	$result=mysql_query($query) or die(mysql_error());
	while($fec= mysql_fetch_array($result)){
		$fname=$fec['FNAME'];
		$lname=$fec['LNAME'];
		$username=$fec['USERNAME'];
		$myid=$fec['USER_ID'];
	}
?>
