<?php session_start();
	require_once("import.php");
	$select = $_GET['select'];
	$infodao = new InfoDAO();
	$info= new Information();
	
	
	if($select == 1){
		$info->title = $_POST['title'];
		$info->content =$_POST['content'];
		$info->cls = $_POST['class'];
		$pic = $_FILES['pic'];
		$file = $_FILES['data'];
		$infofile = $file['tmp_name'];
		$infoname = $file['name'];
		$imgfile = $pic['tmp_name'];
		$imgname = $pic['name'];
		$time = date("YmjHis");
		$info->tim = $time;
		$pictype = $pic['type'];
		//echo "<script type='text/javascript'>alert('$imgname');
		if($imgname!=""){
			$imgtype = $pic['type'];
			
			
			switch($imgtype){
			case "image/bmp": $type = ".bmp";break;
			case "image/jpg": $type = ".jpg";break;
			case "image/png": $type = ".png";break;
			case "image/jpeg": $type = ".jpeg";break;
			default: echo "<script type='text/javascript'>alert('不支持该类型的图片'); location = 'infoShow.php?select=1'</script>";
					}
			$imgpath = "../image/"."info".$time.mt_rand(10000,99999).$type;
			move_uploaded_file($imgfile, $imgpath);
			$info->picture = $imgpath;
		}
			$infopath = "../file/"."info".$time.mt_rand(10000,99999).$infoname;
			move_uploaded_file($infofile, $infopath);
			$info->data = $infopath;
			$info->author = $_SESSION["manager"];
			$infodao->add($info);
			
	}
	if($select == 2){
		$id = $_GET['id'];
		$info->id = $id;
		$info->title = $_POST['title'];
		$info->content =$_POST['content'];
		$info->cls = $_POST['class'];
		$pic = $_FILES['pic'];
		$file = $_FILES['data'];
		$infofile = $file['tmp_name'];
		$infoname = $file['name'];
		$imgfile = $pic['tmp_name'];
		$imgname = $pic['name'];
		$time = date("YmjHis");
		$info->tim = $time;
		$info->author = $_SESSION["manager"];
		$pictype = $pic['type'];
		
		if($imgname!=""){
			$id = $_GET['id'];
			$row = $infodao->findbyid($id);
			if($row['picture'] != "")unlink($row['picture']);
			
			$imgtype = $pic['type'];
			
			
			switch($imgtype){
			case "image/bmp": $type = ".bmp";break;
			case "image/jpg": $type = ".jpg";break;
			case "image/png": $type = ".png";break;
			case "image/jpeg": $type = ".jpeg";break;
			default: echo "<script type='text/javascript'>alert('不支持该类型的图片'); location = 'infoShow.php?select=1'</script>";
					}
			$imgpath = "../image/"."info".$time.mt_rand(10000,99999).$type;
			move_uploaded_file($imgfile, $imgpath);
			$info->picture = $imgpath;
		}
		else{
			$info->picture = $_POST['image'];
			}
			
			$infopath = "../file/"."info".$time.mt_rand(10000,99999).$infoname;
			move_uploaded_file($infofile, $infopath);
			$info->data = $infopath;
			$infodao->update($info);
		
			
			
	}
	if($select == 3){
		$id = $_GET['id'];
		$row = $infodao->findbyid($id);
		unlink($row['picture']);
		unlink($row['data']);
		$infodao->deletebyid($id);
		
		}	
		echo "<script type='text/javascript'>location = 'infoShow.php'</script>";
 ?>