<?php
	include_once("./header2.inc.php");
?>

<?php
	if(isset($_SESSION['login']['new'])){
?>
<div class="box_new">YOU ARE NEW USER</div>
<?php
	}else{
?>
<div class="box_exist">YOU ARE EXISTING USER</div>
<?php
	}
?>
<?php
	include_once("./footer.inc.php");
?>

		<!--<link rel="icon" href="images/browertitle5.png" type="image" />
<link rel="shortcut icon" href="images/browertitle5.png" type="image" />-->