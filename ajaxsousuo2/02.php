<?php
require_once 'dao/DAOPDO.class.php';
require_once 'smarty/Smarty.class.php';
$configs=array(
    'dbname'=>'test'
);
$pdo=DAOPDO::getSingleton($configs);
$id=$_POST['id'];
$sql="delete from news where id = $id";
$res=$pdo->query($sql);
if($res){
    $arr=array(
        'code'=>0,
        'msg'=>'删除成功'
    );
    echo json_encode($arr);
}else{
    $arr=array(
        'code'=>1,
        'msg'=>'删除失败'
    );
    echo json_encode($arr);
}
?>