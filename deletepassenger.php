<?php
$Com_id=$_GET['$Com_id']; 
include("connect.php");
mysql_query("delete from comment where Com_id='".$Com_id."'");
include("view_comment.php");

?>