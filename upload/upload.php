<?php
  if(is_uploaded_file($_FILES["file"]["tmp_name"]))
  //Returns TRUE if the file named by filename was uploaded via HTTP POST. This is useful to help //ensure that a malicious user hasn't tried to trick the script into working on files upon which //it should not be working--for instance, /etc/passwd.
  {
      move_uploaded_file($_FILES["file"]['tmp_name'], "./".$_FILES["file"]["name"]);
	  //This function checks to ensure that the file designated by filename is a valid upload file //(meaning that it was uploaded via PHP's HTTP POST upload mechanism). If the file is valid, //it will be moved to the filename given by destination
      
  }