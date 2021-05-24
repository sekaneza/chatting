<?php
	session_start();
	include_once("./header2.inc.php");
	if(isset($_SESSION['feedback']['sent'])){
?>
	<h1 style="color:green;text-align:center;border:0px solid green;padding:5px 0px;
	box-shadow:0px 0px 8px 0px #009900;
-moz-box-shadow:0px 0px 8px 0px #009900;
-webkit-box-shadow:0px 0px 8px 0px #009900;
text-shadow:2px 2px 2px #009900;
-moz-text-shadow:2px 2px 2px #009900;
">Message sent successfully</h1>
<?php
		unset($_SESSION['feedback']['sent']);
	}
	if(isset($_SESSION['error'])){
?>
	<h1 style="color:red;text-align:center;border:1px solid red;padding:5px 0px;
	box-shadow:0px 0px 8px 0px #FF0000;
-moz-box-shadow:0px 0px 8px 0px #FF0000;
-webkit-box-shadow:0px 0px 8px 0px #FF0000;
text-shadow:2px 2px 2px #FF0000;
-moz-text-shadow:2px 2px 2px #FF0000;">Message not sent</h1>
<?php
		unset($_SESSION['error']);
	}
?>


		<form action="sendmail.php" method="POST" enctype="multipart/form-data">
	   <h2 align="center"><blink>compose the email here</blink></h2>
			<table border=0 class="input-form">
			<tr>
				<td>To:</td>
				<td>Here you must put the email like (Ex: username@localhost.local)<input type="text" value="<?=@$_SESSION['error']['email'];?>" name="email" id="email" class="adroid"/></td>
			</tr>
			<tr>
				<td>Subject:</td>
				<td><input type="text" name="text" id="text"  class="adroid"/></td>
			</tr><tr>
				<td>Attachment:</td>
				<td>attachment must be less than one 1Mb<input type="file" name="datafile" id="datafile" style="width:60%" class="adroid"/></td>
			</tr>
			<tr>
				<td>Write a message:</td>
				<td><textarea name="message" rows="10" cols="55" class="adroid"><?=@$_SESSION['error']['message'];?></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="Send" value="Send" />
				<input type="submit" name="resit" value="resit"> </td>
				
				<td>&nbsp;</td>
			</tr>
			</table>
		</form>
<?php
include_once("./footer.inc.php");
?>
<link rel="icon" href="images/browertitle5.png" type="image" />
<link rel="shortcut icon" href="images/browertitle5.png" type="image" />