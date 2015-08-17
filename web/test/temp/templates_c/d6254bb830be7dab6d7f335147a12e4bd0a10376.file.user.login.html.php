<?php /* Smarty version Smarty-3.0.8, created on 2012-05-19 01:34:57
         compiled from "/Volumes/b/deveploer/php/sherry/web/test/views/user.login.html" */ ?>
<?php /*%%SmartyHeaderCode:12861925704fb6f8c191df36-24032519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6254bb830be7dab6d7f335147a12e4bd0a10376' => 
    array (
      0 => '/Volumes/b/deveploer/php/sherry/web/test/views/user.login.html',
      1 => 1337384906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12861925704fb6f8c191df36-24032519',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
</head>
<body>
	<form action="http://localhost/isherry/web/test/index.php/user/login" method="get">
		<table>
			<tr>
				<th>姓名</th>
				<td><input name="name" />
				</td>
			</tr>
			<tr>
				<th></th>
				<td></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="登录"/></td>
			</tr>
		</table>
	</form>
</body>
</html>