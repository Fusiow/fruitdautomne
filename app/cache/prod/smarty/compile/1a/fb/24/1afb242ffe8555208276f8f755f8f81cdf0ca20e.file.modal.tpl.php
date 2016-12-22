<?php /* Smarty version Smarty-3.1.19, created on 2016-12-19 16:16:40
         compiled from "C:\wamp64\www\fruitdautomne\adminsama\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98035857f9d8b1eea8-42622958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1afb242ffe8555208276f8f755f8f81cdf0ca20e' => 
    array (
      0 => 'C:\\wamp64\\www\\fruitdautomne\\adminsama\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1479911602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98035857f9d8b1eea8-42622958',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5857f9d8b2aa36_39184335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5857f9d8b2aa36_39184335')) {function content_5857f9d8b2aa36_39184335($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
