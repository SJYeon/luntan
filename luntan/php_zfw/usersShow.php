<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php 
	require_once("import.php");
	$userDao = new UserDAO;
	$result= $userDao->findall();
?>
<body>
<table>
	<tr><td>id</td><td>用户名</td><td>权限等级</td><td></td><td><a href="userEdit.php?select=1">添加</a></td></tr>
    <?php
	while($row = mysql_fetch_array($result) ){
	 ?>
    <tr><td><?php echo $row['id'];?></td><td><?php echo $row['name'];?></td><td><?php echo $row['degree'];?></td><td><a href="userEdit.php?select=2&id=<?php echo $row['id']; ?>">修改</a></td><td><a href="userDao.php?select=3&id=<?php echo $row['id']; ?>">删除</a></td></tr>
    <?php } ?>
    
</table>
</body>
</html>