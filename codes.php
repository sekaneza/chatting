    <html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    </head>
    <body>
    <FORM METHOD="post" ACTION="add_file.php" ENCTYPE="multipart/form-data">
    <INPUT TYPE="hidden" NAME="MAX_FILE_SIZE" VALUE="1000000">
    <INPUT TYPE="hidden" NAME="action" VALUE="Upload">
     <TABLE BORDER="1" cellspacing="1" cellpadding="3">
      <TR>
       <TD>Subject: </TD>
       <TD><input name="subjects" size = "66%" /></TD>
      </TR>
     
      <TR>
       <TD>Client Name: </TD>
       <TD><input name="clientname" size = "35%" id="clientname" /></TD>
      </TR>
     
      <TR>
       <TD>File: </TD>
       <TD><INPUT type="file" NAME="uploaded_file"></TD>
      </TR>
      <TR>
       <TD COLSPAN="2"><INPUT TYPE="submit" VALUE="Upload"></TD>
      </TR>
     </TABLE>
    </FORM>
     
     
     
    <?php
    # Check if a file has been uploaded
    if(isset($_FILES['uploaded_file'])) 
    {
        # Make sure the file was sent without errors
        if($_FILES['uploaded_file']['error'] == 0) 
        {
            # Connect to the database
            $dbLink = mysql_connect("localhost", "root", "777") or die (mysql_error());
            mysql_select_db("filestorage", $dbLink) or die(mysql_error());
     
            /*if(mysql_connect()) {
                die("MySQL connection failed: ". mysql_error());
            }*/
     
            # Gather all required data
            $name = mysql_real_escape_string($_FILES['uploaded_file']['name']);
            $mime = mysql_real_escape_string($_FILES['uploaded_file']['type']);
            $size = $_FILES['uploaded_file']['size'];
            $data = mysql_real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
     
            # Create the SQL query
            $query = "
                INSERT INTO file_upload (
                    FileName, FileMime, FileSize, FileData, subjects, clientname, Created
                )
                VALUES (
                    '{$name}', '{$mime}', {$size}, '{$data}', '{$subjects}','{$clientname}', NOW()
                )";
     
            # Execute the query
            $result = mysql_query($query, $dbLink);
     
            # Check if it was successfull
            if($result) 
            {
                echo "Success! Your file was successfully added!";
            }
            else 
            {
                echo "Error! Failed to insert the file";
                echo "<pre>". mysql_error($dbLink) ."</pre>";
            }
        }
        else 
        {
            echo "Error! 
                    An error accured while the file was being uploaded. 
                    Error code: ". $_FILES['uploaded_file']['error'];
        }
     
        # Close the mysql connection
        mysql_close($dbLink);
    }
     
    # Echo a link back to the mail page
     
    echo "<p><a href='list.php'>Click here to see all Files.</a></p>"; 
    ?>
    </body>
    </html>
     

