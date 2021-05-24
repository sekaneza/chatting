<?php
	include_once("./header.inc.php");
?>

<form name="comment" method="post" action="con_comment.php">
<center><IMG SRC="images/comment2.png"></center>
<!--<fieldset id="fieldset"><legend align="center"><b><i>Leave your comment about this Project</i></b></legend>-->
<div id="form">
<table><tr>
<tr><td><b><i>First name:</i></b></td><td><input type="text" name="Firstname" required placeholder="Enter you Firstname" id="input"></td></tr>
<tr><td><b><i>Last name:</i></b></td><td><input type="text" name="Lastname"  placeholder="Enter your Lastname" id="input"></td></tr>
<tr><td><b><i>E-mail:</i></b></td><td><input type="text" name="email" required placeholder="Enter your E-mail" id="input"></td></tr>
</tr>
<tr><td><b><i>Your comment:</i></b></td><td><textarea  value="write your comment here!!!"required title="Leave your comment about this application " name="comment" style="border: 1px solid #008040; margin-left:120px; width:300px; height:100px;"></textarea></td></tr>
<tr><td><input type="submit" value="Send Now" style="border: 1px solid #008040; margin-left:120px;"/></td><td><input type="reset" value="Cancel" style="border: 1px solid #008040; margin-left:120px;"/></td><td></tr>
<br />

</table>
</td></tr>
	 </html>
</div>
<?php
	include_once("./footer.inc.php");
?>
</div>
<link rel="icon" href="images/browertitle5.png" type="image" />
<link rel="shortcut icon" href="images/browertitle5.png" type="image" />
<style>
#form {border:0px solid #009999; width:800px; padding:0px; margin:auto; float:center; height:auto;
box-shadow:0px 0px 2px 0px rgba(89, 67, 24,6,);
  -moz-box-shadow:0px 0px 2px 0px rgba(89, 67, 24,6,); 
  -webkit-box-shadow:0px 0px 2px 0px rgba(89, 67, 24,6,);}
  }
#fieldset { padding:0px; margin:0 auto; width:895px; height:0 auto; border:1px thin #996600; box-shadow:2px -2px 2px #003333; -moz-box-shadow:2px -2px 2px #003333; }
#input {width:200px; height:23px; border:1px solid #008040; margin-left:120px;}
#submit {width:150px; height:90px; border:1px solid #000066; }
</style>