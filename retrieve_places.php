<html>
<body>
<table bgcolor="skyblue"border="1"width="100px">
<tr>
<td>Com_id</td>
<td>Firstname</td>
<td>Lastname</td>
<td>email</td>
<td>comment</td>
<td>OPTION</td>
</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("imcs");
$sql=mysql_query("select * from comment");
$rows=mysql_num_rows($sql);
echo $rows;
while($record=mysql_fetch_array($sql))
{
$Com_id=$record['Com_id'];
?>
<tr>
<td><?php echo $record['Com_id'];?></td>
<td><?php echo $record['Firstname'];?></td>
<td><?php echo $record['Lastname'];?></td>
<td><?php echo $record['email'];?></td>
<td><?php echo $record['comment'];?></td>
<td><a href="edit_places.php?id=<?php echo $Com_id;?>">EDIT</a></td>
</tr>
<?php 
}
?>
</table>
