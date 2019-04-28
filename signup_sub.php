<?php
include("class/users.php");
$register=new users;
extract($_POST);
$query="insert into signup values ('','$n','$e','$p')";
if($register->signup($query))
{
	 $register->url("index.php?run=success");
	 
}


?> 