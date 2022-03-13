<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$user= $_POST['t1'];
$pword= $_POST['t2'];
$con= mysql_connect('localhost','root','');
mysql_select_db('my_php');
$q=mysql_query("insert into users_a (username,password) values('$user', '$pword')");
if ($q)
{ 
	echo ' it okay';
}
else
{ 
	echo 'Error'.mysql_error();
}
mysql_close($con)
?>
</body>
</html>