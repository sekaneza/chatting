<?php
	include_once("./header2.inc.php");
?>
	<form action="" method="POST">
		<table border=0 class="sent-form">
			<tr>
				<td>From:</td>
				<td><input type="text" name="name" id="username" /></td>
			</tr>
			<tr> 
				<td>Subject:</td>
				<td><input type="text" name="name" id="text" /></td>
			</tr>
			<tr>
				<td>Reply to:</td>
				<td><input type="text" name="name" id="text" /></td>
			</tr>
			<tr>
				<td>To:</td>
				<td><input type="text" name="name" id="text" /></td>
			</tr>
			<tr>
				<td>Message:</td>
				<td><textarea name="message" rows="10" cols="55"></textarea></td>
			</tr>
		</table>
	</form>
<?php                                    
	include_once("./footer.inc.php");
?>      
