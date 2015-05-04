 <?php
include 'conn.php';

$statement="insert into user (id,name,password,phone,degree,email,gender) values('".rand(1,500)."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["phone"]."','0','".$_POST["email"]."','".$_POST["gender"]."')";
$sql="select * from user where name='".$_POST["username"]."'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
if($row==null)
 {
  if(!mysql_query($statement))
   {
   die('Error:'.mysql_error());
   }else{
    echo "注册成功";
    echo "<br>";
    echo "用户名：".$_POST["username"];
    echo "<br>";
    echo "密码：".$_POST["password"];
    echo "<br>";
    echo "<a href='login_user.html'><input type='button'value='登陆'></input></a>";
     }
 }else{
 	echo "该用户名已注册";
 	 echo "<br>";
 	echo "<a href='user_register.html'>返回</a>";
 	 }
 

?>

