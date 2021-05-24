<?php


include("dbcon.php");

// updat button ic clicked 
if(isset($_POST['updat']))
{
$ids=$_POST['ids'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
mysql_query(" update passengers set fname='".$fname."',lname='".$lname."' where passengerid='".$ids."'");
echo "<script> window.close() </script>";
}
else
{
$idpass=$_GET['idpass'];
$query1=mysql_query(" select * from passengers where passengerid='".$idpass."'");
if($row1=mysql_fetch_array($query1))
{



?>
<html>
<head>

<title> UPDATE </title>


</head>
<body onUnload="window.opener.location.reload(); window.close()">
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >



<table border="5">
<tr>
<td> PASSENGEER ID</td>
<td> <input type="text" name="ids" value="<?php echo $row1['passengerid']?>" /></td>
</tr>
<tr>
<td> FIRST NAME</td>
<td> <input type="text" name="fname" value="<?php echo $row1['fname']?>" /></td>
</tr>
<tr>
<td> LAST NAME </td>
<td> <input type="text" name="lname" value="<?php echo $row1['lname']?>" /></td>
</tr>
<tr>

<td> <input type="submit" name="updat" value="updat" /></td>
</tr>
</table>






</form>


</body>
</html>
<?PHP }}?>