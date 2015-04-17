<?php session_start(); 
require_once("import.php");
 $select = $_GET['select'];
 $adm = new Administrator;
 $admdao = new AdministratorDAO;
 if($select ==1){
	 $adm->name = $_POST['name'];
	 $adm->password = $_POST['password'];
	 $adm->degree = $_POST['degree'];
	 $admdao->add($adm);
	 echo "<script type='text/javascript'>location = 'admShow.php'</script>";
	 }
 if($select == 2){
	$adm->id = $_GET['id'];
	 $adm->password = $_POST['password'];
	 $adm->degree = $_POST['degree'];
	  $admdao->update($adm);
	  echo "<script type='text/javascript'>location = 'admShow.php'</script>";
	 }
	if($select == 3){

	  $admdao->deletebyid($_GET['id']);
	  echo "<script type='text/javascript'>location = 'admShow.php'</script>";
	 }
  ?>
