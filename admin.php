<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin login</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="link_files/mbcsmbmcp.css" type="text/css" />
 <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <!--sa validate from-->
<script type="text/javascript">
function validateForm()
{

var y=document.forms["login"]["user"].value;
var a=document.forms["login"]["password"].value;
if ((y==null || y==""))
  {
  alert("Pleas enter your Username and Password !");
  return false;
  }
  if ((a==null || a==""))
  {
  alert("Pleas enter your password to Login");
  return false;
  }
}
</script>
<link rel="stylesheet" type="text/css" href="sheetone.css">
<link rel="icon" href="images/browertitle5.png" type="image" />
<link rel="shortcut icon" href="images/browertitle5.png" type="image" />
<!--<link rel="stylesheet" type="text/css" href="style.css">

<!-- *********************************** login form***************************-->
<div class="logo"><p style="float:left; font-size:18px; text-shadow:-2px -2px -2px -2px #006699; color:#006699;">Welcome  Admin!</p></div>
<div id="page1"></div>
<div id="page_page">
<div class="home"><a href="index.php"><img src="images/home.png" /></a></div>
<form name="comment" method="post" action="login.php">
<div id="body"><table border="0"><tr><td>
<!--<div id="form">-->
    <table><tr><td id="label_l"><b>UserName:</b></td></br>
      <td><input type="text" name="user" onclick="value=''" value="Enter username" id="input"/></td></tr>
  <tr>
      <td id="label_l"><b>Password:</b></td><td></br>
      <input type="password" name="password" id="input"/></td></tr></table>
    </p>
	   <p><input type="submit" name="Submit" id="submit" value="login" /></p></div>
   <div class="line"><a rel="facebox" href=../booking/recover.php><b><i><input type="submit" name="submit" value="Forgot Password?"  id="submit2"></i></b> </a>

</td></tr>
</table>
</form>
</div>
<div id="page2"></div>
<!-- ***********************************table right  ***************************-->
<!-- *********************************** End of table right ***************************-->
<div class="footer">
<!--<div class="img_left"></div>
<div class="attent"><p>Mr Admin Do not Minimize this Window Without close it or Logout</p></div>
</div>-->
<style>
 .logo {width:800px; padding:0px; margin:0 auto; height:30px; border:0px solid #000033; background:; margin-bottom:20px;}
</style>