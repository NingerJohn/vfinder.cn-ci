<?php /* Smarty version 3.1.27, created on 2015-08-19 12:05:15
         compiled from "D:\CodeSpace\github\vfinder.cn\application\views\test.html" */ ?>
<?php
/*%%SmartyHeaderCode:1271055d470fb471222_06029874%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3eef650c4613e22b91cdf40f0e4011533291a092' => 
    array (
      0 => 'D:\\CodeSpace\\github\\vfinder.cn\\application\\views\\test.html',
      1 => 1439985912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1271055d470fb471222_06029874',
  'variables' => 
  array (
    'test' => 0,
    'tmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55d470fb79f730_12732727',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d470fb79f730_12732727')) {
function content_55d470fb79f730_12732727 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1271055d470fb471222_06029874';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['test']->value['title'];?>
</title> // 原文是 <title><?php echo $_smarty_tpl->tpl_vars['test']->value['title'];?>
</title>，是错误的写法，也有可能是Smarty版本的原因

<style type="text/css">
</style>
</head>
<body>
<?php echo md5($_smarty_tpl->tpl_vars['test']->value['num']);?>
 // 原文这里也写错了
<br>
<?php echo pre($_smarty_tpl->tpl_vars['tmp']->value);?>

</body>
</html><?php }
}
?>