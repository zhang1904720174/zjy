<?php
require_once 'dao/DAOPDO.class.php';
require_once 'smarty/Smarty.class.php';
$configs=array(
    'dbname'=>'test'
);
$pdo=DAOPDO::getSingleton($configs);
$sql="select * from news";
$arr=$pdo->fetchAll($sql);

$smarty=new Smarty();
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";
$smarty->assign('arr',$arr);
$smarty->display('2.html');
?>