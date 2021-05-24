<?php
	include_once("./whois.php");
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
		<link rel="icon" href="images/browertitle5.png" type="image" />
<link rel="shortcut icon" href="images/browertitle5.png" type="image" />
		<title> INTRANET MAILING CLIENT SYSTEM</title>
	</head>
	<body>
	<div id="logo12"></div>
		<div id="page">
			<header>
				<div id="principal_title">
					<h5 align="center" style="float:left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<?php echo"Today is".date('l F d, Y---H:m:s');?></h5>
					<h5 align="center" style="float:right;">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<img src="images/252231_1002029915278_1941483569_a.jpg"></h5>

				</header>
				<h2 align="center" class="menu_user">welcome <?=$lname." ".$fname;?></h2>
				<div class="username">
				<nav class="menu">
					<ul>
						<li><a href="./compose.php"
<?php
	if($_SERVER['PHP_SELF']=="/compose.php"){
		echo 'class="current-menu"';
	}
?>
							>Compose</a></li>
						<li><a href="./inbox.php"
<?php
	if($_SERVER['PHP_SELF']=="/inbox.php"){
		echo 'class="current-menu"';
	}
?>
							>Inbox</a></li>
						<li><a href="./sentmail.php"
<?php
	if($_SERVER['PHP_SELF']=="/sentmail.php"){
		echo 'class="current-menu"';
	}
?>
							>Sent</a></li>
						<li><a href="./draft.php"
<?php
	if($_SERVER['PHP_SELF']=="/DRAFTS.PHP"){
		echo 'class="current-menu"';
	}
?>
							//Draft</a></li>
						<li><a href="./trash.php"
<?php
	if($_SERVER['PHP_SELF']=="/trash.php"){
		//echo 'class="current-menu"';
	}
?>
							//Trash</a></li>
						<!--<li><a href="./options.php"-->
<?php
	//if($_SERVER['PHP_SELF']=="/javascript:myfunction1();"){
		//echo 'class="current-menu"';
	//}
?>
			                <a href="javascript:myfunction1();(<?php echo $rows['passengerid']?>)" onClick="javascript:myfunction1();">Options</a></li>

						<li><a href="./logout.php">Logout</a></li>
					</ul>
				</nav>
</div>
			<section>
<script>
function myfunction(a)
{
window.open("options.php?idpass="+a,"_blank","top=200,height=600,width=500,left=200");
}
function myfunction1()
{
var a=1;
window.open("options.php?idpass="+a,"_blank","top=200,height=600,width=500,left=200");
}  
</script>
