<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php 
	require_once("mysql_connect.php");
	class AdministratorDAO{
		function findbyname($name){
			$sql = "select * from administrator where name ='$name'";;
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			return $row;
			}
		function findall(){
			$sql = "select * from administrator";
			$result = mysql_query($sql);

			return $result;
			}
		
		function findbyid($id){
			$sql = "select * from administrator where id ='$id'";
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			return $row;
			}
		function deletebyid($id){
			$sql = "delete from administrator where id ='$id'";
			mysql_query($sql);
	
			}
		function add($adm){
			$sql = "insert into administrator(degree, name, password) values('$adm->degree', '$adm->name', '$adm->password')";
			mysql_query($sql);
			}
		function update($adm){
			$sql = "update administrator set password = '$adm->password', degree = '$adm->degree' where id = '$adm->id'";
			mysql_query($sql);
			}			
	}
	class UserDAO{
		function findbyname($name){
			$sql = "select * from user where name ='$name'";;
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			return $row;
			}
		function findall(){
			$sql = "select * from user";
			$result = mysql_query($sql);

			return $result;
			}
		
		function findbyid($id){
			$sql = "select * from user where id ='$id'";
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			return $row;
			}
		function deletebyid($id){
			$sql = "delete from user where id ='$id'";
			mysql_query($sql);
	
			}
		function add($user){
			$sql = "insert into user(degree, name, password) values('$user->degree', '$user->name', '$user->password')";
			mysql_query($sql);
			}
		function update($user){
			$sql = "update user set password = '$user->password', degree = '$user->degree' where id = '$user->id'";
			mysql_query($sql);
			}			
	}
	class InfoDAO{
		
		function findall(){
			$sql = "select * from information";
			$result = mysql_query($sql);

			return $result;
			}
		
		function findbyid($id){
			$sql = "select * from information where id ='$id'";
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			return $row;
			}
		function deletebyid($id){
			$sql = "delete from information where id ='$id'";
			mysql_query($sql);
	
			}
		function add($info){
			$sql = "insert into information(title, author, content, time, picture, class, data) values('$info->title', '$info->author', '$info->content', '$info->tim', '$info->picture', '$info->cls', '$info->data')";
			mysql_query($sql);
			}
		function update($info){
			
			$sql = "update information set title = '$info->title', author ='$info->author', content = '$info->content', time = '$info->tim', picture = '$info->picture', class='$info->cls', data = '$info->data' where id = '$info->id'";
			mysql_query($sql);
			}			
	}
?>
<body>
</body>
</html>
