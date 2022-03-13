<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>



<style type="text/css">
#me
{
	margin:auto;
	width:400px;
	overflow:scroll;
	height:400px;
	border: 1px solid red;
}
</style>

</head>

<body>
<div id="me">

<?php 
$a= fopen('php_tutorial.pdf','r');
echo fread($a, filesize('php_tutorial.pdf') );
fclose($a);
?>

</div>

</body>
</html>