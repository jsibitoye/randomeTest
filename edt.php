<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<?php
	$nm=$_POST['fnm'];
	$mt= fopen($nm,'r');
	$d= fread($mt,filesize($nm) );
	fclose($mt);
?>
<style type="text/css">
#kk{
	display:none;
}
#mn{
	width:200px;
}
</style>
</head>


<body>
<form action="save.php" method="post">
file name: <?php echo $nm; ?>
<br />
<textarea id="mn" name="txt" id="mn" cols="10" rows="11">
<?php echo $d ?>
</textarea> <br />
<input type="submit" />
<input id="kk" type="text" value="<?php echo $nm ?>" name="fnam" />
</form>
</body>
</html>