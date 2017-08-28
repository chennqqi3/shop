<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-cn" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>取消订单_帮助中心_华为商城</title>
<link rel="shortcut icon" href="/vmallshop/Public/Ico/favicon.ico"  />
<link href="/vmallshop/Public/Css/help.ec.core.css" rel="stylesheet" type="text/css">
<link href="/vmallshop/Public/Css/help.main.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- 粉红登录注册 -->

<!---1---------------------------头部粉红色条--------------------------------------->
<script type="text/javascript" src="/vmallshop/Public/Jquery/jquery-1.7.2.js"></script>
<div  class="qq-caibei-bar hide"  id="caibeiMsg">
	<div  class="layout">
		<div  class="qq-caibei-bar-tips"  id="HeadShow"></div>
		<div  class="qq-caibei-bar-userInfo"  id="ShowMsg"></div>
	</div>
</div>

<!----------------头部的粉红色条--------------------->
<div  class="shortcut">
	<div  class="layout">
	  <!-----登录注册要去修改地方------>
	<span id="unlogin_status">
	  
	   <a  href="<?php echo U('Login/index');?>"  rel="nofollow">[登录]</a><a  href="<?php echo U('Sign/index');?>"  rel="nofollow">[注册]</a>
	  
	</span>
	 <!-----登录注册要去修改地方------>
	 <!---------登录后的状态----------->
	<span  id="login_status"  class="hide">欢迎您，<a  href="<?php echo U('Member/index');?>"  id="customer_name"  rel="nofollow"  timetype="timestamp"></a>
	<!---------登录后的状态----------->
	
	[<a  href="<?php echo U('Login/quit');?>">退出</a>]</span>
    <b>|</b><a  href="<?php echo U('OrderCenter/index');?>"  rel="nofollow"  timetype="timestamp">我的订单</a><span  id="preferential"></span><b>|</b><a  href="<?php echo U('Help/vmall');?>"  rel="nofollow"  class="red">帮助中心</a><b>|</b><a  href="javascript:return  false;"  >华为商城手机版</a>

	</div>
</div>

<script type="text/javascript">
  // 顶部粉红条 ajax进行处理结果
  $(function(){
      $.ajax({
	      url:'<?php echo U("Login/checkLogin");?>',
		  type:'GET',
		  dataType:'json',
		  success:function(responseText,status,xhr){
		      if(status=="success"){
			     if(responseText.login_status==1){
				     $("#login_status").removeClass('hide');
					 $("#login_status #customer_name").html(responseText.user_name);
					 $("#unlogin_status").addClass('hide');
				 }else{
				     $("#login_status").addClass('hide');
				     $("#unlogin_status").removeClass('hide');
				 
				 }
				
			  }else{
			       $("#login_status").addClass('hide');
				   $("#unlogin_status").removeClass('hide');
			  
			  }
		  
		  },
		  
		  error:function(){
		      $("#login_status").addClass('hide');
		      $("#unlogin_status").removeClass('hide');
		  },
		  
		  timeout:60*1000,
	  
	  
	  
	  
	  
	  
	  
	  
	  });
  
  
  
  
  
  
  });
  

</script>

<!-- 搜索 -->
<!------------------搜索导航---作者:曹建伟------------------------------->
<script  src="/vmallshop/Public/Js/base.js"></script>

<div  class="top-banner"  id="top-banner-block"></div>
<!----1----------------------------------------------------------------------------->
<!--------2-搜索条部分---------------------------------------------------------------->
<script type="text/javascript" src="/vmallshop/Public/Jquery/jquery-1.7.2.js"></script>
<header  class="header">
	<div  class="layout">
		
		<div  class="logo"><a  href="<?php echo U('Index/index');?>"  title="Vmall.com - 华为商城"><img  src="/vmallshop/Public/Images/newLogo.png"  alt="Vmall.com - 华为商城"></a></div>
		
		<div  class="searchBar">
			
				<div  class="searchBar-key">
	<b>热门搜索：</b>
	
	    <!--------搜索上的几个关键商品--------->
		<a  href="<?php echo U('Search/index');?>?keywords='畅玩版'"  target="_blank">畅玩版</a>
	    
	    
		<a  href="<?php echo U('Search/index');?>?keywords=荣耀3C"  target="_blank">荣耀3C</a>
	    
	    
		<a  href="<?php echo U('Search/index');?>?keywords=X1"  target="_blank">X1</a>
	    
	    
		<a  href="<?php echo U('Search/index');?>?keywords=P7"  target="_blank">华为P7</a>
	    
	    
		<a  href="<?php echo U('Search/index');?>?keywords=荣耀立方"  target="_blank">荣耀立方</a>
	   <!--------搜索上的几个关键商品--------->
</div>
			<div  class="searchBar-form"  id="searchBar-area">
			    <!-----------搜索条------------------->
				<form  method="get"  action="" onsubmit="return false;">					
					
					
					
					<input  type="text"  class="text"  maxlength="100"  id="search_kw"  style="z-index: 1;"  autocomplete="off"  placeholder="请输入搜索关键字" style="height:18px;">
					
					<input  type="submit"  class="button"  value=" " id="submit_go">
					<input  type="hidden"  id="default-search"  value="荣耀6">
				</form>
				<!-----------搜索条------------------->
			</div>
		</div>
		<script type="text/javascript">
		   $(function(){
		  
		      var url="<?php echo U('Search/index');?>";
			 
			  $("#submit_go").click(function(){
			     
			      var search_kw=$("#search_kw").val();
				     
				  if(search_kw.length==0){
				       alert('搜索关键字不能为空');
				  
				  }else{
				     window.location.href=url+'?keywords='+search_kw;
				  
				  }
			  
			  
			  
			  
			  });
			  
		   
		   
		   
		   
		   
		   
		   
		   
		   });
		
		
		
		</script>
		
		
		
		<div  class="header-toolbar">
			
			<div  class="header-toolbar-item"  id="header-toolbar-imall">
				
				<div  class="i-mall">
				     <!------------自己的商城---------------->
					<div  class="h"><a  href="<?php echo U('Memeber/index');?>"  rel="nofollow"  timetype="timestamp">我的商城</a>
					
					<i></i><s></s><u></u></div>
					  <!---------登录注册--------------------->
					<div  class="b"  id="header-toolbar-imall-content">
						<div  class="i-mall-prompt"  id="cart_unlogin_info" style="display:block;">
							<p>你好，请&nbsp;&nbsp;<a  href="<?php echo U('Login/index');?>"  rel="nofollow">登录</a> / <a  href="<?php echo U('Sign/index');?>"  rel="nofollow">注册</a></p>
							
						  
						</div>
						<div class="i-mall-prompt" id="cart_login_info" style="display:none">
							<p><a href="<?php echo U('Member/index');?>" id="cart_memeber"></a><em class="vip-state" id="vip-info">&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Member/index');?>" title="VMALL V0会员" id="vip-Active"><i class="icon-vip-level-0"></i></a></em></p>
						</div>
						 <!---------登录注册--------------------->
						<div  class="i-mall-uc "  id="cart_nlogin_info">
							<ul>
							     <!-----------代付款和-------------->
								<li><a  href="<?php echo U('OrderCenter/index');?>"  timetype="timestamp">待付款</a><span  id="toolbar-orderWaitingHandleCount">0</span></li>
								<li><a  href="<?php echo U('OrderCenter/index');?>"  timetype="timestamp">待评论</a><span  id="toolbar-notRemarkCount">0</span></li>
								<!------------代付款------------>
							</ul>
						</div>
						
						
						<div  class="i-mall-uc ">
							<p><br></p>
						</div>
					</div>
				</div>
			</div>
<script type="text/javascript">
    $(function(){
	     
	    $.ajax({
		     url:"<?php echo U('SmallCat/myShop');?>",
			 type:'POST',
			 dataType:'json',
			 success:function(responseText,status,xhr){
			    
			      if(status=='success'){
				      
				     if(responseText.login_status==1){
					   
					     $("#cart_login_info").show();
					     $("#cart_unlogin_info").hide();
					     var user_name=responseText.user_name;
						 $("#cart_login_info #cart_memeber").html(responseText.user_name);
						  //计算用户的级别
						 var ico_user_level="icon-vip-level-0";
						 switch(responseText.user_level){
						     case 5: ico_user_level="icon-vip-level-5";break;
						     case 4: ico_user_level="icon-vip-level-4";break;
						     case 3: ico_user_level="icon-vip-level-3";break;
						     case 2: ico_user_level="icon-vip-level-2";break;
						     case 1: ico_user_level="icon-vip-level-1";break;
						     case 0: ico_user_level="icon-vip-level-0";break;
							 default:ico_user_level="icon-vip-level-0";
						 }
						 $("#cart_login_info #vip-Active").find('i').addClass('ico_user_level');
						 $("#toolbar-orderWaitingHandleCount").html(responseText.unpay_count);
						  $("#toolbar-notRemarkCount").html(responseText.uncomment_count);
						 
					 }else{
					     $("#cart_unlogin_info").show();
					     $("#cart_login_info").hide();
					 }
				  }else{
				      $("#cart_unlogin_info").show();
					  $("#cart_login_info").hide();
				  
				  }
			 
			 },
			 
			 error:function(){
			       $("#cart_unlogin_info").show();
				   $("#cart_login_info").hide();
			 },
			 
			 timeout:60*1000,
		
		
		
		
		
		
		});
	
	
	
	
	
	
	
	}); 




</script>
			
			
			       <!--------------购物车的商品--------------------->
			<div  class="header-toolbar-item"  id="header-toolbar-minicart">
				
				<div class="minicart">
					<div class="h" id="header-toolbar-minicart-h"><a href="<?php echo U('Cart/index');?>" rel="nofollow" timetype="timestamp">我的购物车<span><em id="header-cart-total">0</em><b></b></span></a><i></i><s></s><u></u></div>
					    <div style="display:block;" class="b" id="header-toolbar-minicart-content">
						<div style="display:block;" class="minicart-pro-empty" id="minicart-pro-empty">
							<span class="icon-minicart">您的购物车是空的，赶紧选购吧！</span>
						</div>
						
						<div style="display:none;" id="minicart-pro-list-block">
						<ul class="minicart-pro-list" id="minicart-pro-list"><!--microCartList start-->
						<!--microCartList end-->
						</ul>
						</div>
						<div style="display:none;" class="minicart-pro-settleup" id="minicart-pro-settleup">
							<p>共<em id="micro-cart-total">1</em>件商品</p>
							<p>共计<b id="micro-cart-totalPrice">¥&nbsp;<span>2888.00<span></b></p>
							<a class="button-minicart-settleup" href="<?php echo U('Cart/index');?>">去结算</a>
						</div>
						
					</div>
				</div>
			</div>
<script type="text/javascript">
 //购物进行ajax处理
 $(function(){
         //鼠标移入移除事件
	  $("#header-toolbar-minicart-content").hide();
	 $("#header-toolbar-minicart-h").hover(function(){
	      $("#header-toolbar-minicart-content").show();
	 
	 },function(){
	      $("#header-toolbar-minicart-content").hide();
	 });
	 
	  $("#header-toolbar-minicart-content").hover(function(){
	         $(this).show();
	  
	  },function(){
	        $(this).hide();
	  });

     
	  //ajax查询数量和商品
	  
	  do_cat();
	  
function do_cat(){
	 $.ajax({
	     
		 url:"<?php echo U('SmallCat/myGoods');?>",
		 type:'GET',
		 dataType:'json',
		 success:function(responseText,status,xhr){
		     if(status=="success"){
			     if(responseText.cat_status==1){
				     $("#header-cart-total").html(responseText.content.total_nums);
					 $("#minicart-pro-empty").hide();
					 $("#minicart-pro-list-block").show();
					 $("#minicart-pro-list-block #minicart-pro-list").html(responseText.info);
					 $("#minicart-pro-settleup").show();
					 $("#minicart-pro-settleup #micro-cart-total").html(responseText.content.total_nums);
					 $("#minicart-pro-settleup #micro-cart-totalPrice").find('span').html(responseText.content.total_price.toFixed(2));
					 
				 }else{
				  $("#header-cart-total").html('0');
			      $("#minicart-pro-list-block").hide();
			      $("#minicart-pro-settleup").hide();
			      $("#minicart-pro-empty").show();
				 
				 }
			 
			 }else{
			  $("#header-cart-total").html('0');
			  $("#minicart-pro-list-block").hide();
			  $("#minicart-pro-settleup").hide();
			  $("#minicart-pro-empty").show();
			 
			 }
		   
		 },
		 error:function(){
		     $("#header-cart-total").html('0');
			 $("#minicart-pro-list-block").hide();
			 $("#minicart-pro-settleup").hide();
			 $("#minicart-pro-empty").show();
		 },
		 timeout:60*1000,
	 
	 
	 
	 
	 
	 
	 
	 });
 
} 

 //事件委托的形式添加事件

$("#minicart-pro-list").on('click',".icon-minicart-del",function(){
      var goods_id=$(this).next('input').val();
	  var parent_li=$(this).closest('li');
	    //ajax的形式删除元素
	  $.ajax({
	     url:"<?php echo U('SmallCat/delGoods');?>",
		 type:'POST',
		 data:{
		    'goods_id':goods_id,
		 },
		 dataType:'json',
		 success:function(responseText,status,xhr){
		     if(status=='success'){
			      //返回1 说明session 中删除成功!
			     if(responseText.del_status==1){
				    
					    //删除此条信息
					   
					  parent_li.remove();
					   //修改金额和总数量
					  $("#header-cart-total").html(responseText.total_num);
					  $("#minicart-pro-settleup #micro-cart-total").html(responseText.total_num);
					   $("#minicart-pro-settleup #micro-cart-totalPrice").find('span').html(responseText.total_money.toFixed(2));
	                 var lis=$("#minicart-pro-list li").size();
					 
					 if(lis<=0){
					   $("#header-cart-total").html('0');
			           $("#minicart-pro-list-block").hide();
			           $("#minicart-pro-settleup").hide();
			           $("#minicart-pro-empty").show();
					 
					 }else{
					 
					 
					 }
					
				 
				 }
			 }
		 
		 }
		 
	  
	  
	  
	  });
	  
});
 
 
 
 
 
 });
 




</script>			
			 <!--------------购物车的商品--------------------->
			
		</div>
	</div>			
</header>
<!--------2-搜索条部分---------------------------------------------------------------->

<!----------------------3-----导航条部分----------------------------------------------->

<textarea  id="micro-cart-tpl"  class="hide">
</textarea>




<!-- 头部 -->

<!-- 导航 -->
﻿<!-----------------折叠-导航条---------------------------->
<script type="text/javascript" src="/vmallshop/Public/Jquery/jquery-1.7.2.js"></script>
<div  class="naver-main">
	<div  class="layout">
		
		<div  class="category"  id="category-block">
			
			<div  class="h"  id="category-h">
				<h2>全部商品</h2>
				<i  class="icon-category"  id="category-icon"></i>
			</div>
			<div  class="b"  id="category-list">
				<ul>
					  <li>
							<h3><a  href="http://www.vmall.com/list-1"><span>手机
														</span></a></h3>
								<a  href="http://www.vmall.com/list-1#2"><span>手机
																</span></a>
								<a  href="http://www.vmall.com/list-1#5"><span>配件
																</span></a>
						</li>
						<li  class="odd">
							<h3><a  href="http://www.vmall.com/list-27"><span>运营商
														</span></a></h3>
								<a  href="http://www.vmall.com/list-27#29"><span>购机送费
																</span></a>
								<a  href="http://www.vmall.com/list-27#28"><span>选号入网
																</span></a>
								<a  href="http://www.vmall.com/list-27#33"><span>上网卡
																</span></a>
						</li>
						<li>
							<h3><a  href="http://www.vmall.com/list-9"><span>平板电脑
														</span></a></h3>
								<a  href="http://www.vmall.com/list-9#10"><span>平板电脑
																</span></a>
								<a  href="http://www.vmall.com/list-9#11"><span>配件
																</span></a>
						</li>
						<li  class="odd">
							<h3><a  href="http://www.vmall.com/list-6"><span>宽带网络
														</span></a></h3>
								<a  href="http://www.vmall.com/list-6#7"><span>移动网络
																</span></a>
								<a  href="http://www.vmall.com/list-6#8"><span>家庭网络
																</span></a>
						</li>
						<li>
							<h3><a  href="http://www.vmall.com/list-12"><span>增值服务
														</span></a></h3>
								<a  href="http://www.vmall.com/list-12#30"><span>华为秘盒
																</span></a>
								<a  href="http://www.vmall.com/list-12#35"><span>服务
																</span></a>
								<a  href="http://www.vmall.com/list-12#14"><span>配件
																</span></a>
						</li>
					<li  class="odd">
						<h3><a  href="http://app.vmall.com/"  target="_blank"><span>应用市场</span></a></h3>
						<a  href="http://app.vmall.com/game/list"  target="_blank"><span>手机游戏</span></a>
						<a  href="http://app.vmall.com/"  target="_blank"><span>手机应用</span></a>
					</li>
				</ul>
			</div>

		</div>
<script type="text/javascript">
   $(function(){
       $.ajax({
	      'url':"<?php echo U('Category/index');?>",
		  'type':'GET',
		  'success':function(responseText,status,xhr){
		     if(status=='success'){
			     $("#category-list").find('ul').html(responseText);
				 $("#category-list ul li:odd").addClass('odd');
			 }else{
			     window.location.reload();
			 }
		  
		  }
	   
	   
	   
	   
	   });
   
   
   
   
   
   });
</script>	
		 <!-------------导航条---------------->
		<nav  class="naver">
				<ul  id="naver-list">
			<li  id="index"><a  href="<?php echo U('Index/index');?>"  class="current"><span>首 页
					</span></a>
					</li>
		<li  id="nav-sale"><a  href="<?php echo U('Product/index',array('g'=>2));?>"  target="_blank"><span>荣耀6
			<s><img  src="/vmallshop/Public/Images/new.png"  alt="new"></s>
		</span></a> </li>
					
		<li  id="club"><a   href="<?php echo U('Product/index',array('g'=>1));?>"  ><span>华为P7
					</span></a> </li>
		<li  class=""><a  href="javascript:return false;"><span>精彩频道</span></a>
			
		</li>
</ul>
		</nav><!-- 20130909-导航-end -->
	</div>
</div>
<!-------------导航条---------------->
<script>
    
	$(function () {
		$('#naver-list li').hover(function () {
			$(this).addClass('hover');
		},function () {
			$(this).removeClass('hover');
		});
	});
	
	
</script>
			
		</nav>
	</div>
</div>
<script>
(function () {
	//所有分类显示隐藏控制
	var isIndex =  false,
		categoryBlock = gid('category-block');
		
	if(isIndex) return;

	categoryBlock.onmouseover = function () {
		categoryBlock.className = 'category category-hove';
	};
	categoryBlock.onmouseout = function () {
		categoryBlock.className = 'category';
	};
	
}());
$(function () {
	//分类间隔背景色
	$('#category-list li:odd').addClass('odd');
	$('#category-list li a').click(function () {
		setTimeout(function () {
			var id = location.hash.split("#", 2)[1];
			if(id)return ec.product.showCategory(gid('pro-cate-'+ id) , id);
		}, 200);
		
	});
});
</script>
<script>
(function(){
	var n = $("#nav-1");
	n.children("a").addClass("current");
	n.siblings().children("a").removeClass("current");
})();
</script>
<div class="hr-10"></div>
<div class="g">
	<!--面包屑 -->
	<div class="breadcrumb-area icon-breadcrumb fcn">您最近的位置：<a href="#" title="首页">首页</a>&nbsp;>&nbsp;<a href="#" title="帮助中心">帮助中心</a>&nbsp;>&nbsp;<b>取消订单</b></div>
</div>
<div class="hr-15"></div>




<div class="g">
    <div class="fr u-4-5">
    	
        <!--帮助中心-内容 -->
        <div class="help-detail-area">
			<div class="h">
				<h3>取消订单</h3>
			</div>
        	<div class="b"><h4>取消订单规则</h4>
<p>1.在您付款前都是可以自行取消订单的；您付款后商品处于“待出库”状态的商品您可以取消，但请勿随意自行取消订单。如果成功付款后您有取消订单的动作及需求，请您联系华为商城客服。</p>
<p>2.支付成功的数据反馈可能有短期延迟，若您确认您已支付成功，但系统仍存在“取消订单”按钮，请您勿点击，否则订单将会被取消。</p>

<h4>取消订单流程 </h4>            
<p>1.打开华为商城网站（<a href="javascript:if(confirm('http://www.vmall.com/  \n\n�ļ���δ�� Teleport Pro ȡ�أ���Ϊ �������·��������ʼ��ַ�����õķ�Χ��  \n\n��Ҫ�ӷ������ϴ�����'))window.location='http://www.vmall.com/'" tppabs="http://www.vmall.com/" target="_blank" title="华为商城">www.vmall.com</a>），点击网页顶部“我的订单”（如下图红框部分所示），商城网页会自动进入“我的订单”页面；如果您没有登录，商城网页会自动进入登录页面，您登陆后，商城网页会自动进入“我的订单”页面；</p>
<p style="text-align:center;"><img src="../../res.vmall.com/20140801/images/help/M1.5/image001.jpg" tppabs="http://res.vmall.com/20140801/images/help/M1.5/image001.jpg" alt="" /></p>
 
<p>2.在订单未支付的情况下（如果您已经支付，请联系华为商城客服），进入“我的订单”页面，找到您想要取消的订单，点击“取消订单”；</p> 
<p style="text-align:center;"><img src="../../res.vmall.com/20140801/images/help/M1.7/image002.jpg" tppabs="http://res.vmall.com/20140801/images/help/M1.7/image002.jpg" alt="" /></p>
 
<p>3.点击“取消订单”后，商城系统会让您确认是否要取消订单，选择“是”，您便取消了该订单；</p>
<p style="text-align:center;"><img src="../../res.vmall.com/20140801/images/help/M1.7/image003.jpg" tppabs="http://res.vmall.com/20140801/images/help/M1.7/image003.jpg" alt="" /></p>
 
<p>4.被取消的订单会出现“已取消”的字样，提醒您该订单已被取消。</p>
<p style="text-align:center;"><img src="../../res.vmall.com/20140801/images/help/M1.7/image004.jpg" tppabs="http://res.vmall.com/20140801/images/help/M1.7/image004.jpg" alt="" /></p>
 
</div>
            <div class="f">
            	<b></b>
                <s></s>
            </div>
        </div>
    </div>
	<div class="fl u-1-5">
    	
<!--左边菜单-20121024 -->
<div class="help-menu-area">
    <div class="b">
        <ul>
			<li><h3>购物指南</h3>
            	<ol>
                	
                    <li id="help_buy"><a href="/vmallshop/index.php/Home/help/buy"  title="如何购买"><span>如何购买</span></a></li>
                    <li id="help_buyContract"><a href="/vmallshop/index.php/Home/help/buyContract"  title="合约机"><span>合约机</span></a></li>
                </ol>
            </li>
        	<li><h3>账户管理</h3>
            	<ol>
                    <li id="help_regForget"><a href="/vmallshop/index.php/Home/help/regForget" title="找回密码"><span>找回密码</span></a></li>
                    <li id="help_regAgreement"><a href="/vmallshop/index.php/Home/help/regAgreement"  title="注册协议"><span>注册协议</span></a></li>
					<li id="help_index"><a href="/vmallshop/index.php/Home/help/index" tppabs="index" title="注册"><span>注册</span></a></li>
                </ol>
            </li>
            <li><h3>订单操作</h3>
            	<ol>
					<li id="help_orderDel"><a href="/vmallshop/index.php/Home/help/orderDel"  title="取消订单"><span>取消订单</span></a></li>
                	<li id="help_order"><a href="/vmallshop/index.php/Home/help/order"  title="查询订单"><span>查询订单</span></a></li>
                   
                </ol>
            </li>
            <li><h3>配送方式</h3>
            	<ol>
                	<li id="help_delivery"><a href="/vmallshop/index.php/Home/help/delivery" title="第三方快递"><span>第三方快递</span></a></li>
                    <li id="help_deliverySelect"><a href="/vmallshop/index.php/Home/help/deliverySelect"  title="查询物流"><span>查询物流</span></a></li>
                </ol>
            </li>
            <li><h3>支付方式</h3>
            	<ol>
                	<li id="help_payment"><a href="/vmallshop/index.php/Home/help/payment"  title="网银支付"><span>网银支付</span></a></li>
                    <li id="help_paymentHDFK"><a href="/vmallshop/index.php/Home/help/paymentHDFK"  title="货到付款"><span>货到付款</span></a></li>
                </ol>
            <li><h3>关于商城</h3>
            	<ol>
                	<li id="help_company"><a href="/vmallshop/index.php/Home/help/company"  title="公司介绍"><span>公司介绍</span></a></li>
                    <li id="help_bd"><a href="/vmallshop/index.php/Home/help/bd"  title="商务合作"><span>商务合作</span></a></li>
                </ol>
            </li>
        </ul>
    </div> 
</div><!--左边菜单-end -->

    </div>
</div>
<div class="hr-60"></div>
<!--口号-20121025 -->

<!--口号-20121025 -->

<div class="slogan">
	<ul>
		<li class="s1"><i></i>500强企业&nbsp;品质保证</li>
		<li class="s2"><i></i>7天退货&nbsp;15天换货</li>
		<li class="s3"><i></i>200元起免运费</li>
		<li class="s4"><i></i>448家维修网点&nbsp;全国联保</li>
	</ul>
</div><!--口号-end -->
<!--服务-20121025 -->
<div class="service">
		<dl class="s1">
			<dt><i></i>帮助中心</dt>
			<dd>
				<ol>        
					<li><a   href="javascript:void(0)">购物指南</a></li>
					<li><a   href="javascript:void(0)">配送方式</a></li>
					<li><a   href="javascript:void(0)">支付方式</a></li>
					<li><a   href="javascript:void(0)">常见问题</a></li>
				</ol>
			</dd>
		</dl>
		<dl class="s2">
			<dt><i></i>售后服务</dt>
			<dd>
				<ol>
					<li><a target="_blank" href="javascript:void(0)">保修政策</a></li>
					<li><a target="_blank" href="javascript:void(0)">退换货政策</a></li>
					<li><a target="_blank" href="javascript:void(0)">退换货流程</a></li>
					<li><a target="_blank" href="javascript:void(0)">手机寄修服务</a></li>
				</ol>
			</dd>
		</dl>
		<dl class="s3">
			<dt><i></i>技术支持</dt>
			<dd>
				<ol>        
					<li><a   href="javascript:void(0)">售后网点</a></li>
					<li><a   href="javascript:void(0)">常见问题</a></li>
					<li><a   href="javascript:void(0)">产品手册</a></li>
					<li><a   href="javascript:void(0)">软件下载</a></li>
				</ol>       
			</dd>
		</dl>
		<dl class="s4">
			<dt><i></i>关于商城</dt>
			<dd>
				<ol>
					<li><a   href="javascript:void(0)">公司介绍</a></li>
					<li><a   href="javascript:void(0)">华为商城简介</a></li>
					<li><a   href="javascript:void(0)">联系客服</a></li>
					<li><a   href="javascript:void(0)">商务合作</a></li>
				</ol>
			</dd>
		</dl>
		<dl class="s5">
			<dt><i></i>关注我们</dt>
			<dd>
				<ol>
					<li><a class="sina" href="javascript:void(0)" target="_blank">新浪微博</a></li>
					<li><a class="qq" href="javascript:void(0)" target="_blank">腾讯微博</a></li>
					<li><a class="huafen" href="javascript:void(0)" target="_blank">花粉社区</a></li>
					<li><a href="javascript:void(0)" >商城手机版</a></li>
				</ol>
			</dd>
		</dl>
</div>
<!--服务-end -->

<!--确认对话框-->
<div id="ec_ui_confirm" class="popup-area popup-define-area hide">
    <div class="b">
        <p id="ec_ui_confirm_msg"></p>
        <div class="popup-button-area"><a id="ec_ui_confirm_yes" href="javascript:;" class="button-action-yes" title="是"><span>是</span></a><a id="ec_ui_confirm_no" href="javascript:;" class="button-action-no" title="否"><span>否</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down"></s></div>
</div>

<!--提示对话框-->
<div id="ec_ui_tips" class="popup-area popup-define-area hide">
    <div class="b">
        <p id="ec_ui_tips_msg" class="tac"></p>
        <div class="popup-button-area tac"><a id="ec_ui_tips_yes" href="javascript:;" class="button-action-yes" title="确定"><span>确定</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down"></s></div>
</div>

<!--在线客服-->
<div style="top: 230px; left: 1301px; z-index: 500; position: fixed;" class="hungBar" id="tools-nav">
	<a style="opacity: 1;" title="返回顶部" class="hungBar-top" href="#" id="hungBar-top">返回顶部</a>
	<a style="display: block;" id="tools-nav-survery" title="意见反馈" class="hungBar-feedback hide" href="javascript:;" >意见反馈</a>		
	
<script type="text/javascript" src="/vmallshop/Public/Jquery/jquery-1.7.2.js"></script>
	<!--意见反馈box-- hide-->
	<div id="survery-box" class="form-feedback-area  hide">
		<div class="h">
			<a class="form-feedback-close" title="关闭" href="javascript:;"></a>
		</div>
		<div class="b">
				<div class="form-edit-area">
					<form onsubmit="return false;" autocomplete="off">
						<div class="form-edit-table">
							<table border="0" cellpadding="0" cellspacing="0">
								<tbody>
							    <tr>
                                    <td>
                                        <b>疑问类型：</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select id="type" name="type">
                                        	
                                          
                        
                                        </select>
                                    </td>
                                </tr>
								
								<tr>
									<td><b>您的问题或建议：</b><span id="errMsg" style="color:red;font-size:14px;"></span></td>
								</tr>
								<tr>
									<td><textarea class="textarea" type="textarea" name="content" id="surveryContent" placeholder="200字内"></textarea></td>
								</tr>
								<tr>
									<td>您的联系方式：</td>
								</tr>
								<tr>
									<td><input class="text" name="contact" id="surveryContact" type="text" placeholder="邮箱或手机号"></td>
								</tr>
								<tr>
									<td><div class="fl"><input name="code" id="surveryVerify" class="verify vam" maxlength="4" type="text">&nbsp;&nbsp;<img id="surveryVerifyImg" onclick="this.src=this.src+'?'+Math.random()" class="vam" alt="验证码" src="<?php echo U('Advice/verify');?>">&nbsp;&nbsp;&nbsp;&nbsp;<span class="vam"><a 
									 id="surveryVerify_do"  class="u" >看不清，换一张</a></span></div><div class="fr"><input value="提交" id="advice_submit" type="button"></div></td>
								</tr>
								</tbody>
							</table>
						</div>
					</form>
				</div>
		</div>
	</div>
	
</div>
<script type="text/javascript">
      //用户意见提交的控制代码 曹建伟提供
    $(function(){
	      //控制验证码的更改
		  function changeImg(){
		     
			 $("#surveryVerifyImg").attr('src',function(i,v){
			      return v+'?='+Math.random();
			 });
		   
		  }
		  $("#surveryVerify_do").click(function(){
		       
		        changeImg();
		  
		  });
		 //控制窗口的显示
	    $("#tools-nav-survery").toggle(function(){
		     $("#survery-box").removeClass("hide");
			 changeImg();
		},function(){
		      $("#survery-box").addClass("hide");
			  changeImg();
		
		});
	    
		$(".form-feedback-close").click(function(){
		   
		      $("#survery-box").addClass("hide");
			  changeImg();
 
		});
		//获取疑问问题ajax的形式返回
		$.ajax({
		      url:"<?php echo U('Advice/makeCategory');?>",
			  type:"POST",
			  dataType:'json',
			  success:function(responseText,status,xhr){
			        if(status=='success'){
					    if(responseText.status==1){
						
						    $("#type").html(responseText.content);
						}
					}else{
					   alert("加载分类失败");
					}
			  },
			  error:function(){
			     alert("加载分类失败");
			  },
			  timeout:1000*60,
		     
		
		
		});
		
		
		var select=$("#type"); //选择类型
		var content=$("#surveryContent");//内容
		var connect=$("#surveryContact");//联系方式
		var code=$("#surveryVerify");//验证码
		var errMsg=$("#errMsg");
		$(select).focus(function(){
		     errMsg.html("");
		});
		$(content).focus(function(){
		     errMsg.html("");
		});
		$(connect).focus(function(){
		     errMsg.html("");
		});
		$(code).focus(function(){
		     errMsg.html("");
		});
		$("#advice_submit").click(function(){
		    //单击提交按钮进行数据判断
		 	
		     var select_val=select.val();
			 var content_val=content.val();
			 var connect_val=connect.val();
			 var code_val=code.val();
			
			 if(select_val<0){
			     errMsg.html("请选择疑问类型"); 
                
				 changeImg()
                  return;				 
			 }else if(content_val.length<1){
			    errMsg.html("请输入建议"); 
			  
				changeImg();
				return ;
			 }else if(connect.length<1){
			    errMsg.html("请输入联系方式"); 
				changeImg();
				
				 return;
			 }else if(code.length<1){
			     errMsg.html("请输入验证码"); 
				 changeImg();
				 
				 return;
			}
			//进行ajax验证验证码
			$.ajax({
			     url:"<?php echo U('Advice/checkVerify');?>",
				 type:"GET",
				 data:{
				    code:code_val,
				 },
				 success:function(responseText,statuss,xhr){
				     if(statuss=="success"){
					     if(responseText==0){
						    errMsg.html("验证码错误"); 
						    changeImg();
							return;
						 }else{
						    $.ajax({
							    url:"<?php echo U('Advice/index');?>",
                                type:"POST",
                                data:{
								   'select': select_val,
								   'content':content_val,
								   'conect':connect_val,
								},
                                success:function(responseText,status,xhr){
								      alert('提交成功!感谢你的宝贵建议');
									  $("#survery-box").addClass("hide");
								},
                                timeout:60*1000,								
							    
							});
						 
						 }
					 }else{
					  errMsg.html("验证码错误"); 
					   changeImg();
					   status=0;
					   return;
					 }
				 },
				 
				 error:function(){
				    errMsg.html("验证码错误"); 
					 changeImg();
					 status=0;
					 return;
				 },
				 timeout:60*1000,
			
			});
			
		    
			
			
			
			
			
			
			
		
		});
		
		
		 
	
	
	});


</script>
<div id="globleParameter" class="hide" context="" stylepath="http://res.vmall.com/20140826/css" scriptpath="http://res.vmall.com/20140826/js" imagepath="http://res.vmall.com/20140826/images" mediapath="http://res.vmall.com/pimages/"></div>
<!--底部 -->

<footer class="footer">
    <!-- 20130902-底部-友情链接-start -->
	<div class="footer-otherLink">
		<p>热门<a href="javascript:void(0)" >华为手机</a>：<a href="javascript:void(0)" target="_blank">华为Mate7</a> | <a href="javascript:void(0)" target="_blank">荣耀3C畅玩版</a> | <a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀6</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀3c</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀畅玩版</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">华为P7</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀X1</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀3X</a><span style="line-height:1.5;"> | <a href="javascript:void(0)" target="_blank">荣耀平板</a> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀立方</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">荣耀手环</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">华为麦芒</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">华为喵王</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">华为秘盒</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">华为P6</a><span style="line-height:1.5;"> | </span><a href="javascript:void(0)" target="_blank" style="line-height:1.5;">华为mate2</a><span style="line-height:1.5;"> | </span></p><p><br></p>
	</div>


</footer>



<div id="AutocompleteContainter_d3d73" style="position: absolute; z-index: 9999; top: 93px; left: 556.5px;"><div class="autocomplete-w1"><div class="autocomplete" id="Autocomplete_d3d73" style="display: none; width: 315px; max-height: 400px;"></div></div></div>

</body>
</html>