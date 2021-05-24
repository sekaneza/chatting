<?php
	session_start();
	include_once("./header2.inc.php");
	$delete=$_POST['msg_delete'];
	$con=mysql_connect("localhost", "root", "");
	mysql_select_db("imcs");
	$me=$__username.'@localhost.local';
	if(!isset($_GET['mail'])){
		$query="SELECT * FROM message_table WHERE MSGTO='$me' AND RECEIVERFOLDER='draft' ORDER BY DOS DESC";
		$result=mysql_query($query) or die(mysql_error());
		mysql_query("delete from message_table where MSG_ID='$delete'");
	?> 
		<form action="#" method="post">
		<h2 align="center">draft box</h2>
			<table class="mail-form">
				<thead>
					<tr>
						<th style="width:30px;">&nbsp;</th>
						<th style="width:30px;"><img src="images/attach.png" alt="" /></th>
						<th>Subject</th>
						<th style="width:300px;">From</th>
						<th style="width:160px;">Date</th>
						<th style="width:160px;">Delete</th>
					</tr>
				</thead>
				<tbody>
<?php
	while($rows=mysql_fetch_array($result)){
?>
					<tr <?=preg_match("/^[01]1$/",$rows['FLAG'])?"style='font-weight:bold;'":"";?>>
						<th><input type="checkbox" value="" name="" /></th>
						<td style='text-align:center'><a href="./draft.php?mail=<?=md5($rows['MSG_ID']);?>">
							<?=!empty($rows['FILE'])?'<img src="images/attach.png" alt="" />':'';?>
						</a></td>
						<td><a href="./draft.php?mail=<?=md5($rows['MSG_ID']);?>">
							<?=!empty($rows['SUBJECT'])?$rows['SUBJECT']:'No subject';?>
						</a></td>
						<td><a href="./draft.php?mail=<?=md5($rows['MSG_ID']);?>">
							<?=$rows['MSGFROM'];?>@localhost.local
						</a></td>
						<td><a href="./draft.php?mail=<?=md5($rows['MSG_ID']);?>">
							<?=$rows['DOS'];?>
						</a></td>
						<!--<td><a href="deletefromsent.php?MSG_ID=<?php echo $rows['MSG_ID']?>">delete</a>-->
					<td><button type="submit"name="msg_delete"value="<?php echo $rows['MSG_ID'];?>"onclick="return confirm('DO YOU NEED TO DELETE THIS MESSAGE?')">DELETE</BUTTON>
						</a></td>
					</tr>
<?php
	}
?>
				</body>
			</table>
			
		</form>
<?php
	}else{
		$query=mysql_query("SELECT * FROM message_table WHERE md5(MSG_ID)='$_GET[mail]'");
		$result=mysql_fetch_array($query) or die(mysql_error());
		
?>
<table style="width:100%;border-collapse:collapse">
	<tr>
		<th colspan=3>
			<a href="REPRY.PHP?MSG_ID=<?php echo $rows['MSG_ID']?>" ><input type="submit" name="reply" value="reply" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="forward" value="forward" />&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="deletefromsent.php?MSG_ID=<?php echo $rows['MSG_ID']?>" ><input type="submit" name="delete" value="delete" onclick="return confirm('Do you Want to delete this ?')"/></a>&nbsp;&nbsp;&nbsp;&nbsp;
		</th>
	</tr>
	<tr style="font-weight:bold;background-color:rgb(230,255,200)">
		<td style="width:250px;padding:5px;">From: <?=$result['MSGFROM'];?></td>
		<td style="padding:5px 0px;"><?=$result['SUBJECT'];?></td>
		<td style="width:180px;padding:5px 0px;"><?=$result['DOS'];?></td>
	</tr>
	<tr>
		<td colspan=3 style="padding:5px;"><?=$result['BODY'];?><hr/></td>
	</tr>
<?php
	if($result['FILE']){
?>
	<tr>
		<td colspan=3 style="padding:0px 5px;">Download attachement:<a href="./<?=$result['FILE'];?>"><?=$result['FILENAME'];?></a></td>
	</tr>
<?php
	}
?>
</table>
<?php
			$flag=preg_replace("/1$/","0",$result['FLAG']);
			$query=mysql_query("UPDATE message_table SET FLAG='$flag' WHERE md5(MSG_ID)='$_GET[mail]'");
	}
	include_once("./footer.inc.php");
?>
