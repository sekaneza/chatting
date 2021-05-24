<?php
	session_start();
	if (!isset($_POST['submit'])) {
		header('location:./contactt.php');
	} else {
		$conn = mysql_pconnect("localhost", "root", "root");
	
		mysql_select_db("imcs");
	
		if (strlen($_POST['NAMES']) < 2) {
			$error['name']=true;
		}
		
		if (strlen($_POST['ADDRESS']) < 2) {
			$error['address']=true;
			}
		if (strlen($_POST['MESSAGE']) < 2) {
			$error['message']=true;
		}
	
		if(!isset($error)){
			try {
				$queryc = "INSERT INTO contacts_table (NAMES, ADDRESS, MESSAGE,) VALUES ('$_POST[NAMES]', '$_POST[ADDRESS]', '$_POST[MESSAGE]')";
				$result = mysql_query($queryc) or die (mysql_error());
			} catch(Exception $e) {}
			unset($_SESSION['error']);
			header("Location:./");
		}else{
			$_SESSION['error']=array(
					"error"=>$error,
					"name"=>$_POST['NAMES'],
					"address"=>$_POST['ADDRESS'],
					"message"=>$_POST['MESSAGE']
				);
			header("Location:./contactt.php");
		}
	}
?>

