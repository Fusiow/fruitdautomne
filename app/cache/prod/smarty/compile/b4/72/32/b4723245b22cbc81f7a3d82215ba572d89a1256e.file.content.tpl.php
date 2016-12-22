<?php /* Smarty version Smarty-3.1.19, created on 2016-12-19 16:16:40
         compiled from "C:\wamp64\www\fruitdautomne\adminsama\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137655857f9d8736dc2-52634487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4723245b22cbc81f7a3d82215ba572d89a1256e' => 
    array (
      0 => 'C:\\wamp64\\www\\fruitdautomne\\adminsama\\themes\\default\\template\\content.tpl',
      1 => 1479911602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137655857f9d8736dc2-52634487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5857f9d874a640_79015887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5857f9d874a640_79015887')) {function content_5857f9d874a640_79015887($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
