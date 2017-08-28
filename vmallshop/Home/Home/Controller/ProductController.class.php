<?php
  /*
   *商品详细页控制器
   *
   */
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function index(){
	       //传递参数g代表商品号
		 
		 $g=I('get.g');
	     
		 $goods_info=M("Goods")->where(array('goods_id'=>$g))->select();
		 
		   //判断是否找到商品
		 if(!$goods_info){
		     $this->error("没有找到商品!,亲");exit;
		 }
		
		
		 $this->goods_info=$goods_info[0];
		 
		 
		  //判断商品是否下架
		  
		  $goods_state=$goods_info[0]['goods_state'];
            //商品是否下架标志
           if($goods_state=="商品已下架"){
		        $goods_state_login=0;
		   
		   }else{
		        $goods_state_login=1;
		   }	 
 		  
          $this->goods_state=$goods_state;
          $this->goods_state_login=$goods_state_login;		  
		   
		  
		  
		 
		   //获取商品价格
		 if($goods_info[0]['goods_sale_price']>0){
		     $this->goods_price=$goods_info[0]['goods_sale_price'];
		 }else{
		     $this->goods_price=$goods_info[0]['goods_original_price'];
		 }
		   //获取属性值
		 $goods_attr=$goods_info[0]['goods_attr_value'];
		  //获取是否有优惠信息
		 if($goods_info[0]['goods_sale_desc']!==""){
		       
			 $this->goods_sale_desc=$goods_info[0]['goods_sale_desc'];
		   
		 }else{
		    $this->goods_sale_desc="";
		 }
		  
		 //得到商品的平均得得分和评论总数
		 
		  $goods_avg_scrore=M('Comment')->where(array('goods_id'=>$g))->avg('comment_score');
		  $goods_comment_count=M('Comment')->where(array('goods_id'=>$g))->count();
		  $this->goods_avg_scrore=$goods_avg_scrore?($goods_avg_scrore/5)*100:100;
		  $this->goods_comment_count=$goods_comment_count?$goods_comment_count:0;
		  
		  //获取商品详细信息
		 $goods_attr_values=M('avalue')->field('attr_name,avalue_value')->where(array('avalue_id'=>array('in',$goods_attr)))->join("__ATTR__ ON __ATTR__.attr_id=__AVALUE__.attr_id")->select();
		 
		 $this->goods_attr_values=$goods_attr_values;
		 //返回商品评论总数
	     $comment_count=M("Comment")->where(array("goods_id"=>$g))->count("comment_id");
         $this->comment_count=$comment_count?$comment_count:0;		 
	    
		 //返回评价信息
		    
        			//好评 4-5
			   $map['goods_id']=$g;
			   $map['comment_score']=array('in','4,5');
		     $good_comment_count=M("Comment")->where($map)->count("comment_id");
		     $this->good_comment_count=$good_comment_count?$good_comment_count:0;
			
			
		     //返回商品的好评度
		    if($comment_count==0){
			   $this->good_status=100;
			}else{
			   $this->good_status=(int)($good_comment_count/$comment_count*100);
			
			} 
			
		    //中评 2,3
		       $map['goods_id']=$g;
			   $map['comment_score']=array('in','2,3');
		    $middle_comment_count=M("comment")->where($map)->count("comment_id");
		    $this->middle_comment_count=$middle_comment_count?$middle_comment_count:0;
		      //返回商品的好评度
		    if($comment_count==0){
			   $this->middle_status=0;
			}else{
			   $this->middle_status=(int)($middle_comment_count/$comment_count*100);
			
			}
		   //差评 0,1
		       $map['goods_id']=$g;
			   $map['comment_score']=array('in','0,1');
           $bad_comment_count=M("comment")->where($map)->count("comment_id");
	       $this->bad_comment_count=$bad_comment_count?$bad_comment_count:0;
		   if($comment_count==0){
			   $this->bad_status=0;
			}else{
			   $this->bad_status=(int)($bad_comment_count/$comment_count*100);
			
		  }
	
	     
	
         $this->display();
    }
	     //获取用户的评价
	public function userComment(){
	     
		   
		   
		   $g=I("get.g")?I("get.g"):'';
		    //如果没有收到商品id
		   
		   
		   //获取评论总数
		      $comment_num=I("get.type");
		      
			
			
		     // 实例化comment对象
		    $comment = M('Comment'); 
		    $list_comments=$comment->field("comment_content,comment_score,comment_time,user_name")->join("LEFT JOIN __USER__ ON __COMMENT__.user_id=__USER__.user_id")->where("goods_id=".$g)->limit($comment_num,5)->select();
			   
			     //返回每条评价的内容 一下为格式
			      $data="";
				 foreach($list_comments as $list){
				     if($list['comment_score']>3){
					     $comment_say="好评";
					 }else if($list['comment_score']>1){
					     $comment_say="中评";
					 
					 }else{
					    $comment_say="差评";
					 }
					 
					 $date=date("Y-m-d H:i:s",$list['comment_time']);
					 $score_line=(int)($list['comment_score']/5*100);
              $str=<<<EOF
	          <div class="pro-comment-item clearfix comment_content">
				     <!----------左边--------------------->
					 <div class="pro-comment-user">
					   <p class="pro-comment-user-img">
						  <br/>
					   </p>
					   <p class="pro-comment-user-name">{$list['user_name']}</p>
					   <s class="pro-comment-user-tag">
						 
					   </s>
					  </div>
					  <!----------左边--------------------->
					  <!----------右边--------------------->
					  <div class="pro-user-comment-main">
					     <div class="pro-user-comment">
						   <div class="h clearfix">
						     <div class="pro-user-comment-score">
							   <span class="pro-star">
							      <span class="starRating-area">
								      <s style="width:{$score_line}%"></s>
								  </span>
							   </span>
							   <em><b>{$list['comment_score']}&nbsp;分</b>&nbsp;&nbsp;{$comment_say}</em>
							  </div>
							  <div class="pro-user-comment-impress">
							    <ul><li></li></ul>
							  </div>
							  <div class="pro-user-comment-time">
							   {$date}</div>
						   </div>
						   <div class="b"> 
						      {$list['comment_content']}
						   </div>
						</div>
						<div class="arrow"></div>
					  </div>
					 <!----------右边--------------------->
				 </div>     
			 
	  
EOF;
				   
				 $data.=$str;
				 
				 
	            }
			  
			  
			
			    echo $data;
			  
			  
	}
	
    //增加到购物中
	
	public function add(){
	      //获取商品的id和数目  会保存到session 中
	      $num=I('post.num');
		  $goods_id=I("post.goods_id");
	      $status=0;
		 
		 if(empty($num)||empty($goods_id)){
		     $status=0;
		 }else{
		      //先查找有无此商品
			  $goods_info=M('Goods')->where(array('goods_id='.$goods_id))->select();
			  //如果有商品就进行处理
			  if($goods_info){
			      //进行数据更新并将用户购买的保存到session中
				  
				  $goods_original_price=$goods_info[0]['goods_original_price'];
				  $goods_sale_price=$goods_info[0]['goods_sale_price'];
				  
				 if($goods_sale_price!=0){
				     $goods_price=$goods_sale_price;
					
				 }else{
				     $goods_price=$goods_original_price;
					 
				 }
				  
				   $data['goods_id']=$goods_id;
				   $data['goods_price']=$goods_price;
				   $data['goods_num']=$num;
				   
				  //读取session的data
				  $session_data=session(C('USER_CAT_INFO'));
				    //遍历session 看商品是否在session中
				  if(!empty($session_data)){	
					 foreach($session_data as $info){
						 if($info['goods_id']==$goods_id){
							  //说明在session中  只加数目
							  
							 $data['goods_num']=$data['goods_num']+$info['goods_num'];
							 
						 
						 }else{
							 //如果没有找到就保存到新的
							 
							 $new_session[]=$info;
						 
						 }
					 }
				   
				 }	 
				 
			      $new_session[]=$data;
				
				   //重新保存session  
				  session(C('USER_CAT_INFO'),$new_session);
				  $status=1;
			      
				  //计算商品的总数目和总价格
				   $totals=0;
				   $total_price=0;
				   
				  foreach($new_session as $new){
				     
				      $totals+=$new['goods_num'];
					  $total_price+=$new['goods_price']*$new['goods_num'];
				  
				  }
				
				  $goods_total=array('nums'=>$totals,'price'=>$total_price);
			    
			  
			 }else{
			    $status=0;
			  
			 }
		 
		 
		 
		 
		 
		 
	 }
	
	  //发送到前台
	 $send['status']=$status;
	 $send['content']=$goods_total;
	 
	 echo json_encode($send);
	
	
	
	
	
	
	
	}
	
	
	
}