<?php

define("server","localhost",true);
define("user","root",true);
define("password","",true);
define("database","gym",true);

$cid=mysqli_connect(server,user,password,database) or die("connection failed");
function iud($cid,$query)
{
		
	$result=mysqli_query($cid,$query);
return $n=mysqli_affected_rows($cid);
}

function select($query)
{
	global $cid;
	return $result=mysqli_query($cid,$query);
	
}













?>