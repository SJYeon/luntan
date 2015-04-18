<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php 
class Administrator{
	public $id;
	public $degree;
	public $name;
	public $password;
	}
class Information{
	public $id;
	public $title;
	public $author;
	public $content;
	public $data;
	public $tim;
	public $picture;
	public $cls;
	}
class Invitation{
	public $id;
	public $author;
	public $content;
	public $time;
	public $title;
	public $degree;
	public $picture;
	} 
class News{
	public $id;
	public $title;
	public $content;
	public $author;
	public $time;
	public $picture;
	public $degree;
	}
class News_cmt{
	public $id;
	public $news_id;
	public $newscaster_id;
	public $content;
	public $time;
	}
class Rtn_invitation{
	public $id;
	public $invitation_id;
	public $rtn_invitation_id;
	public $content;
	public $time;
	public $picture;
	}
class User{
	public $id;
	public $degreel;
	public $name;
	public $password;
	}

?>
<body>
</body>
</html>

