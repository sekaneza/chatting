<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Com_id = $_GET['Com_id'];
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$email=$_POST['email'];
$comment=$_POST['comment'];
// Establish Connection with MYSQL
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("imcs",$con);
// Specify the query to Update Record
$sql = "Update comment set Firstname='".$Firstname."',Lastname='".$Lastname."',email='".$email."',comment='".$comment."' where Com_id=".$Com_id."";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("User Updated Succesfully");window.location=\'view_comment.php\';</script>';
?>
</body>
</html>
