<?php /* Smarty version Smarty-3.0.8, created on 2017-05-24 09:44:36
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/contact.html" */ ?>
<?php /*%%SmartyHeaderCode:217675924e5843afd36-98096867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40461c1607dd94bf65f08949bba3cc36b4a9ae2d' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/contact.html',
      1 => 1481072925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217675924e5843afd36-98096867',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">网站联系方式配置</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=xdcms&c=setting&f=save" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=setting">基本设置</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=setting&f=cache">更新缓存</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td width="23%" align="right">管理员姓名：</td>
    <td width="77%" colspan="3"><input type="text" name="master" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('contact')->value['master'];?>
">
    填写管理员姓名</td>
  </tr>
  <tr>
    <td align="right">管理员信箱：</td>
    <td colspan="3"><input type="text" name="email" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('contact')->value['email'];?>
">
    填写站点管理员的邮箱地址</td>
  </tr>
  <tr>
    <td align="right">客服专员：</td>
    <td colspan="3"><input type="text" name="contact" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('contact')->value['contact'];?>
">
    填写客服专员姓名，显示在会员中心及联系方式页面</td>
  </tr>
  <tr>
    <td align="right">客户服务热线：</td>
    <td colspan="3"><input type="text" name="telephone" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('contact')->value['telephone'];?>
">
    填写客服热线电话，显示在首页TOP及底部网站版权位置</td>
  </tr>
  <tr>
    <td align="right">客户服务传真：</td>
    <td colspan="3"><input type="text" name="fax" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('contact')->value['fax'];?>
">
    填写客服传真号码，显示在联系方式相关页面</td>
  </tr>
  <tr>
    <td align="right">客户服务手机：</td>
    <td colspan="3"><input type="text" name="mobilephone" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('contact')->value['mobilephone'];?>
">
    填写客服传真号码，显示在联系方式相关页面</td>
  </tr>
  <tr>
    <td align="right">网站联系地址：</td>
    <td colspan="3"><input type="text" name="address" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('contact')->value['address'];?>
">
    填写联系地址，显示在底部网站版权位置及联系方式页面</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="确认保存" class="submit" /><input name="tag" type="hidden" id="tag" value="contact" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>