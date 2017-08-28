<?php
/*
*网站后台的主文件主要调入DWZ框架
*
*/
namespace Admin\Controller;
use Think\Controller;
class AdController extends CommonController
{
		public function insert(){
	       $upload = new \Think\Upload();
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
			$this->error($upload->getError());
			}else{
			     // 上传成功 获取上传文件信息   
                 			 
					$_POST['index_sale_img']=ltrim($info['savepath'],".").$info['savename'];
					
		    }
			//调用父类的insert方法
	        parent::insert();

	    }
	
}