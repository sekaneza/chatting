<?php
$idpass=$_GET['MSG_ID']; 
$con=mysql_connect("localhost", "root", "");
mysql_select_db("imcs");
$me=$__username.'@localhost.local';
mysql_query("delete from  message_table where MSG_ID='".MSG_ID."' limit 0,1");
include("sentmail.php");
?>