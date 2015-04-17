// JavaScript Document
function addcheck(){
	var name = document.getElementById('name').value;
	if(name == "" || name == null)
	{
		document.getElementById('namemsg').innerHTML = "账号不能为空！";
		
		return false;
	
	}
	return updatecheck();
		
}
function updatecheck(){
	var pwd = document.getElementById('pwd').value;
	var pwd1 = document.getElementById('pwd1').value;
	if(pwd == "" || pwd == null){
		document.getElementById('pwdmsg').innerHTML = "密码不能为空！";
		return false;
	}
	else
	{
		if(pwd1 == "" || pwd1 == null)
		{
			document.getElementById('pwd1msg').innerHTML = "确认密码不能为空！";
			return false;
		}
		else
		{
			if(pwd !== pwd1){
				document.getElementById('pwd1msg').innerHTML = "两次输入的密码不一样！";
				return false;
			}
		}
	}
}
function namemsg(doc){
	if(doc.value != null || doc.value != "")
	{document.getElementById('namemsg').innerHTML = "";}
}
function pwdmsg(doc){
	if(doc.value != null || doc.value != "")
	{document.getElementById('pwdmsg').innerHTML = "";}
}
function pwd1msg(doc){
	if(doc.value != null || doc.value != "")
	{
		document.getElementById('pwd1msg').innerHTML = "";
	}
	var pwd = document.getElementById('pwd').value;
	if(pwd != doc.value)
	{
		document.getElementById('pwd1msg').innerHTML = "两次输入的密码不一样！";
	}
	else{
		
		document.getElementById('pwd1msg').innerHTML = "";
	}
}