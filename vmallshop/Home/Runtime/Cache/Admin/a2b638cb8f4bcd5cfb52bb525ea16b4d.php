<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/vmallshop/index.php/Admin/Address/insert/navTabId/listaddress/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>用户id:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="user_id"/></dd>
			</dl>
			<dl>
				<dt>收货人姓名:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="address_name"/></dd>
			</dl>
			<dl>
				<dt>手机号码:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="address_phone"/></dd>
			</dl>
			<dl>
				<dt>用户地址:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="address_content"/></dd>
			</dl>
			<dl>
				<dt>邮编:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="address_post"/></dd>
			</dl>
			<dl>
				<dt>默认地址:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="address_lock"/></dd>
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