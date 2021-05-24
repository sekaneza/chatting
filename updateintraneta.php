<?php
include("connect.php");
// updat button ic clicked 
if(isset($_POST['update']))
{
$Com_id=$_POST['Com_id'];
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$email=$_POST['email'];
$comment=$_POST['comment'];
mysql_query(" update comment set Firstname='".$Firstname."',Lastname='".$Lastname."',email='".$email."',comment='".$comment."' where Com_id='".$Com_id."'");
echo "<script> window.close() </script>";
}
else
{
$Com_id=$_GET['Com_id'];
$query1=mysql_query(" select * from comment where Com_id='".$Com_id."'");
if($row1=mysql_fetch_array($query1))
{
?>
<html>
<head>
<title> UPDATE </title>
</head>
<body onUnload="window.open.location.reload(); window.close()">
<form action="updateintraneta.php" method="post" >
<table border="5">
<tr>
<td> COM_ID</td>
<td> <input type="text" name="Com_id" value="<?php echo $row1['Com_id']?>" /></td>
</tr>
<tr>
<td> FIRST NAME</td>
<td> <input type="text" name="Firstname" value="<?php echo $row1['Firstname']?>" /></td>
</tr>
<tr>
<td> LAST NAME </td>
<td> <input type="text" name="Lastname" value="<?php echo $row1['Lastname']?>" /></td>
</tr>
<tr>
<td> email </td>
<td> <input type="text" name="email" value="<?php echo $row1['email']?>" /></td>
</tr>
<tr>
<td> comment </td>
<td> <input type="text" name="comment" value="<?php echo $row1['comment']?>" /></td>
</tr>
<tr>
<td> <input type="submit" name="update" value="update" /></td>
</tr>
</table>
</form>
</body>
</html>
<?PHP }}?>