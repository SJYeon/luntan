<?php
session_start(); ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
*{margin:0;
	border:0;
	padding:0;}

#top{width:100%;
	height:20%;
	position:relative;
	
	}
#left{ width:25%;
	top:20%;
	height:80%;
	border-top:#CCC double 1px;
	border-right:#CCC double 1px;
	position:absolute;
	}
#right{width:75%;
	height:80%;
	left:25%;
	top:20%;
	border-top:#CCC double 1px;
	position:absolute;
	
}
</style>
</head>
<?php 
	require_once("import.php");
	$name = $_POST['name'];
	$password = $_POST['password'];
	$admdao = new AdministratorDAO;
	
	
	$row = $admdao->findbyname($name);
	
	if($password == $row['password']){
		
		$_SESSION["manager"] = $name;
?>
<body>
<iframe id="top" src="top.php"></iframe>
<iframe id="left" src="left.php"></iframe>
<iframe id="right" src="right.php"></iframe>
<!--
<div id="top">欢迎</div>
<div id="left">
<p><a href="users.php" target="right">用户管理</a></p>
<p><a href="#">管理员管理</a></p>
</div>
<div id="right">asdffffffffffdsadfs</div>


-->
</body>
<?php }
else{
	echo "<script type='text/javascript'> alert('登录失败！');location = 'Login_houtai.php'</script>";
	
}
?> 
</html>