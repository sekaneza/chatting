<?php
	session_start();
	include_once("./header.inc.php");
?>
		<h1 align="center"><b><font color="#000099"><blind>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Put your comment here</blind></font><b></h1>		
      <form action="contactt.php" method="POST">
      
      <table border="0" class="input-form">
			<tr>
				<td>Names:</td>
				<td><input type="text" name="NAME" id="name" value="<?=@$_SESSION['error'][name];?>"/></td>
				<td style="color:red;font-weight:bold;font-size:12pt;">
       <?php
	if(isset($_SESSION['error']['error']['name']))
		echo "Invalid names";
	else 
		echo "&nbsp;";
?>
			</td>
       	</tr>
       	<tr>
       		<td>Address:</td>
       		<td><input type="text" name="ADDRESS" id="address" value="<?=@$_SESSION['error'][address];?>"/></td>
				<td>&nbsp;</td> 
       	</tr>
         <tr>
         	<td>Write your message here:</td>
         	<td><textarea name="MESSAGE" id="message" rows="10" cols="50" value="<?=@$_SESSION['error'][message];?>"></textarea></td>
         	<td style="color:red;font-weight:bold;font-size:12pt;">
<?php
	if(isset($_SESSION['error']['error']['message']))
		echo "message is empty";
	else
		echo "&nbsp;";
?>
			</td>
         </tr>
         <tr>
         	<td>&nbsp;</td>
         	<td style="text-align:center">
                <input type="submit" name="Send" value="Send" />
            </td>
            <td>&nbsp;</td>
         </tr>
       
       </table>
     </form>
<?php
	include_once("./footer.inc.php");
?>
<link rel="icon" href="images/browertitle5.png" type="image" />
<link rel="shortcut icon" href="images/browertitle5.png" type="image" />