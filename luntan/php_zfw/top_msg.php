<?php
session_start();
if(!isset($_SESSION["manager"]) or $_SESSION["manager"] = NULL)
{
	echo "<script type='text/javascript' >alert('用户信息失效或者未登陆，请重新登陆！');location = 'login_houtai.php'</script>";
	}
require_once("import.php");
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
</body>
</html>
