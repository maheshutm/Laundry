<?php
session_start();//session start here
if(session_destroy())//the session is destroy it's goto login page
{
	header('location:index.php');
}
else{//otherwise it's in welcom page
	header('location:book.php');
}
?>