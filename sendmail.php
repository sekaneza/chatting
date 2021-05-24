<?php
	session_start();
	if(!isset($_POST['Send']) && !isset($_POST['Save'])) {
		header('location:./compose.php');
	}else {
		if(isset($_POST['Send'])){
			$emails=explode(",",$_POST['email']);
			foreach($emails as $key=>$value){
				if(!preg_match("/[\w\.]{4,}@\w+\.\w{2,5}(\.\w{2,3})?/",$value)){
					$error['email'][]=$key;
				}
			}

			if(empty($_POST['message'])) {
				$error['message']=true;
			}
		
			if($_FILES['datafile']['error']>0){
				if($_FILES['datafile']['error']!=4){
					$error['datafile']=true;
				}
			}elseif($_FILES['datafile']['size']>1048576){
				$error['datafile']=true;
			}
			
			if(!isset($error)) {
				$con=mysql_connect ("localhost", "root", "");
				mysql_select_db ("imcs");
				$mails=explode(",",$_POST['email']);
				foreach($mails as $value){
					if(preg_match("/@localhost\.local$/",$value)){
						$destmail=preg_replace("/@localhost\.local$/","",$value);
						$qr=mysql_query("SELECT USERNAME FROM users_table WHERE USERNAME='$destmail'");
						$from=$_SESSION['login']['username'];
						$filename=$_FILES['datafile']['name'];
						$file=($_FILES['datafile']['name'])?'./upload/'.date(strtotime('Now')).strtolower(substr(strrchr($_FILES['datafile']['name'],'.'),0)):'';
						if(mysql_num_rows($qr)){
							$toreceiver=move_uploaded_file($_FILES['datafile']['tmp_name'],$file);
							if($toreceiver || ($_FILES['datafile']['error']==4)){
								$query="INSERT INTO message_table (MSGFROM, SUBJECT, BODY, MSGTO,  FLAG, DOS, FILE, FILENAME, SENDERFOLDER, RECEIVERFOLDER) VALUES ('$from', '$_POST[text]', '$_POST[message]', '$value', 11, now(), '$file', '$filename', 'Sent', 'Inbox')";
								$result= mysql_query($query) or die (mysql_error());
								$_SESSION['feedback']['sent']=true;
							}else{
								$error['sent'][$value]=true;
							}
						}else{
							$error['check'][$value]=true;
						}
					}else{
						$error['external'][$value]=true;
					}
					if(isset($error)){
						$errorto=$_SESSION['login']['username'].'@localhost.local';
						$errormsg="&gt;&gt;The message could not reach to receiver<br/>";
						$errormsg.="&gt;&gt;The message was sent to ".$_POST['email']." and could not reach to ";
						foreach($error as $value){
							foreach($value as $key=>$set){
								$errormsg.= $key.", ";
							}
						}
						$errormsg.="<br/>&gt;&gt;The content was <i>";
						$errormsg.=$_POST['message']."</i>";
						$query="INSERT INTO message_table (MSGFROM, SUBJECT, BODY, MSGTO,  FLAG, DOS, SENDERFOLDER, RECEIVERFOLDER) VALUES ('admin', 'Message not sent', '$errormsg', '$errorto', 11, now(), 'Sent', 'Inbox','draft')";
						$result= mysql_query($query) or die (mysql_error());
					}
				}
			}else{
				$_SESSION['error']=array(
					"error"=>$error,
					"email"=>$_POST['email'],
					"message"=>$_POST['message']
				);
			}
		}elseif(isset($_POST['Save'])){
			$con=mysql_connect ("localhost", "root", "");
			mysql_select_db ("imcs");
			$sender=$_SESSION['login']['username'];
			$query="INSERT INTO message_table (MSGFROM, SUBJECT, BODY, MSGTO,  FLAG, DOS, SENDERFOLDER, RECEIVERFOLDER) VALUES ('$sender', '$_POST[text]', '$_POST[message]', '$_POST[email]', 11, now(), 'DRAFTS', '')";
			$result= mysql_query($query) or die (mysql_error());
			header("location:./DRAFTS.php");
			exit();
		}
		header("location:./compose.php");
	}
?>