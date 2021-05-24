<?php
	$link = mysql_connect('localhost','root','');
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db("imcs", $link);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Sanitize the POST values
	$login = $_POST['user'];
	$password = $_POST['password'];
	
	//Create query
	$qry="SELECT * FROM admin_login WHERE Username='$login' AND Password='$password'";
	$result=mysql_query($qry);
	//while($row = mysql_fetch_array($result))
//  {
//  $level=$row['position'];
//  }
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_Username'] = $member['Username'];
			$_SESSION['SESS_Pssword'] = $member['Password'];
			session_write_close();
			//if ($level="admin"){
			header("location:view_comment.php");
			exit();
			//}
			//else{
			//header("location: front.php");
			//exit();
			//}
		}
		else {
			//Login failed
			header("location:wrong.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>