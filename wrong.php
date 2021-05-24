
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
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="link_files/mbcsmbmcp.css" type="text/css" />
<!-- *********************************** pucture body ***************************-->
<div id="page1"></div>
<div id="page_page">
<div class="home"><a href="index.php"><img src="images/home.png" /></a></div>
<!--<div class="wrong_center">-->
<form name="comment" method="post" action="login.php">
<div class="lock"></div>
<!--<div id="body">-->
    <table >
	<tr><td><b><blink><font color="#FF0000"> Wrong username or password please try Again!</font></blink></b></td></tr>

	<tr><td><b>UserName:</b></td>
      <td><input type="text" name="user" onclick="value=''" value="Enter username" id="input"/></td></tr>
  <tr>
      <td><b>Password:</b></td><td>
      <input type="password" name="password" id="input"/>
      </td></tr></table>
    </p>
   <!--<a rel="facebox" href=../booking/recover.php><b><i>Forgot Password?</i></b> </a>-->
    <p>
      <label>
      <input type="submit" name="Submit" id="submit" value="login" />
      </label>
    </p>
	<p>
      <label>
     <!--<a href="index.php"><b><i>Back to Home</i></b></a>-->
      </label>
    </p>
  </form></td></tr></table></p>
</td></tr>
</table>
</form>
</div>
</div>

<!-- ***********************************table right  ***************************-->
<div class="footer">
