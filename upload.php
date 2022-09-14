<?php
$dir = dirname(__FILE__)."/upload/";
$path = $_FILES ['upload']['tmp_name'];
$name = $_FILES ['upload']['name'];
$size = $_FILES ['upload']['size'] ;
$error =$_FILES ['upload']['error'];
$type = $_FILES ['upload']['type'];
if($_POST ['submit'])
	{
	move_uploaded_file($path , $dir.$name);
	echo "تم الرفع بنجاح ";
	}
else
	{
	echo "حدت خطأ أتناء الرفع ";
	}
?>