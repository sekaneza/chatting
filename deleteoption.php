<?php
			$con = mysql_connect("localhost", "root", "");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("imcs",$con);
			//$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			$x=$_POST['del'];
			$del=mysql_query("DELETE FROM comment where Com_id='$x'");
			if(!$del)
			{
			echo"not deleted".mysql_error();
			}
			else
			{
			header("location:view_comment.php");
}
			mysql_close($con);
		
			?>