<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/vmallshop/index.php/Admin/HelpQuestion/insert/navTabId/listhelp_question/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>帮助问题分类ID:</dt>
			   <select class="combox required" name="help_category_id" id="w_combox_city" ref="w_combox_area" >
		       <option value="all">---帮助分类---</option>
			   <?php if(is_array($help_category)): $i = 0; $__LIST__ = $help_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo["help_category_id"]); ?>><?php echo ($vo["help_category_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			   </select>
			</dl>
			
			<dl>
				<dt>帮助问题名称:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="help_title"/></dd>
			</dl>
			
			<dl>
				<dt>帮助问题内容:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="help_content"/></dd>
			</dl>			
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>