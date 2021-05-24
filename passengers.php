<?php 
include("dbcon.php");
$query=mysql_query("select * from passengers order by passengerid desc");

?>

<html>
<head>

<title> PASSENGERS </title>
<script>
function myfunction(a)
{
window.open("updatepassenger.php?idpass="+a,"_blank","top=200,height=600,width=500,left=200");
}
function myfunction1()
{
var a=1;
window.open("addpassenger.php?idpass="+a,"_blank","top=200,height=600,width=500,left=200");
}  
</script>

</head>
<body>
<form action="javascript:myfunction1()" method="post">
<input type="submit" name="addnew" value="addnew" />
</form>
<table border="5">
<tr>
<td colspan="2"> OPTIONS</td>
<td> passenger id</td>
<td> first name</td>
<td> last name</td>
<td> age</td>
<td> gender</td>
<td> location</td>

</tr>
<?php while($rows=mysql_fetch_array($query))
{?>
<tr>
<td> <a href="deletepassenger.php?idpass=<?php echo $rows['passengerid']?>" >Delete</a></td>
<td> <a href="javascript:myfunction(<?php echo $rows['passengerid']?>)" onclick="return confirm('do you want to update?')">Update</a></td>
<td> <?php echo $rows['passengerid']?></td>
<td> <?php echo $rows['fname']?></td>
<td> <?php echo $rows['lname']?></td>
<td> <?php echo $rows['ages']?></td>
<td> <?php echo $rows['gender']?></td>
<td> <?php echo $rows['loc']?></td>


</tr>
<?php }?>
</table>
</body>
</html>





