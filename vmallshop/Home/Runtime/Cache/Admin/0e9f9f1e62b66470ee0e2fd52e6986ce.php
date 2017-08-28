<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/vmallshop/index.php/Admin/Goods/update/navTabId/listgoods/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, navTabAjaxDone);" 
		enctype="multipart/form-data"><?php  ?>
		<input type="hidden" name="goods_id" value="<?php echo ($vo["goods_id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			
			<dl>
				<dt>商品编号:</dt>
				<dd><input type="text"  style="width:100%" name="goods_no" value="<?php echo ($vo["goods_no"]); ?>" readonly></dd>
			</dl>
			
			<dl>
				<dt>商品名称:</dt>
				<dd><input type="text"  style="width:100%" name="goods_name" value="<?php echo ($vo["goods_name"]); ?>"/></dd>
			</dl>
			<dl class="nowrap">
			<dt>商品关键描述：</dt>
			<dd><textarea name="goods_keywords" cols="80" rows="2"><?php echo ($vo["goods_keywords"]); ?></textarea></dd>
		    </dl>
			<dl>
				<dt>商品上市时间:</dt>
				<dd><input type="text"  style="width:100%" name="goods_time" value="<?php echo (date('Y-m-d',$vo["goods_time"])); ?>" readonly></dd>
			</dl>
			<p>
				<label>商品状态：</label>
				<select name="goods_state" class="required combox">
				    <option value="无" >无</option>
					<option value="新品" selected>新品</option>
					<option value="热卖" >热卖</option>
					
					<option value="首发" >首发</option>
					<option value="人气" >人气</option>
			        <option value="商品已下架" >商品已下架</option>
				   
				</select>
			</p>
			<dl>
				<dt>商品原价:</dt>
				<dd><input type="text" class="required number"  style="width:100%" name="goods_original_price" value='<?php echo ($vo["goods_original_price"]); ?>'/></dd>
			</dl>
			<dl>
				<dt>商品促销价:</dt>
				<dd><input type="text" class="number"  style="width:100%" name="goods_sale_price" value="<?php echo ($vo["goods_sale_price"]); ?>"/></dd>
			</dl>
			<dl class="nowrap">
			<dt>商品优惠描述：</dt>
			<dd><textarea name="goods_sale_desc" cols="80" rows="2"><?php echo ($vo["goods_sale_desc"]); ?></textarea></dd>
		    </dl>
			
			
			<dl>
				<dt>商品数量:</dt>
				<dd><input type="text" class="required digits"  style="width:100%" name="goods_num" value="<?php echo ($vo["goods_num"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>商品重量:</dt>
				<dd><input type="text" class="required "  style="width:100%" name="goods_weight" value="<?php echo ($vo["goods_weight"]); ?>"/></dd>
			</dl>
			
			<p>
				<label>商品大图：</label>
				<input name="goods_img" type="file" />
			</p>
			
			<p>
			
			<label>商品分类：</label>
		   <select class="combox required" name="category_id" id="w_combox_city" ref="w_combox_area" >
		       
			   <?php if(is_array($cat_info)): $i = 0; $__LIST__ = $cat_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cs): $mod = ($i % 2 );++$i; if(($cs["category_id"]) == $vo["category_id"]): ?><option value=<?php echo ($cs["category_id"]); ?> selected><?php echo ($cs["category_name"]); ?></option>
				   <?php else: ?>
				     <option value=<?php echo ($cs["category_id"]); ?>><?php echo ($cs["category_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			   
	      </select>
			 </p>
			 
			 <p>
				<label>商品拥有的属性：</label>
				<input name="goods_attr_value"  value="<?php echo ($vo["goods_attr_value"]); ?>" />
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