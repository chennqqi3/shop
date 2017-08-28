<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/vmallshop/index.php/Admin/User/update/navTabId/listuser/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="user_id" value="<?php echo ($vo["user_id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			
			<dl>
			<dt>用户id:</dt>
				<dd><input type="text"   style="width:100%" name="user_id" value="<?php echo ($vo["user_id"]); ?>"  readonly></dd>
			</dl>
			<dl>
				<dt>密码:</dt>
				<dd><input type="password"   style="width:100%" name="user_pwd" id="pwd"/></dd>
			</dl>
			
			<dl>
				<dt>重置密码:</dt>
				<dd><input type="password"   style="width:100%" name="user_pwd1"  equalto="#pwd"/></dd>
			</dl>
			
			<p>
			<label>是否锁定：</label>
		   <select class="combox required" name="user_lock" id="w_combox_city" ref="w_combox_area" >
		       <?php if($vo["user_lock"] == 0): ?><option value="0" selected>可登陆</option>
				 <?php else: ?>
				  <option value="0" >可登陆</option><?php endif; ?>
				<?php if($vo["user_lock"] == 1): ?><option value="1" selected>不可登陆</option>
				 <?php else: ?>
				  <option value="1" >不可登陆</option><?php endif; ?>
			   
			   
	      </select>
          </p>
			
		 
		
			 
		    
			  
		  
		  </div>
			
		
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>