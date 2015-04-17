<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javascript">
function htlogcheck(){
	var name = document.getElementById('name').value;
	var pwd = document.getElementById('password').value;
	if(name == "" || name == null){
		document.getElementById('namemsg').innerHTML = "请输入账号！";
		return false;
		}
	if(pwd == "" || pwd == null){
		document.getElementById('pwdmsg').innerHTML = "请输入密码！";
		return false;
		}
	}
function namemsg(name){
	if(name.value != null && name.value != ""){
		document.getElementById('namemsg').innerHTML = "";
		}
	}
function pwdmsg(pwd){
	if(pwd.value != null && pwd.value != ""){
		document.getElementById('pwdmsg').innerHTML = "";
		}
	}
</script>
</head>

<body>
<form method="post" action="index_houtai.php" >
<p>管理员:<input id="name" name="name" onblur="namemsg(this)"/><span id="namemsg"></span></p>
<p>密&nbsp;&nbsp;码:<input id="password" name="password" type="password"/><span id="pwdmsg"></span></p>
<p><input type="submit" value="登陆" onclick="return htlogcheck()"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="重置"/></p>
<p><span id="alert"></span></p>

</form>
</body>


</html>