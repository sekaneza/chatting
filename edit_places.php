<?php
		   $Com_id=$_GET['Com_id'];
// Establish Connection with Database
$con = mysql_connect("localhost","root","");
// Select Database
mysql_select_db("imcs",$con);
// Specify the query to execute
$sql = "select * from comment where Com_id=".$Com_id."";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Com_id=$row['Com_id'];
$Firstname=$row['Firstname'];
$Lastname=$row['Lastname'];
$email=$row['email'];
$comment=$row['comment'];
}
?>
		   
          <form id="form1" name="form1" method="post" action="Update_places.php?Com_id=<?php echo $Com_id;?>">
            <table width="100%" height="118" border="0">
              <tr>
                 <td height="30">COM_Id:</td>
                 <td><?php echo $Com_id;?></td>`
               </tr>
               <tr>
                 <td height="28">Firstame:</td>
<td>
            <input type="text" name="Firstname" value="<?php echo $Firstname;?>" />
                 </td>
               </tr>
               <tr>
                 <td height="29">Lastname:</td>
<td>
                   <input type="text" name="Lastname" value="<?php echo $Lastname;?>" />
                 </td>
               </tr>
               <tr>
			   <td height="29">email:</td>
				 <td>
                   <input type="text" name="email" value="<?php echo $email;?>" />
                 </td>
               </tr>
               <tr>
			   <td height="29">comment:</td>
				 <td>
                   <label>
                   <input type="text" name="comment" value="<?php echo $comment;?>" />
                   </label>
                 </td>
               </tr>
			   <tr>
                 <td>&nbsp;</td>
				 <td>
                   <input type="submit" name="button" id="button" value="UPDATE" />
                 </td>
               </tr>
             </table>
          </form>
            <?php
// Close the connection
mysql_close($con);
?>