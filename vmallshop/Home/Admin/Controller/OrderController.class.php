<?php
 /*
  * 网站后台订单控制器
  */
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommonController{
		public function index() {
 					//列表过滤器，生成查询Map对象
					$map = $this->_search();
					if(method_exists($this, '_filter')) {
						$this->_filter($map);
					}
					//判断采用自定义的Model类
					if(!defined("OrderView")){
					   $model = D("OrderView");
					}
					
					if(!empty($model)) {
						$this->_list($model, $map);
					}
					  if($total_money>=200){
		        $express_money=0.00;
		   
		     }else{
		          $express_money=15.00;
		      }
					$model = D("OrderView")->select();
					$this->assign('list',$model);
					 //var_dump($model);
					$this->display();
					return; 
		 
	}
	
	    public function edit(){
		
		     $order_id=I('get.order_id');
			 
			 $this->order_id=$order_id;
			 parent::edit();
		
		
		}
	
		public function insert(){
			  // 生成订单的编号 有时间和随机数生成
			  $order_no=date("Ymd").mt_rand(100,999);
			  $_POST['order_no']=$order_no;
			
		    //获取订单的属性进行组合处理插入数据库
			$order_attr=I("post.order");
			if(empty($order)){
			  
			      $this->error("请选择订单的属性!");
				  return;
			}
			
			$_POST['order_attr_value']=implode(',',$order_attr);
			//对上传的时间进行处理
			
			$_POST['order_time']=strtotime(I('post.order_time'));
			
			//调用父类的insert方法
	        parent::insert();
	  
	  }
	
	   //update 修改订单
	   
	   public function update(){
	   
	       $order_id=I("post.order_id");
		   $order_state=I("post.order_state");
	       $data['order_state']=$order_state;
		   if(M('Order')->where('order_id='.$order_id)->save($data)){
		       $this->success('修改成功');
		   }else{
		       $this->error('修改失败');
		   }
	   
	   
	   
	   }
	
	
}
