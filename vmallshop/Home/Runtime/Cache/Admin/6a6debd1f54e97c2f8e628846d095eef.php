<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/vmallshop/index.php/Admin/Account/update/navTabId/listAccount/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>用户ID:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="user_id" value="<?php echo ($vo["user_id"]); ?>" readonly></dd>
			</dl>
			<dl>
				<dt>账户余额:</dt>
				<dd><input type="text" class="required number"  style="width:100%" name="user_money" value="<?php echo ($vo["user_money"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>用户积分:</dt>
				<dd><input type="text" class="required number"  style="width:100%" name="user_score" value="<?php echo ($vo["user_score"]); ?>"/></dd>
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