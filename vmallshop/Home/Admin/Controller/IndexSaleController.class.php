<?php
/*
*网站后台的主文件主要调入DWZ框架
*
*/
namespace Admin\Controller;
use Think\Controller;
class IndexSaleController extends CommonController
{		

		  //商品新增的显示界面
	 public function add(){
	 
	     $cat=M('goods');
		 $info=$cat->field('goods_id,goods_no,goods_name,goods_keywords,goods_time,goods_state,goods_original_price,goods_sale_price,goods_sale_desc,goods_num,goods_weight,goods_small_pic,goods_big_pic,goods_desc_pic,goods_attr_value,category_id,concat("-",goods_id) as path')->order('path asc')->select();
		 $i=0;
		 //进行商品分类处理
		 foreach($info as $cat){
		     
		     $path=strlen($cat['path'])==3?0:strlen($cat['path']);
			 $data[$i]['goods_id']=$cat['goods_id'];
			 $data[$i]['goods_name']=$cat['goods_id']=str_repeat('&nbsp;',2*$path).$cat['goods_name'];
			 $i++;
			 
			 
	
		 }
			$this->cat_info=$data;
			 //把商品的属性传到 前台进行处理
			 $attrs=M()->query("SELECT attr_name,avalue_id,avalue_value FROM vmall_attr,vmall_avalue where vmall_attr.attr_id=vmall_avalue.attr_id ");
			 foreach($attrs as $att){
			 
				 $avalue_info[$att['attr_name']][]=array('avalue_id'=>$att['avalue_id'],'avalue_value'=>$att['avalue_value']);
 
			 }
		 $this->avalue_info=$avalue_info;
		 
		 $this->display();
		 

	  }
	  
		public function insert(){
	      /*  $upload = new \Think\Upload();
		   // 实例化上传类    
		   $upload->maxSize=3*1000*1000;
		   // 设置附件上传大小   
		   $upload->exts=array('jpg', 'gif', 'png', 'jpeg');
		   // 设置附件上传类型    
		   $uplaod->autoSub=true;
		   //开启上传的子路经
		   $upload->saveName=array('date','YmdHis');
		   $upload->rootPath="./Upload";
		   //上传路径
		   $upload->savePath  ='./ad/'; 
		   
		   				// 上传单个文件
			$info = $upload->uploadOne($_FILES['index_sale_img']);

		   if(!$info) {
		         // 上传错误提示错误信息  
				  // $this->error("上传图片失败!");
			$this->error($upload->getError());
			}else{
			     // 上传成功 获取上传文件信息   
                 			 
					$data['index_sale_img']=ltrim($info['savepath'],".").$info['savename'];

		    } */
			
			$upload = new \Think\Upload();// 实例化上传类  
     			$upload->maxSize   =     3145728 ;
				// 设置附件上传大小    
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
				// 设置附件上传类型
                 $upload->rootPath="./Upload";				
				$upload->savePath  =      './ad/'; 
				// 设置附件上传目录    // 上传单个文件    
				$info   =   $upload->uploadOne($_FILES['index_sale_img']);    
				if(!$info) {// 上传错误提示错误信息       
				      $this->error($upload->getError());    
				}else{
				   // 上传成功 获取上传文件信息        
				  $data['index_sale_img']=ltrim($info['savepath'],".").$info['savename']; 
			    }
			
			
			
			
			$data['index_sale_area']=I("request.index_sale_area");
			$data['goods_id']=I("request.goods_id");
			$data['index_sale_title']=I("request.index_sale_title");
			$data['index_sale_keywords']=I("request.index_sale_keywords");					

			
			if(M("index_sale")->add($data)){
			     $this->success("新增成功!");
			}else{
			      $this->error("新增失败!");
			}
			
	    }

}