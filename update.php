<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
#fac
{
	width:100px;
}
#badman{
	width:20px;
	display:none;
	}
</style>

<?php 
 	$up= $_GET['id'];
	$a=mysql_connect('localhost','root','');
	$b=mysql_select_db('my_php');
	$lst=mysql_query('select first_name,last_name,birth_place,nationality,state,town,faculty,department,reg_date,user_id from school
	where user_id='.$up);
	$gba=mysql_fetch_array($lst);
	if($gba)
	{ echo $gba['first_name'];
	}
else{
		echo 'error'.mysql_error();
}
?>
</head>


<body>


<form action="student.php" method="post">
<table width="300" border="1">
  <tr>
    <td colspan="2" align="center">UPDATE USER <input type="text" name="tt" id="badman" value="<?php echo $gba['user_id']; ?>" /></td>
  </tr>
  <tr>
    <td width="207">First Name</td>
    <td width="27"><input type="text" name="first" id="textfield" value="<?php echo $gba['first_name']; ?>"/></td>
  </tr>
  <tr>
    <td>Last name</td>
    <td><input type="text" name="last" id="textfield3"  value="<?php echo $gba['last_name']; ?>" /></td>
  </tr>
  <tr>
    <td>PLace Of Birth</td>
    <td><input type="text" name="bplace" id="textfield4"  value="<?php echo $gba['birth_place']; ?>" /></td>
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
      </select></td>
  </tr>
  <tr>
    <td>State</td>
    <td><input type="text" name="state" id="textfield6"  value="<?php echo $gba['state']; ?>" /></td>
  </tr>
  <tr>
    <td>Town</td>
    <td><input type="text" name="town" id="textfield7"  value="<?php echo $gba['town']; ?>" /></td>
  </tr>
  <tr>
    <td>Faculty</td>
    <td>
    <select name="fac" id="fac" value="<?php echo $gba['faculty']; ?>">
    <option selected ><?php echo $gba['faculty']; ?></option>
    <option>Engineering</option>
     <option>Pure And APlied Sciences</option>
      <option>Agri</option>
    </select></td>
  </tr>
  <tr>
    <td>Deparment</td>
    <td><input type="text" name="dept" id="textfield5"  value="<?php echo $gba['department']; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input  name="upd"  value="UPDATE" type="submit" /> <a href="check.php"> view list</a></td>
  </tr>
</table>
</form>
</body>