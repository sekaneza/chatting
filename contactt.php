<?php
	include_once("./header.inc.php");
?>

<?php
$NAMES=$_POST['NAMES'];
$ADDRESS=$_POST['ADDRESS'];
$MESSAGE=$_POST['MESSAGE'];
//$CONTACTDATE=$_POST['CONTACTDATE'];
mysql_connect("localhost","root","");
mysql_select_db("imcs");
mysql_query("insert into contacts_table values('$NAMES','$ADDRESS','$MESSAGE')") or die(mysql_error());
?>
<html>
	<h1 align="center"><b><font color="#000099"><blind>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Put your comment here</blind></font><b></h1>		
     <body> 
	 <form action="contactt.php" method="POST">
      
      <table border="0" class="input-form">
			<tr>
				<td>Names:</td>
				<td><input type="text" name="NAMES" id="name" value=""></td>
				<td style="color:red;font-weight:bold;font-size:12pt;">
			</td>
       	</tr>
       	<tr>
       		<td>Address:</td>
       		<td><input type="text" name="ADDRESS" id="address" value=""</td>
				<td>&nbsp;</td>
       	</tr>
         <tr>
         	<td>Write your comment here:</td>
         	<td><textarea name="MESSAGE" rows="10" cols="55"></textarea> </td></tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="send" /></td>
				<td>&nbsp;</td>
		   </tr>
         <tr>
         	<td>CONTACTDATE:</td>
         	<td> </td></tr>
       </table>
     </form>
	 </body>
	 </html>
<?php
	include_once("./footer.inc.php");
?>
<link rel="icon" href="images/browertitle5.png" type="image" />
<link rel="shortcut icon" href="images/browertitle5.png" type="image" />