<?php /* Smarty version Smarty-3.0.8, created on 2017-05-26 11:46:05
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/category_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:185805927a4fda04c45-25403561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c28eec5fcb625540796e030e463bf8bb39dc710' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/category_edit.html',
      1 => 1481072925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185805927a4fda04c45-25403561',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\block.loop.php';
?><?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">栏目管理</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=xdcms&c=category&f=edit_save" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=category">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=category&f=add">添加栏目</a></div><span>|</span><div class="title_nav_3"><a href="index.php?m=xdcms&c=category&f=cache">更新缓存</a></div></th>
  </tr>
  <tr>
    <td align="right">上级栏目:</td>
    <td width="86%" colspan="3"><label>
      <select name="parentid" id="parentid">
        <option value="<?php echo $_smarty_tpl->getVariable('rs')->value['parentid'];?>
"><?php if ($_smarty_tpl->getVariable('catname')->value==''){?>无(作为一级栏目)<?php }else{ ?><?php echo $_smarty_tpl->getVariable('catname')->value;?>
<?php }?></option>
        <?php echo $_smarty_tpl->getVariable('categorylist')->value;?>

      </select>
    </label></td>
  </tr>
  <tr>
    <td align="right">栏目名称:</td>
    <td colspan="3"><input type="text" name="catname" class="txt" size="30" id="catname" value="<?php echo $_smarty_tpl->getVariable('rs')->value['catname'];?>
"></td>
  </tr>
  <tr>
    <td align="right">栏目目录:</td>
    <td colspan="3"><input type="text" name="catdir" class="txt" size="15" id="catdir" value="<?php echo $_smarty_tpl->getVariable('rs')->value['catdir'];?>
"></td>
  </tr>
  <tr>
    <td align="right">栏目图片:</td>
    <td colspan="3"><input type="text" name="thumb" id="thumb" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['thumb'];?>
"> <a href="#" onclick="javascript:ShowIframe(400,115,'上传缩略图！','system/function/upload.inc.php?filename=thumb')">上 传</a></td>
  </tr>
  <tr>
    <td align="right">内容模型:</td>
    <td colspan="3"><select name="model" id="model" onChange="get_model(this.value)">
    <option value="">请选择模型</option>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('model')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['model_table'];?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['model_table']==$_smarty_tpl->getVariable('rs')->value['model']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['model_name'];?>
</option>
    <?php }} ?>
      </select></td>
  </tr>
  <tr>
    <td align="right">语言:</td>
    <td colspan="3"><select name="lang" id="lang">
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lang')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('rs')->value['lang']==$_smarty_tpl->tpl_vars['value']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</option>
    <?php }} ?>
      </select></td>
  </tr>
  <tr>
    <th colspan="4" style="padding-left:5px;">更多选项[<a href="###" onclick="openShutManager(this,'box4',false,'关闭','展开')" >展开</a>]</th>
  </tr>
  </table>
  
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="box4" style="display:none" class="xdcms_add_table xdcms_cate_add_table">
  <tr>
    <td width="23%" align="right">列表页每页数据条数:</td>
    <td  colspan="3"><input type="text" name="pagesize" class="txt" size="6" id="pagesize" value="<?php echo $_smarty_tpl->getVariable('rs')->value['pagesize'];?>
"> 注：设置该栏目列表页每页所显示的数据条数</td>
  </tr>
  <tr>
    <td align="right">是否外部链接:</td>
    <td colspan="3">
      <select name="is_link" id="is_link" onChange="islink(this.value)" class="fl">
        <option value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_link']==0){?>selected="selected"<?php }?>>否</option>
        <option value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_link']==1){?>selected="selected"<?php }?>>是</option>
      </select> <div id="text_show" <?php if ($_smarty_tpl->getVariable('rs')->value['is_link']==1){?>style="display:block;"<?php }else{ ?>style="display:none;"<?php }?>>链接地址：<input type="text" name="url" class="txt" size="20" id="url" value="<?php echo $_smarty_tpl->getVariable('rs')->value['url'];?>
"> * 如修改为外部链接，请填写完整路径，如：http://www.91736.com</div></td>
  </tr>
  
  
  <tr>
    <td align="right">排序:</td>
    <td colspan="3"><input type="text" name="sort" class="txt" size="6" id="sort" value="<?php echo $_smarty_tpl->getVariable('rs')->value['sort'];?>
"></td>
  </tr>
  <tr>
    <td align="right">是否导航显示:</td>
    <td colspan="3">
      <input name="is_show" type="radio" id="is_show" value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_show']==1){?>checked="checked"<?php }?> class="checkbox" />
      是 
      <input name="is_show" type="radio" id="is_show" value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_show']==0){?>checked="checked"<?php }?> class="checkbox"/>
      否</td>
  </tr>
  <tr>
    <td align="right">是否新窗口打开:</td>
    <td colspan="3">
      <input name="is_target" type="radio" id="is_target" value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_target']==1){?>checked="checked"<?php }?> class="checkbox"/>
      是 
      <input name="is_target" type="radio" id="is_target" value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_target']==0){?>checked="checked"<?php }?> class="checkbox" />
      否</td>
  </tr>
  <tr>
    <td align="right">栏目静态设置:</td>
    <td colspan="3">
      <input name="is_html" type="radio" id="is_html" value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_html']==0){?>checked="checked"<?php }?> class="checkbox" onClick="get_url(this.value)" />
      动态
      <input name="is_html" type="radio" id="is_html" value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_html']==1){?>checked="checked"<?php }?> class="checkbox" onClick="get_url(this.value)" />
      静态
      <input name="is_html" type="radio" id="is_html" value="2" <?php if ($_smarty_tpl->getVariable('rs')->value['is_html']==2){?>checked="checked"<?php }?> class="checkbox" onClick="get_url(this.value)" />
      伪静态</td>
  </tr>
    <td align="right">栏目页模板:</td>
    <td colspan="3">
      <select name="template_cate">
      	  <option value="<?php echo $_smarty_tpl->getVariable('rs')->value['template_cate'];?>
"><?php echo $_smarty_tpl->getVariable('rs')->value['template_cate'];?>
</option>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('template_cate')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
        <?php }} ?>
      </select> 注：选择与模型名称相对应的模板，如新闻(news)则选择list_news.html</td>
  </tr>
  <tr>
    <td align="right">列表页模板:</td>
    <td colspan="3">
      <select name="template_list">
      	  <option value="<?php echo $_smarty_tpl->getVariable('rs')->value['template_list'];?>
"><?php echo $_smarty_tpl->getVariable('rs')->value['template_list'];?>
</option>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('template_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
        <?php }} ?>
      </select> 注：选择与模型名称相对应的模板，如新闻(news)则选择list_news.html</td>
  </tr>
  <tr>
    <td align="right">内容页模板:</td>
    <td colspan="3">
      <select name="template_show">
      	  <option value="<?php echo $_smarty_tpl->getVariable('rs')->value['template_show'];?>
"><?php echo $_smarty_tpl->getVariable('rs')->value['template_show'];?>
</option>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('template_show')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
        <?php }} ?>
      </select> 注：选择如新闻(news)则选择show_news.html</td>
  </tr>
  <tr>
    <td align="right">列表页url规则:</td>
    <td colspan="3">
      <select name="url_list">
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('url_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('rs')->value['url_list']==$_smarty_tpl->tpl_vars['value']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['urldemo'];?>
</option>
        <?php }} ?>
      </select></td>
  </tr>
  <tr>
    <td align="right">内容页url规则:</td>
    <td colspan="3">
      <select name="url_show">
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('url_show')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('rs')->value['url_show']==$_smarty_tpl->tpl_vars['value']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['urldemo'];?>
</option>
        <?php }} ?>
      </select></td>
  </tr>
  <tr>
    <td align="right">SEO标题:</td>
    <td colspan="3"><input type="text" name="seo_title" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['seo_title'];?>
"></td>
  </tr>
  <tr>
    <td align="right">SEO关键字:</td>
    <td colspan="3"><input type="text" name="seo_key" class="txt" size="45" value="<?php echo $_smarty_tpl->getVariable('rs')->value['seo_key'];?>
"></td>
  </tr>
  <tr>
    <td align="right">SEO描述:</td>
    <td colspan="3"><textarea name="seo_des" cols="45" rows="5"><?php echo $_smarty_tpl->getVariable('rs')->value['seo_des'];?>
</textarea></td>
  </tr>  
  <tr>
    <th colspan="4" style="padding-left:5px;">权限设置 <b>[注：如不限制请留空]</b></th>
  </tr>
  <tr>
    <td align="right">前台访问:</td>
    <td colspan="3"><input name="power[member_0]" type="checkbox" value="1" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('rs')->value['catid'];?>
<?php $_tmp1=ob_get_clean();?><?php if (get_power('member','0',$_tmp1)==1){?>checked="checked"<?php }?> />游客 <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('module'=>"member_group")); $_block_repeat=true; smarty_block_loop(array('module'=>"member_group"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<input name="power[member_<?php echo $_smarty_tpl->getVariable('r')->value['groupid'];?>
]" type="checkbox" value="1" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('r')->value['groupid'];?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('rs')->value['catid'];?>
<?php $_tmp3=ob_get_clean();?><?php if (get_power('member',$_tmp2,$_tmp3)==1){?>checked="checked"<?php }?> /><?php echo $_smarty_tpl->getVariable('r')->value['name'];?>
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('module'=>"member_group"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
  </tr>
  <tr>
    <td align="right">后台管理:</td>
    <td colspan="3"><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('module'=>"admin_group")); $_block_repeat=true; smarty_block_loop(array('module'=>"admin_group"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<input name="power[admin_<?php echo $_smarty_tpl->getVariable('r')->value['groupid'];?>
]" type="checkbox" value="1" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('r')->value['groupid'];?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('rs')->value['catid'];?>
<?php $_tmp5=ob_get_clean();?><?php if (get_power('admin',$_tmp4,$_tmp5)==1){?>checked="checked"<?php }?> /><?php echo $_smarty_tpl->getVariable('r')->value['name'];?>
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('module'=>"admin_group"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
  </tr>
  </table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="xdcms_add_table xdcms_cate_add_table" >
  <tr>
    <td align="right" width="14%">&nbsp;</td><input type="hidden" name="catid" id="catid" value="<?php echo $_smarty_tpl->getVariable('rs')->value['catid'];?>
" />
    <td><input type="submit" name="submit" value="确认保存" class="submit" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>