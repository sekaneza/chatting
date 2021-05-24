<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BMUIT</title>
<link rel="stylesheet" media="all" href="newcss.css" />
<script>
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>
</head>
<body id="body" onload="startTime()">
 <form  method="post" >
         <div id="border">

		<table border="0">
        <h2 colspan=3 style="width:480px; background:#3366CC; height:100px; color:#FFFFFF; text-align:center;">Change password</h2>
        <tr>
		<td>New Password:</td>
		<td><input style="border:1px solid #000000;"type="password" name="cpass"/></td>
		</tr>
		<tr>
		<td>Confirm Password</td>
		<td><input style="border:1px solid #000000;"type="password" name="npass"/></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td><input style="border:1px solid #000000;"type="submit" name="change" value="change"/>&nbsp;<input style="border:1px solid #000000;"type="reset" name="del" value="clear"/></td>
		</tr>
		</table>
        </div>
        </form>
		<?php
if(isset($_POST['change'])){
require_once"./connect.php";
if(empty($_POST['npass'])or empty($_POST['cpass'])){
echo"<h4 style='color:red; -box-shadow:0px 0px 8px 0px rgba(89, 67, 24, 6,);
-moz-box-shadow:0px 0px 8px 0px rgba(89, 67, 24, 6,);
-webkit-box-shadow:0px 0px 8px 0px rgba(89, 67, 24, 6,);'>Enable to change password because some fields are empty!!!!</h4>";
}
else {
if($_POST['cpass']===$_POST['npass']){
mysql_query("UPDATE `users_table` SET `PWD`='".$_POST['npass']."' WHERE PWD='".$_SESSION['users_table']['PWD']."'")or die(mysql_error());
echo"Password was changed!";
}else{
echo"<h5 style='-box-shadow:0px 0px 8px 0px rgba(89, 67, 24, 6,);
-moz-box-shadow:0px 0px 8px 0px rgba(89, 67, 24, 6,);
-webkit-box-shadow:0px 0px 8px 0px rgba(89, 67, 24, 6,);
text-align:center; margin-left100px; height:20px; width:480px;'>Password does not match</h5>";
}}
}
?>
<h1 colspan=3 style="width:480px; background:#3366CC; height:100px; color:#FFFFFF; text-align:center; margin-bottom:-400px;">The End</h1>
</body>
</html>
<style>
#border {border:4px solid #3333FF; width:480px; -moz-box-shadow:0px 0px 8px 0px rgba(89, 67, 24 6,); 
-webkit-box-shadow:0px 0px 8px 0px rgba(89, 67, 24 6,); 
-box-shadow:0px 0px 8px 0px rgba(89, 67, 24 6,); text-align:center; color:#0099FF; font-family:rod;}
}
#footer {width:480px; height:200px; background:#0099FF; -moz-box-shadow:0px 0px 8px 0px rgba(89, 67, 24 6,); 
-webkit-box-shadow:0px 0px 8px 0px rgba(89, 67, 24 6,); 
-box-shadow:0px 0px 8px 0px rgba(89, 67, 24 6,); text-align:center; color:#0099FF; font-family:rod;}
</style>