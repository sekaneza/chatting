<?php
	session_start();
	$con=mysql_connect("localhost", "root", "");
	mysql_select_db("imcs");
	if(strlen($_POST['newpassword']) >= 6){
		if($_POST['newpassword']==$_POST['renewpassword']){
			if($_SESSION['login']['password']==md5($_POST['oldpassword'])){
			echo	$newpassword=md5($_POST['newpassword']);
			echo	$username=$_SESSION['login']['username'];
				$query="UPDATE users_table SET  PWD='$newpassword' WHERE USERNAME='$username'";
				mysql_query($query) or die(mysql_error());
			}else{
				echo"error could not update pw";
			}
		}else{
			echo"error not match";
		}
}else{
		echo"invalid password";
	}
	header("Location:./header2.inc.php");
?>
