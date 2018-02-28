<?php
    $con=mysql_connect("localhost","root","");
    if(!$con)
    {
	  die("could not connect".mysql_error());
	}
	$string="create database carHire";
	mysql_query($string,$con);
	
	//create table
	mysql_select_db("carHire",$con);
	$sql="CREATE TABLE clients 
	(
	    Email varchar(15),
	    password varchar(15),
	    FirstName varchar(15),
	    LastName varchar(15),
	    Age varchar(10),
	    Phone varchar(10),
	    age int,
	    address varchar(25),
	    zipCode int,
	    Gender char,
	   
	)";
if(mysql_query($sql,$con))
	    echo "table created";
else
	echo "error creating table".mysql_error();   
	
mysql_close($con);
?>	