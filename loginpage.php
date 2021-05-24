<?php
	session_start();
	include_once("./header.inc.php");
?>

	<h1 align="center"><b><!--<font face="Georgia, Times New Roman, Times, serif" color="#0000FF">--><!--welcome to our Registration form!</font></b>--><img src="images/comment2.png"></h1>
	<form action="register.php" method="POST">
		<table border=0 class="input-form">
		
		<tr>
		<th colspan=2 style="color:#009999"><b style="">&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;CREATE NEW ACCOUNT<!--<BLINk>CREATE NEW ACCOUNT</blink></font></b>--></th>
		</tr>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<body bgcolor="#006699">
		
		<tr>
				<td><label for="fname">First name:</label></td>
				<td><input type="text" name="fname" required id="fname" class="adroid2" value="<?=@$_SESSION['error'][fname];?>" require/>
				<td>
<?php
	if(isset($_SESSION['error']['error']['fname']))
		echo "Invalid name";
	else 
		echo "&nbsp;";
?>
				</td>
			</tr>
			<tr>
				<td><label for="lname">Last name:</label></td>
				<td><input type="text" name="lname"required  id="lname" class="adroid2" value="<?=@$_SESSION['error'][lname];?>"/></td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><label for="address">Address:</label></td>
				<td><input type="text" name="address" required  id="address" class="adroid2" value="<?=@$_SESSION['error'][address];?>"/></td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Birth date:</td>
				<td>
					<select name="day" style="width:33%" required  class="adroid2" >
						<option value="">Day</option>
<?php
	for($i=1;$i<=31;$i++){
?>
						<option value="<?=$i;?>" <?php if(@$_SESSION['error']['day']==$i) echo'selected';?>><?=$i;?></option>
<?php
	}
?>
					</select><select required  name="month" style="width:33%">
						<option value="">Month</option>
<?php
	for($i=1;$i<=12;$i++){
?>
						<option required  value="<?=$i;?>" <?php if(@$_SESSION['error']['month']==$i) echo'selected';?>><?=$i;?></option>
<?php
	}
?>
					</select><select required  name="year" style="width:34%">
						<option required  value="">Year</option>
<?php
	for($i=2000;$i>=1950;$i--){
?>
						<option required value="<?=$i;?>" <?php if(@$_SESSION['error']['year']==$i) echo'selected';?>><?=$i;?></option>
<?php
	}
?>
					</select>
				</td>
				<td>
<?php
	if(isset($_SESSION['error']['error']['date']))
		echo "Invalid date";
	else 
		echo "&nbsp;";
?>
				</td>
			</tr>
			<tr>
		    <td>Sex:</td>
				<td><select required  class="adroid2" name="sex" style="width:100%">
				      <option value="">Sex</option>
				      <option value="M" <?php if(@$_SESSION['error']['sex']=='M') echo'selected';?>>Male</option>
				      <option value="F" <?php if(@$_SESSION['error']['sex']=='F') echo'selected';?>>Female</option>
		          </select>
		      </td>
				<td>
<?php
	if(isset($_SESSION['error']['error']['sex']))
		echo "Sex is empty";
	else 
		echo "&nbsp;";
?>
				</td>
         </tr>
         <tr>
          <td>Telephone no:</td>
		     <td><input type="text" required class="adroid2" name="phonenumber" value="<?=@$_SESSION['error']['phone']?$_SESSION['error']['phone']:'+250-';?>"/></td>
				<td>
<?php
	if(isset($_SESSION['error']['error']['phone']))
		echo "Invalid phone number";
	if(isset($_SESSION['error']['error']['phonenumber']))
		echo "Phone number already registered";
	else 
		echo "&nbsp;";
?>
				</td>
		   </tr>
		   <tr>
		    <td>create username:</td>
	        <td><input type="text" name="username" required id="username" class="adroid2" value="<?=@$_SESSION['error'][username];?>" autocomplete="off" style="width:50%"/> @localhost.local</td>
				<td>
<?php
	if(isset($_SESSION['error']['error']['username']))
		echo "Invalid username";
	elseif(isset($_SESSION['error']['error']['USERNAME']))
		echo "username already registered";
	else 
		echo "&nbsp;";
?>
				</td>
         </tr>
         <tr>
          <td>create password:</td>
		     <td><input type="password" name="password" required  id="password" class="adroid2" /></td>
				<td>
<?php
	if(isset($_SESSION['error']['error']['password']))
		echo "Invalid password";
	else 
		echo "&nbsp;";
?>
				</td>
			</tr>
			<tr>
			 <td>confirm password:</td>
		     <td><input type="password" name="passwordagain" required id="password" class="adroid2" /></td>
				<td>
<?php
	if(isset($_SESSION['error']['error']['missmach']))
		echo "Password missmach";
	else 
		echo "&nbsp;";
?>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Register" /></td>
				<td>&nbsp;</td>
		   </tr>
		</table>
	</form>
	</color>
	
<?php
	include_once("./footer.inc.php");
?>   
