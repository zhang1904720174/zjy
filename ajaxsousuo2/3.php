<?php
require_once 'dao/DAOPDO.class.php';
$configs=array(
    'dbname'=>'test'
);
$pdo=DAOPDO::getSingleton($configs);

$title=$_POST['title'];
$create_time=$_POST['create_time'];
$sql="insert into news (title,create_time) values
 ('$title','$create_time')";
$arr=$pdo->query($sql);
if($arr==true){
    echo "成功";
}else{
    echo "失败";
}
