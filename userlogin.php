<?php
	session_start();
	if (isset($_POST['login'])){
		$con=mysql_connect('localhost', 'root', '') or die(mysql_error());
		mysql_select_db('imcs') or die(mysql_error());
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$string="SELECT USERNAME, PWD FROM users_table WHERE USERNAME='$username' AND PWD='$password' AND STATUS='1'";
		$query=mysql_query($string) or die(mysql_error());
		if(mysql_num_rows($query)){
			unset($_SESSION['error']['login']);
			$_SESSION['login']=array("username"=>"$username","password"=>"$password");
			header('location:./');
		}else{
			$_SESSION['error']['login']=true;
			header('location:./');
		}
	}else{
		session_destroy();
		header('location:./');
	}
?>
//admin page
<?php 
    
    if (isset($_POST['login'])) {
    
    if ($a_username = "admin" && $a_password = "123") 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $username = stripslashes($username);
        $password = stripslashes($password);
        
        if ($username == $a_username && $password == $a_password)
        {
            session_start();
            $_SESSION['session_logged'] = 'true';
            $_SESSION['session_username'] = $username;
            
            header("Location: admin_area.php");
        }
    }
    
    $username = (isset($_POST['username'])) ? $_POST['username'] : ''; 
    $password = (isset($_POST['password'])) ? $_POST['password'] : ''; 
    
    if($username && $password) {
    
        $connect = mysql_connect("localhost", "root", "root") or die ("Couldn't connect!");
        mysql_select_db("imcs") or die ("Couldn't find the DB");
        
        $query = mysql_query ("SELECT * FROM `users_table` WHERE USERNAME = '$username'");
        
        $numrows = mysql_num_rows($query);
        
        
        if ($numrows != 0){
        
            while ($row = mysql_fetch_array($query)) {
                
                $dbusername = $row['username'];
                $dbpassword = $row['password'];
            }
            
                if ($username == $dbusername && md5($password) == $dbpassword) {
                    
                    header ("Location: user_area.php");
                    $_SESSION['username'] = $username;
                }
                else    
                    $error_msg = "Incorrect password!";
            
        }else
        $error_msg = "That user does not exist!";
        
    }
    else
    $error_msg = "Please enter a username and password!";
}
?>
