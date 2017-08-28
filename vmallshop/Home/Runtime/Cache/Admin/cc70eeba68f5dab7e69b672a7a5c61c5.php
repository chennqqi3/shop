<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/vmallshop/index.php/Admin/UserPayment/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>金额</b> &nbsp;<input type="text" name="user_payment_money" value="<?php echo ($_POST['user_payment_money']); ?>" /> 
				</td>
				<td>
					<b>用户id</b> &nbsp;<input type="text" name="user_id" value="<?php echo ($_POST['user_id']); ?>" /> 
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">搜索</button></div></div>
				</td>
			</tr>
		</table>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">

		<thead>
			<tr>
				<th width="20" orderField="user_payment_id" <?php if($_REQUEST['_order']== 'user_payment_id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>消费ID</th>
				<th width="20" orderField="user_payment_money" <?php if($_REQUEST['_order']== 'user_payment_money'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>消费金额</th>
				<th width="20" orderField="user_payment_why" <?php if($_REQUEST['_order']== 'user_payment_why'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>消费原因</th>
				<th width="20" orderField="user_payment_time" <?php if($_REQUEST['_order']== 'user_payment_time'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>消费时间:</th>
				
				<th width="20" orderField="user_name" <?php if($_REQUEST['_order']== 'user_id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>消费用户:</th>
				<th width="20" orderField="user_id" <?php if($_REQUEST['_order']== 'user_id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>消费用户id:</th>
			</tr>
		
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="item_id" rel="<?php echo ($vo["user_payment_id"]); ?>">
					<td><?php echo ($vo["user_payment_id"]); ?></td>
					<td><?php echo ($vo["user_payment_money"]); ?></td>
					<td><?php echo ($vo["user_payment_why"]); ?></td>
					<td><?php echo ($vo["user_payment_time"]); ?></td>
					<td><?php echo ($vo["user_name"]); ?></td>
					<td><?php echo ($vo["user_id"]); ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak(<?php echo (C("TMPL_L_DELIM")); ?>numPerPage:this.value<?php echo (C("TMPL_R_DELIM")); ?>)">
				<option value="10" <?php if($numPerPage == 10): ?>selected<?php endif; ?>>10</option>
				<option value="15" <?php if($numPerPage == 15): ?>selected<?php endif; ?>>15</option>
				<option value="20" <?php if($numPerPage == 20): ?>selected<?php endif; ?>>20</option>
				<option value="25" <?php if($numPerPage == 25): ?>selected<?php endif; ?>>25</option>
				<option value="30" <?php if($numPerPage == 30): ?>selected<?php endif; ?>>30</option>
			</select>
			<span>共<?php echo ($totalCount); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>