<?php if (!defined('THINK_PATH')) exit();?><//商品新添加界面>
<div class="pageContent">
	<form method="post" action="/vmallshop/index.php/Admin/Goods/insert/navTabId/listgoods/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, navTabAjaxDone);"  enctype="multipart/form-data"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			
			<!--<dl>
				<dt>商品编号:</dt>
				<dd><input type="text" class="required digits"  minlength="11" maxlength="11" style="width:100%" name="goods_no"/></dd>
			</dl>-->
			
			
			
			<dl>
				<dt>商品名称:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="goods_name"/></dd>
			</dl>
			
			<dl class="nowrap">
			<dt>商品关键字：</dt>
			<dd><textarea name="goods_keywords" cols="80" rows="2"></textarea></dd>
		    </dl>
			
			<p>
				<label>上市时间：</label>
				<input type="text" name="goods_time" class="date required" readonly="true"/>
				<a class="inputDateButton" href="javascript:;">选择</a>
				<span class="info">yyyy-MM-dd</span>
			</p>
			
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
				<dd><input type="text" class="required number"  style="width:100%" name="goods_original_price"/></dd>
			</dl>
			<dl>
				<dt>商品促销价:</dt>
				<dd><input type="text" class="number"  style="width:100%" name="goods_sale_price"/></dd>
			</dl>
			<dl class="nowrap">
			<dt>商品优惠描述：</dt>
			<dd><textarea name="goods_sale_desc" cols="80" rows="2"></textarea></dd>
		    </dl>
			
			
			<dl>
				<dt>商品数量:</dt>
				<dd><input type="text" class="required digits"  style="width:100%" name="goods_num"/></dd>
			</dl>
			<dl>
				<dt>商品重量:</dt>
				<dd><input type="text" class="required "  style="width:100%" name="goods_weight"/></dd>
			</dl>
			<p>
				<label>商品大图：</label>
				<input name="goods_img" type="file" />
			</p>
			
			<p>
			<label>商品分类：</label>
		   <select class="combox required" name="category_id" id="w_combox_city" ref="w_combox_area" >
		       <option value="all">---商品分类选择---</option>
			   <?php if(is_array($cat_info)): $i = 0; $__LIST__ = $cat_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo["category_id"]); ?>><?php echo ($vo["category_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			   
	      </select>
          </p>
		  <div class="divider"></div>
		   
			<label>商品属性选择：</label><br/><br/>
			   <p>
		     <?php if(is_array($avalue_info)): $i = 0; $__LIST__ = $avalue_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$avalue): $mod = ($i % 2 );++$i;?><dl>
				 <dt><?php echo ($key); ?>:</dt>
				 <dd><select class="combox required" name="goods_attr[]"  ref="w_combox" >
				   <?php if(is_array($avalue)): $i = 0; $__LIST__ = $avalue;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$avs): $mod = ($i % 2 );++$i;?><option value="<?php echo ($avs['avalue_id']); ?>"><?php echo ($avs['avalue_value']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				  
				   
			  
			   </select></dd>
			     </dl><?php endforeach; endif; else: echo "" ;endif; ?>
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