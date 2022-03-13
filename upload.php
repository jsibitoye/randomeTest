<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$nm = $_FILES['up']['name'];//name: real directory/ name of d file, and up: d name i gave d file
$tmp= $_FILES['up']['tmp_name'];// tmp_name: temporary loction/name of d file dat is stored on db 
$loc='upload/';// d folder i created in d database
$loc= $loc.basename($nm);// d folder i created slash d name of file
$chk=move_uploaded_file($tmp,$loc);// moving from tmporary location to my created folder
if($chk)
{
	echo 'succesfully uploaded';
}
else {
		'echo you will need to try again';
	}
?>
<body>
</body>
</html>