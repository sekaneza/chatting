<?php
	session_start();
	include_once("./header2.inc.php");
	$con=mysql_connect("localhost", "root", "");
	mysql_select_db("imcs");
	$me=$__username.'@localhost.local';
	$query="SELECT * FROM message_table WHERE MSGTO='$me' AND RECEIVERFOLDER='Trash' ORDER BY DOS DESC";
	$result=mysql_query($query) or die(mysql_error());
	if(!isset($_GET['mail'])){
?>
		<form action="#" method="post">
		<h2 align="center">Trash</h2>
			<table class="mail-form">
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th><img src="images/attach.png" alt="" /></th>
						<th>Subject</th>
						<th>From</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
<?php
	while($rows=mysql_fetch_array($result)){
?>
					<tr <?=preg_match("/^[01]1$/",$rows['FLAG'])?"style='font-weight:bold;'":"";?>>
						<th><input type="checkbox" value="" name="" /></th>
						<td style='text-align:center'><a href="./sentmail.php?mail=<?=md5($rows['MSG_ID']);?>">
							<?=!empty($rows['FILE'])?'<img src="images/attach.png" alt="" />':'';?>
						</a></td>
						<td><a href="./sentmail.php?mail=<?=md5($rows['MSG_ID']);?>">
							<?=!empty($rows['SUBJECT'])?$rows['SUBJECT']:'No subject';?>
						</a></td>
						<td><a href="./sentmail.php?mail=<?=md5($rows['MSG_ID']);?>">
							<?=$rows['MSGFROM'];?>@localhost.local
						</a></td>
						<td><a href="./sentmail.php?mail=<?=md5($rows['MSG_ID']);?>">
							<?=$rows['DOS'];?>
						</a></td>
					</tr>
<?php
	}
?>
				</body>
			</table>
			
		</form>
<?php
	}
	include_once("./footer.inc.php");
?>
