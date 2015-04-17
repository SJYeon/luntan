<?php 
 require_once("import.php");
 $select = $_GET['select'];
 $user = new User;
 $userdao = new UserDAO;
 if($select ==1){
	 $user->name = $_POST['name'];
	 $user->password = $_POST['password'];
	 $user->degree = $_POST['degree'];
	 $userdao->add($user);
	 echo "<script type='text/javascript'>location = 'usersShow.php'</script>";
	 }
 if($select == 2){
	 $user->id = $_GET['id'];
	 $user->password = $_POST['password'];
	 $user->degree = $_POST['degree'];
	 $userdao->update($user);
	  echo "<script type='text/javascript'>location = 'usersShow.php'</script>";
	 }
	if($select == 3){

	 $userdao->deletebyid($_GET['id']);
	  echo "<script type='text/javascript'>location = 'usersShow.php'</script>";
	 }
?>