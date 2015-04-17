<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javascript" src="../jquery/user_adm.js" /></script>

</head>
<?php
require_once("import.php");
 $select = $_GET['select'];
 $id = $_GET['id'];

 ?>
<body>
<?php if($select == 1) {
	 ?> 
<table>
<form action="admDao.php?select=1" method="post">
<tr><td>管理员：</td><td><input id="name" name="name"  onblur="namemsg(this)"/><span id="namemsg"></span></td></tr>
<tr><td>密码：</td><td><input id="pwd" name="password" type="password" onblur="pwdmsg(this)"/><span id="pwdmsg"></span></td></tr>
<tr><td>密码：</td><td><input id="pwd1" name="password1" type="password" onblur="pwd1msg(this)"/><span id="pwd1msg"></span></td></tr>
<tr><td>等级：</td><td><select name="degree">
						<option value="1" selected="selected">1</option>
						<option value="2" >2</option>
                        <option value="3" >3</option>
					</select></td></tr>
  <tr><td><input type="submit" value="提交" onclick="return addcheck()"/></td><td><input value="重置" type="reset"/></td></tr>        
  </form>       
</table>


<?php } else {
	 $admDao = new AdministratorDAO;
	$row = $admDao->findbyid($id);
	
	?>
	
<table>
<form action="admDao.php?select=2&id=<?php echo $id; ?>" method="post">
<tr><td>管理员：</td><td><?php echo $row['name']; ?></td></tr>
<tr><td>密码：</td><td><input id="pwd" name="password" type="password" value=<?php echo $row['password']; ?> onblur="pwdmsg(this)"/><span id="pwdmsg"></span></td></tr>
<tr><td>密码：</td><td><input id="pwd1"  name="password1" type="password" value=<?php echo $row['password']; ?> onblur="pwd1msg(this)"/><span id="pwd1msg"></span></td></tr>
<tr><td>等级：</td><td><select name="degree">
						<option value=<?php echo $row['degree']; ?> selected="selected"><?php echo $row['degree']; ?></option>
						<option value="1" >1</option>
						<option value="2" >2</option>
                        <option value="3" >3</option>
					</select></td></tr>
  <tr><td><input type="submit" value="提交" onclick="return updatecheck()"/></td><td><input value="重置" type="reset"/></td></tr>         
  </form>      
</table>
<?php }?>
</body>
</html>