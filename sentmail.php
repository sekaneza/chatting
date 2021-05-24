<?php
	session_start();
	include_once("./header2.inc.php");
	$con=mysql_connect("localhost", "root", "");
	mysql_select_db("imcs");
	$me=$__username;
	$query="SELECT * FROM message_table WHERE MSGFROM='$me' AND SENDERFOLDER='Sent' ORDER BY DOS DESC";
	$result=mysql_query($query) or die(mysql_error());
	if(!isset($_GET['mail'])){
		//mysql_query("delete from message_table where MSG_ID='$delete'");
?>
		<form action="#" method="post">
		<h2 align="center">Sent messages</h2>
			<table class="mail-form">
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th><img src="images/attach.png" alt="" /></th>
						<th>Subject</th>
						<th>To</th>
						<th>Date</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
<?php
	while($rows=mysql_fetch_array($result))
	{
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
							<?=$rows['MSGTO'];?>@localhost.local
						</a></td>
						<td><a href="./sentmail.php?mail=<?=md5($rows['MSG_ID']);?>">
							<?=$rows['DOS'];?>
						</a></td>
						                  
					<!--<td><button type="submit"name="msg_delete"value="<?php echo $rows['MSG_ID'];?>"onclick="return confirm('DO YOU WANT TO DELETE THIS MESSAGE?')">DELETE</BUTTON>
						</a></td>-->
			<td> <a class="delete_button" href="deletesend.php?$MSG_ID=<?php echo $rows['MSG_ID']?>" ><font color="#FFFFFF">DELETE</font></a></td>

											

					</tr>
<?php
	}
?>
				</t><body>
			</table>
			<!--<a href="REPRY.PHP?MSG_ID=<?$rows['MSG_ID'];?>">
			<input type="button" name="reply" value="reply" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="FORWARD.PHP?MSG_ID=<?$rows['MSG_ID'];?>">
				<input type="button" name="forward" value="forward" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
			<!--<input type="submit" name="forward" value="forward" />&nbsp;&nbsp;&nbsp;&nbsp;-->
			<!--<input type="submit" name="delete" value="Delete" />&nbsp;&nbsp;&nbsp;&nbsp;-->
					<!--<a href="deletefromsent.php?MSG_ID=<?php echo $rows['MSG_ID']?>" ><input type="submit" name="delete" value="delete" onclick="return confirm('Do you Want to delete this ?')"/></a>&nbsp;&nbsp;&nbsp;&nbsp;-->
		</th>
					</tr>
			<!--<input type="submit" name="save as draft" value="Save as draft" />-->
			
		</form>
<?php
	}
	include_once("./footer.inc.php");
?>
<link rel="icon" href="images/browertitle5.png" type="image" />
<link rel="shortcut icon" href="images/browertitle5.png" type="image" />