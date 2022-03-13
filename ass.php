<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style type="text/css">
#fac
{
	width:100px;
}
</style>
<body>
<form action="student.php" enctype="multipart/form-data" method="post">
<table width="300" border="1">
  <tr>
    <td colspan="2" align="center">REGISTRATION FORM</td>
  </tr>
  <tr>
    <td width="207">First Name</td>
    <td width="27"><input type="text" name="first" id="textfield" /></td>
  </tr>
  <tr>
    <td>Last name</td>
    <td><input type="text" name="last" id="textfield3" /></td>
  </tr>
  <tr>
    <td>PLace Of Birth</td>
    <td><input type="text" name="bplace" id="textfield4" /></td>
  </tr>
  <tr>
    <td>Nationality</td>
    <td><select name="cont" id="cont"> 
      <option >America</option>
      <option>Brazil</option>
      <option>Congo</option>
      <option>China</option>
      <option>Italy</option>
      <option>Kongo</option>
      <option>Niger</option>
      <option>Nigeria</option>
      <option>Zambia</option>
      <option selected> Select</option>
      </select></td>
  </tr>
  <tr>
    <td>State</td>
    <td><input type="text" name="state" id="textfield6" /></td>
  </tr>
  <tr>
    <td>Town</td>
    <td><input type="text" name="town" id="textfield7" /></td>
  </tr>
  <tr>
    <td>Faculty</td>
    <td>
    <select name="fac" id="fac">
    <option>Engineering</option>
     <option>Pure And APlied Sciences</option>
      <option>Agri</option>
       <option selected> Select</option>
    </select></td>
  </tr>
  <tr>
    <td>Deparment</td>
    <td><input type="text" name="dept" id="textfield5" /></td>
  </tr>
  <tr>
  <td>
  Image
  <td><input type="file" name="img" /></td>
  <tr>
    <td colspan="2" align="center"><input type="submit" /> <a href="check.php"> view list</a></td>
  </tr>
</table>
</form>
</body>
</html>