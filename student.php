<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$idm= $_POST['tt'];
	$frst= $_POST['first'];
	$last= $_POST['last'];
	$bpl= $_POST['bplace'];
	$cntry= $_POST['cont'];
	$stat= $_POST['state'];
	$town= $_POST['town'];
	$faclty= $_POST['fac'];
	$deptm= $_POST['dept'];
	$pnam= $_FILES['img']['name'];
	$pic= 'upload/'.$pnam;
	move_uploaded_file($_FILES['img']['tmp_name'],$pic);  /* move the image into variable pic*/
	$a=mysql_connect('localhost','root','');
	mysql_select_db('my_php');
	if($idm)
	{
		$b=mysql_query("update school 
		set first_name='$frst', last_name='$last', birth_place='$bpl', nationality='$cntry', state='$stat', town='$town', faculty='$faclty', department='$deptm', image='$pic' where user_id= $idm"
		);
	}
	else
	{
	$b=mysql_query("insert into school(first_name,last_name,birth_place,nationality,state,town,faculty,department, image) values('$frst', '$last', '$bpl' , '$cntry', '$stat' ,'$town' ,'$faclty','$deptm', '$pic')");
	$test='jkl';
	}
	if($b && $idm)
	{
		echo '<meta content="0; url=check.php" http-equiv="refresh">';
	}
	else if ($b)
	{echo ' okay';}
	else{
	echo'erro'.mysql_error();
	echo mysql_error();
	}		
?>
</body>
</html>