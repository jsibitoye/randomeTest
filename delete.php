<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$mi= $_GET['id'];
mysql_connect('localhost','root','');
 mysql_select_db('my_php');
$y= mysql_query('delete  from school where user_id='.$mi);
echo "<meta http-equiv='refresh' content='0.5; url= check.php'>";
?>
</body>
</html>