<?php 
$con = mysql_connect("localhost", "root", "");
			if (!$con)
			  {
			  die('Could not connect: '.mysql_error());
			  }
			  else
			  {
			mysql_select_db("imcs",$con);
		
			
			$sql = mysql_query("SELECT * FROM comment ");
			?>
<html>
<head>
<title> COMMENTS </title>
<script>
function myfunction(a)
{
window.open("updateintraneta.php?$Com_id="+a,"_blank","top=200,height=600,width=500,left=200");
}
function myfunction1()
{
var a=1;
window.open("addpassenger.php?$Com_id="+a,"_blank","top=200,height=600,width=500,left=200");
}  
</script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="sheet.css">
</head>
<div id="page1">
	<nav class="main-menu">
<ul>
    <li><a class="nav-home" href="admin.php">Logout</a></li>
</ul>
</div>
</div>
<form action="updateintraneta.php" method="post">
<!--<input type="submit" name="addnew" value="addnew" />-->
</form>
<div id="page_page">
<table border="5">
<tr class="tr">
<th colspan="2"><b> OPTIONS</b></td>
<th>Com_id</th>
<th> first name</th>
<th>last name</th>
<th>Email</th>
<th>comment</th>
<th>date & time</th>
</tr>
<?php while($rows=mysql_fetch_array($sql))
{?>
<tr>
<td class="del"> <a href="deletepassenger.php?$Com_id=<?php echo $rows['Com_id']?>" ><font color="#FFFFFF">Delete</font></a></td>
<td class="del"> <a href="edit_places.php?Com_id=<?php echo $rows['Com_id']?>" ><font color="#FFFFFF">update</font></a></td>
<!--<td class="up"> <a href="updateintraneta.php?$com_id=<?php echo $rows['Com_id']?>)"><font color="#FFFFFF">Update</font></a></td>-->
<td> <?php echo $rows['Com_id']?></td>
<td> <?php echo $rows['Firstname']?></td>
<td> <?php echo $rows['Lastname']?></td>
<td> <?php echo $rows['email']?></td>
<td> <?php echo $rows['comment']?></td>
<td> <?php echo $rows['DOS']?></td>
</tr>
<?php }?>
<?php }?>
</table>
</div>
</body>
</html>
<div id="page2"></div>
<div class="footer">
<div class="img_left"></div>
<div class="attent"><p style="width:500px; height:100px; margin:0 auto;
  padding:0px; margin-top:20px; border:0px solid #996600; font-size:29px; border-left:2px solid #000000;">Mr Admin Do not Minimize this Window Without close it or Logout
 <p><b> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Else you may Attacked With Hacker</b></p></p>
  </div>
</div>
<style>
html {
    font-size: 82%;
}

input, select, textarea {
    font-size: 1em;
}

div.item label {
    white-space: nowrap;
}

/* @deprecated */
.nowrap {
    white-space: nowrap;
}
div.nowrap {
    margin: 0;
    padding: 0;
}

/* For printview */
body, table, th, td {
    color:             #000000;
   /* background-color:  #ffffff;*/
}
table {width:800px;
       padding: 0;
	   margin: 0;
	   }

img {
    border: 0;
}

table, th, td {
    border-width:      0.1em;
    border-color:      #000000;
    border-style:      solid;
}

table {
    border-collapse:   collapse;
    border-spacing:    0;
}

th, td {
    padding:           0.2em;
}

th {
    font-weight:       bold;
    background-color:  #006699;
	text-decoration:none;
	text-align:center;
	font-weight:bold;
	color:#FFFFFF;
	border-style:none;
}
.del {background:#006699; color:#FFFFFF; font-size:15px;}
.up {background:#0099FF; color:#FFFFFF; }

.menu-nav ul {
list-style-type:none;
}
.menu-nav {}
.main-menu
{
  display: inline-block;
  width: 900px;
  text-align: right;
  border:0px solid #0099CC;
  float:right;
  color:#FFFFFF;
}
.main-menu ul
{
  list-style-type: none;
}
.main-menu li
{
  display: inline-block;
  margin-right: 15px;
}
.main-menu a
{
  font-size: 1.3em;
  /*color: #181818;*/
  color:#FFFFFF;
  padding-bottom: 3px;
  text-decoration: none;
  font-size:28px;
  font-weight:bold;
}
.main-menu a:hover
{
  color: #760001;
  border-bottom: 3px solid #760001;
}

.menu
{
  display: inline-block;
}
.menu ul
{
  list-style-type: none;
}
.menu li
{
  display: inline-block;
  margin-right: 15px;
}
.menu a
{
  color: blue;
  text-decoration: none;
}
.menu a:hover
{
  color: #760001;
  border-bottom: 3px solid #760001;
}
.current-menu
{
  color: #760001 !important;
  border-bottom: 3px solid #760001;
}

.right-menu
{
  display: inline-block;
}
.right-menu ul
{
  list-style-type: none;
}
.right-menu li
{
  display: inline-block;
  margin-right: 15px;
}
.right-menu a
{
  color: blue;
  text-decoration: none;
}
.right-menu a:hover
{
  color: #760001;
  border-bottom: 3px solid #760001;
}


</style>