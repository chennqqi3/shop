<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/vmallshop/index.php/Admin/HotSale/insert/navTabId/listavalue/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);" enctype="multipart/form-data"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			
			
			<p>
			<label>选择商品</label>
		   <select class="combox required" name="goods_id" id="w_combox_city" ref="w_combox_area" >
		       <option value="" selected>---选择商品---</option>
			   <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo["goods_id"]); ?>><?php echo ($vo["goods_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			   
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