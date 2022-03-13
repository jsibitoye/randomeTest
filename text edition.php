<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#mn{
	width:200px;
}
</style>
</head>

<body>
<form action="save.php" method="post">
file name<input type="text" name="fnam" /> <br />
content
<textarea name="txt" id="mn" cols="10" rows="11"></textarea>
<br />
<input type="submit" value="save" />
 </form>
<br />
<form action="edt.php" method="post">
edit<input type="text" name="fnm" /> <br />
<input type="submit" />
</form>
</body>
</html>