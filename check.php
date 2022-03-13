<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
#m{
	margin:auto;
	background:url(img01.jpg) repeat-x;
	height:900px;
	width:1000px;
}
</style>
</head>
<body>
<div id="m">
<?php
mysql_connect('localhost','root','');
mysql_select_db('my_php');
$a= mysql_query('select * from school');
echo '<table><tr> <th> FIRST NAME </th> <th>LAST NAME <th>PLACE OF BITH</th> <th>NATIONALITY</th> <th>STATE</th> <th>TOWN</th> <th>FACULTY</th> <th> DEPARTMENT</th> <th>REGISTRATION DATE</th> <th>USER ID</th><th> IMAGE</th> <th>TABLE TOOLS</th> </tr>';
while($b= mysql_fetch_array($a) )
{
	echo "<tr><td>".$b['first_name']."</td><td>".$b['last_name']."</td><td>".$b['birth_place']."</td><td>".$b['nationality']."</td><td>".$b['state']."</td><td>".$b['town']."</td><td>".$b['faculty']."</td><td>".$b['department']."</td><td>".$b['reg_date']."</td><td>".$b['user_id']."</td>
	<td><img height='50px' width='50px' src='".$b['Image']."'></td>
	<td>"
	."<a href=delete.php?id=".$b['user_id']."> DELETE </a> <a href=update.php?id=".$b['user_id'].">UPDATE</a></td></tr>";
}
echo '</table>';
?>
</div>
</body>
</html>