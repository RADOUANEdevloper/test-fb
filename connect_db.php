<?php
$localhost = "0.0.0.0";
$user = "root";
$password ="root";
$db_name = "arf";
$connect =mysqli_connect($localhost,$user,$password,$db_name);
//$cfg['Servers'][$i]['localhost'];
if($connect)
{
echo "is connet";
}
/*
{
echo "تم الإتصال بقاعدة البيانات بنجاح ";
}
else 
{
echo "we have prablem";
}
*/
//mysql_select_db($db_name);


//mysql_close();
?>