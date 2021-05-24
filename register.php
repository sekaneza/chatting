<?php
	session_start();
	if (!isset($_POST['submit'])) {
		header('location:./loginpage.php');
	} else {
		$conn = mysql_pconnect("localhost", "root", "");
	
		mysql_select_db("imcs");
	
		if (strlen($_POST['username']) < 4) {
			$error['username']=true;
		}
		$user= "SELECT * FROM users_table WHERE USERNAME='$_POST[username]'";
		$result= mysql_query($user);
		if(mysql_num_rows($result)){
			$error['USERNAME']=true;
		}
		if (strlen($_POST['password']) < 6) {
			$error['password']=true;
		}
		if (strlen($_POST['fname']) < 2) {
			$error['fname']=true;
		}
		if (!checkdate($_POST['month'],$_POST['day'],$_POST['year'])) {
			$error['date']=true;
		}
		if ($_POST['sex'] =="") {
			$error['sex']=true;
		}
		if (!preg_match("/^(\+\d{1,3}\-\d{9})$/",$_POST['phonenumber'])) {
			$error['phone']=true;
		}
		$number= "SELECT * FROM signup_table WHERE PHONENO='$_POST[phonenumber]'";
		$result= mysql_query($number);
		if(mysql_num_rows($result)){
			$error['phonenumber']=true;
		}
		if ($_POST['password'] != $_POST['passwordagain']) {
			$error['missmach']=true;
		}
	
		if(!isset($error)){
			try {
				$date=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
				$query = "INSERT INTO signup_table (FNAME, LNAME, ADDRESS, BOD, SEX, PHONENO) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[address]', '$date', '$_POST[sex]', '$_POST[phonenumber]')";
				$result = mysql_query($query) or die(mysql_error());
				$id=mysql_insert_id();
				$queryx = "INSERT INTO users_table (USER_ID, USERNAME, PWD) VALUES ('$id', '$_POST[username]', md5('$_POST[password]'))";
				$resultx = mysql_query($queryx);
				mkdir("mail/".$id,07);
			} catch(Exception $e) {}
			unset($_SESSION['error']);
			$_SESSION['login']['new']=true;
			$_SESSION['login']['username']=$_POST['username'];
			$_SESSION['login']['password']=md5($_POST['password']);
			header("Location:./");
		}else{
			$_SESSION['error']=array(
					"error"=>$error,
					"fname"=>$_POST['fname'],
					"lname"=>$_POST['lname'],
					"address"=>$_POST['address'],
					"day"=>$_POST['day'],
					"year"=>$_POST['year'],
					"month"=>$_POST['month'],
					"sex"=>$_POST['sex'],
					"phone"=>$_POST['phonenumber'],
					"username"=>$_POST['username']
	
				);
				header("Location:./loginpage.php");
				print_r($_SESSION['error']);
			
		}
	}
?>

