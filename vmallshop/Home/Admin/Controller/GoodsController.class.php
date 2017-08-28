<?php
 /*
  * 网站后台商品管理
  */
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends CommonController {
   
      //商品新增的显示界面
	 public function add(){
	 
	     $cat=M('Category');
		 $info=$cat->field('category_id,category_name,concat(category_path,"-",category_id) as path')->order('path asc')->select();
		 $i=0;
		 //进行商品分类处理
		 foreach($info as $cat){
		     
		     $path=strlen($cat['path'])==3?0:strlen($cat['path']);
			 $data[$i]['category_id']=$cat['category_id'];
			 $data[$i]['category_name']=$cat['category_id']=str_repeat('&nbsp;',2*$path).$cat['category_name'];
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
	      
	   
	       $upload = new \Think\Upload();
		   // 实例化上传类    
		   $upload->maxSize=3*1000*1000;
		   // 设置附件上传大小   
		   $upload->exts=array('jpg', 'gif', 'png', 'jpeg');
		   // 设置附件上传类型    
		   $uplaod->autoSub=true;
		   //开启上传的子路经
		   $upload->subName=array('date','YmdHis');
		   $upload->rootPath="./Upload";
		   //上传路径
		   $upload->savePath ='./goods/'; 
		   $info = $upload->upload();
		   if(!$info) {
		         // 上传错误提示错误信息  
			  $this->error($upload->getError());
			}else{
			     // 上传成功 获取上传文件信息   
                	 
			      $_POST['goods_big_pic']=ltrim($info['goods_img']['savepath'],'.').$info['goods_img']['savename'];
				   //调用生成缩略图
				
				  $img_thumb=$this->makePic(ltrim($info['goods_img']['savepath'],'.'),$info['goods_img']['savename']);
				   //保存
				  $_POST['goods_small_pic']=$img_thumb['goods_small_pic'];
				  $_POST['goods_tiny_pic']=$img_thumb['goods_tiny_pic'];
				  $_POST['goods_desc_pic']=$img_thumb['goods_desc_pic'];
		    }
			
			
	
			
			
			
			
			
			
		      // 生成商品的编号 有时间和随机数生成
			  $goods_no=date("Ymd").mt_rand(100,999);
			  $_POST['goods_no']=$goods_no;
			
		    //获取商品的属性进行组合处理插入数据库
			$goods_attr=I("post.goods_attr");
			if(empty($goods_attr)){
			  
			      $this->error("请选择商品的属性!");
				  return;
			}
			
			$_POST['goods_attr_value']=implode(',',$goods_attr);
			//对上传的时间进行处理
			
			$_POST['goods_time']=strtotime(I('post.goods_time'));
			// dump($_POST);
			//调用父类的insert方法
			
			$m=M("Goods");
			
			
	        parent::insert();
	  
	  }
	  
	 public function edit(){
	     $cat=M('Category');
		 $info=$cat->field('category_id,category_name,concat(category_path,"-",category_id) as path')->order('path asc')->select();
		 $i=0;
		 //进行商品分类处理
		 foreach($info as $cat){
		     
		     $path=strlen($cat['path'])==3?0:strlen($cat['path']);
			 $data[$i]['category_id']=$cat['category_id'];
			 $data[$i]['category_name']=$cat['category_id']=str_repeat('&nbsp;',2*$path).$cat['category_name'];
			 $i++;
		 }
		 $this->cat_info=$data;
	 
	     
	    
	   
	     //调用父类
	     parent::edit();
	 }
	  //重写更新方法
	 public function update(){
	     
		if($_FILES['goods_img']['name']){
		   $upload = new \Think\Upload();
		   // 实例化上传类    
		   $upload->maxSize=3*1000*1000;
		   // 设置附件上传大小   
		   $upload->exts=array('jpg', 'gif', 'png', 'jpeg');
		   // 设置附件上传类型    
		   $uplaod->autoSub=true;
		   //开启上传的子路经
		   $upload->subName=array('date','YmdHis');
		   $upload->rootPath="./Upload";
		   //上传路径
		   $upload->savePath ='./goods/'; 
		   $info = $upload->upload();
		   if(!$info) {
		         // 上传错误提示错误信息  
			  $this->error($upload->getError());
			}else{
			     // 上传成功 获取上传文件信息   
                	 
			      $_POST['goods_big_pic']=ltrim($info['goods_img']['savepath'],'.').$info['goods_img']['savename'];
				   //调用生成缩略图
				
				  $img_thumb=$this->makePic(ltrim($info['goods_img']['savepath'],'.'),$info['goods_img']['savename']);
				   //保存
				  $_POST['goods_small_pic']=$img_thumb['goods_small_pic'];
				  $_POST['goods_tiny_pic']=$img_thumb['goods_tiny_pic'];
				  $_POST['goods_desc_pic']=$img_thumb['goods_desc_pic'];
		    }
		}
	     
	         
	      //调用父类
	      parent::update();
	 
	 
	 }
	 
	      //生成缩略图处理
	 public function  makePic($path,$img){
	     //获取图片的地址
	     $imgPath="./Upload".$path.$img;
		 //获取图片的保存的路径
		 $paths="./Upload".$path;
		 
		 //保存图片的地址
		 $thumb_img=array();
	      //实例化图片处理类 进行图片处理
	     $image = new \Think\Image();
		   //打开文件
		  $image->open($imgPath);
		  $type =strrchr($imgPath,"."); 
		 
		  
		  //生成缩略图
		  
		 
		 
		  
		     //列表展示图 428*428
		  
		  $small_unique=uniqid("428_428_").$type;
		 
		  $image->thumb(428,428)->save($paths.$small_unique);
		   //添加到数组返回
		  $thumb_img['goods_small_pic']=$path.$small_unique;
		  
		  
		    
		   //列表展示图 142*142
		  
		  $desc_unique=uniqid("142_142_").$type;
		  $image->thumb(142,142)->save($paths.$desc_unique);
		   //添加到数组返回
		  $thumb_img['goods_desc_pic']=$path.$desc_unique;
		  
		  
		   // 小图
		  $tiny_unique=uniqid("60_60_").$type;
		  
		  $image->thumb(60,60)->save($paths.$tiny_unique);
		    //添加到数组返回
		  $thumb_img['goods_tiny_pic']=$path.$tiny_unique;
		 
	     return $thumb_img;
	 }
    
}