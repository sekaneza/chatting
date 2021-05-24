<?php
$MSG_ID=$_GET['$MSG_ID']; 
include("connect.php");
mysql_query("delete from message_table where MSG_ID='".$MSG_ID."'");
include("sentmail.php");

?>