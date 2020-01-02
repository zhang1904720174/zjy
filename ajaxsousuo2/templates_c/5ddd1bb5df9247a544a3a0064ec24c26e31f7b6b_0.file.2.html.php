<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-01 00:45:19
  from 'D:\phpStudy\PHPTutorial\WWW\ajaxsousuo1\2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0beb9f3385f7_85294698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ddd1bb5df9247a544a3a0064ec24c26e31f7b6b' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\ajaxsousuo1\\2.html',
      1 => 1577839514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0beb9f3385f7_85294698 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
     table tr td{
        border: 1px solid red;
     }
    
    </style>
</head>
<body>
    <table>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['create_time'];?>
</td>
            <td><a class="del" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" href="javascript:void(0)">删除</a></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</body>
<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
     $("a").click(function(){
        var $id=$(this).attr('id');
        $.ajax({
            url:'02.php',
            type:"post",
            data:{id:$id},
            dataType:'json',
            success:function(data){
                if(data.code==0){
                    alert('删除成功');
                }else{
                    alert('删除失败');
                }
            }
        })
     })
  <?php echo '</script'; ?>
> 
</html><?php }
}
