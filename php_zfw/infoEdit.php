<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
$select = $_GET['select'];

if($select == 1){ ?>
<form action="infoDao.php?select=1" method="post" enctype="multipart/form-data">
<table>
<tr><td>标题：</td><td><input id="title" name="title" /></td></tr>
<tr><td>文件：</td><td><input id="data" name="data" type="file" /></td></tr>
<tr><td>图片：</td><td><input id="pic" name="pic" type="file"/></td></tr>
<tr><td>类型：</td><td><select id="class" name="class" >
					<option value="PHP" selected="selected">PHP</option>
                    <option value="HTML" >HTML</option>
					<option value="CSS" >CSS</option>
					<option value="Javascript" >Javascript</option>
</select></td></tr>
<tr><td>内容：</td><td><textarea id="content" name="content" ></textarea></td></tr>
<tr><td><input type="submit" value="提交" /></td><td><input type="reset" value="重置"></td></tr>

</table>
</form>
<?php } else{ 
require_once("import.php");
$id = $_GET['id'];
$infoDao = new InfoDAO();
$row = $infoDao->findbyid($id);
?>
<form action="infoDao.php?select=2&id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
<table>
<tr><td>标题：</td><td><input id="title" name="title" value=<?php echo $row['title'];?> /></td></tr>
<tr><td>文件：</td><td><input id="data" name="data" type="file" value=<?php echo $row['data'];?> /></td></tr>
<tr><td>图片：</td><td><input id="pic" name="pic" type="file" /></td></tr>
<tr><td>类型：</td><td><select id="class" name="class" >
					<option value=<?php echo $row['class'];?> selected="selected"><?php echo $row['class'];?></option>
					<option value="PHP" >PHP</option>
                    <option value="HTML" >HTML</option>
					<option value="CSS" >CSS</option>
					<option value="Javascript" >Javascript</option>
</select></td></tr>
<tr><td>内容：</td><td><textarea id="content" name="content" ><?php echo $row['content'];?></textarea></td></tr>
<tr><td></td><td><?php if($row['picture']!=""||$row['picture']!=NULL) {?><img src=<?php echo $row['picture'];?> width="200" /><?php } ?></td><td></td></tr>
<tr><td><input name="image" type="hidden" value=<?php echo $row['picture'];?>  /></td></tr>
<tr><td><input type="submit" value="提交" /></td><td><input type="reset" value="重置"></td></tr>

</table>
</form>
<?php }?>
</body>
</html>