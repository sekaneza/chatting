<?php
	session_start();
	include_once("./header2.inc.php");
	if(isset($_SESSION['feedback']['sent'])){
?>
	<h1 style="color:green;text-align:center;border:1px solid green;padding:5px 0px">Message sent successfully</h1>
<?php
		unset($_SESSION['feedback']['sent']);
	}
	if(isset($_SESSION['error'])){
?>
	<h1 style="color:red;text-align:center;border:1px solid red;padding:5px 0px">Message not sent</h1>
<?php
		unset($_SESSION['error']);
	}
?>
<?php 
$con=mysql_connect("localhost", "root", "");
	mysql_select_db("imcs");
	$me=$__username;
	//$query="SELECT MSGFROM FROM message_table limit 0,1";
			$query="SELECT * FROM message_table WHERE MSGFROM='$me' AND RECEIVERFOLDER='Inbox' ORDER BY DOS DESC limit 1,1";
	
	$result=mysql_query($query) or die(mysql_error());

?>
		
		<?php while($replay=mysql_fetch_array($result)){;?>
		<form action="sendmail.php" method="POST" enctype="multipart/form-data">
	   <h2 align="center"><blink>compose the email here</blink></h2>
			<table border=0 class="input-form">
			<tr>
				<td>To:</td>
				<td><input type="text" value="<?=@$_SESSION['error']['email'];//echo $replay['MSGFROM'];?>@localhost.local" name="email" id="email"/></td>
			</tr>
			<tr>
				<td>Subject:</td>
				<td><input type="text" name="text" id="text" /></td>
			</tr><tr>
				<td>Attachment:</td>
				<td><input type="file" name="datafile" id="datafile" style="width:60%"/></td>
			</tr>
			<tr>
				<td>Write a message:</td>
				<td><textarea name="message" rows="10" cols="55"><?=@$_SESSION['error']['message'];echo $replay['BODY'];?></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="Send" value="Send" />
				<input type="submit" name="Save" value="Save" </td>
				
				<td>&nbsp;</td>
			</tr>
			</table>
			<?php
			
			}
			?>
		</form>
<?php
include_once("./footer.inc.php");
?>
<link rel="icon" href="images/browertitle5.png" type="image" />
<link rel="shortcut icon" href="images/browertitle5.png" type="image" />