<?php

$Host="localhost";
$User="root";
$Pass="";
$Db="laundry_db";
$conn=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("laundry_db",$conn)or die(mysql_error());

?>