<?php /* Smarty version Smarty3-b8, created on 2013-02-22 12:14:50
         compiled from "F:\androidphp\android-php-source\hush-framework\hush-app\tpl\backend\template\index/frame/left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:291935126f0ba137bb8-12526984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5319b25efb28bc23d480cdafb541bc010b74ac4c' => 
    array (
      0 => 'F:\\androidphp\\android-php-source\\hush-framework\\hush-app\\tpl\\backend\\template\\index/frame/left.tpl',
      1 => 1357552552,
    ),
  ),
  'nocache_hash' => '291935126f0ba137bb8-12526984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="left">

	<div class="menu" id="menu">
	
	<?php  $_smarty_tpl->tpl_vars['topAppList'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('appList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['topAppList']->index=-1;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['topAppList']->key => $_smarty_tpl->tpl_vars['topAppList']->value){
 $_smarty_tpl->tpl_vars['topAppList']->index++;
?>
		<?php  $_smarty_tpl->tpl_vars['groupList'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('topAppList')->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['groupList']->index=-1;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['groupList']->key => $_smarty_tpl->tpl_vars['groupList']->value){
 $_smarty_tpl->tpl_vars['groupList']->index++;
?>
		<div class="items_top_<?php echo $_smarty_tpl->getVariable('topAppList')->value['id'];?>
">
			<dl class="dl_items_<?php echo $_smarty_tpl->getVariable('topAppList')->index+1;?>
_<?php echo $_smarty_tpl->getVariable('groupList')->index+1;?>
">
			<dt><?php echo $_smarty_tpl->getVariable('groupList')->value['name'];?>
</dt>
			<dd>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['appItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('groupList')->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['appItem']->key => $_smarty_tpl->tpl_vars['appItem']->value){
?>
					<li><a href="<?php if ($_smarty_tpl->getVariable('appItem')->value['path']){?><?php echo $_smarty_tpl->getVariable('appItem')->value['path'];?>
<?php }else{ ?>javascript:;<?php }?>" target="main"><?php echo $_smarty_tpl->getVariable('appItem')->value['name'];?>
</a></li>
					<?php }} ?>
				</ul>
			</dd>
			</dl>
		</div><!-- Item End -->
		<?php }} ?>
	<?php }} ?>
	
	</div>

</div>
<!-- left end -->