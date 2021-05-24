<?php
	include_once("./header.inc.php");
?>
		<link rel="stylesheet" href="style.css" />
<!--<div id="border">-->
			<article>

			<h2 align="center" id="text"><blink>Welcome to our intranet mail client system</blink></h2>
			<div class="paragraph"><h4><p>Our intranet mail client system is a private computer network that uses Internet Protocol technology to securely share any part of an organization's information or network operating system within that organization.</p> 
			<p>The term Intranet is used in contrast to internet, a network between organizations, and instead refers to a network within an organization.</p> 
			<p>Sometimes the term refers only to the organization's internal website, but may be a more extensive part of the organization's information technology infrastructure.</p></h4></div>
			
			</article>

			<aside>
			<img src="images/login3.png">
			<center><h1>login</h1>
			<body>
			<table border="0">
			<form action="userlogin.php" method="POST" >
			<p>
			<tr><td><label for="username">Username:</label></td>
			<td><input type="text" name="username" id="username" class="login_form_input"/> </br></td></tr>
            <tr><td><label for="password">Password:</label></td>
			<td><input type="password" name="password" id="password" class="login_form_input"/></br></td></tr></table>
			&nbsp; &nbsp;&nbsp;<input type="submit" name="login" value="Sign in" class="login_submit"/>
			</p>

			</form>
			
			<p>
<?php
	if(!isset($_SESSION['error']['login']))
		echo "This is where you can login !!!! .";
	else
		echo "<span style='color:red;box-shadow:0px 0px 8px 0px #FF0000;
-moz-box-shadow:0px 0px 8px 0px #FF0000;
-webkit-box-shadow:0px 0px 8px 0px #FF0000;
 background:#FFFFFF; padding:4px 10px 4px 4px;
border:1px solid red; float:left;width:220px'>Invalid username/password</span>";
?>
			</p>

			</aside>
<?php
	include_once("./footer.inc.php");
?>
