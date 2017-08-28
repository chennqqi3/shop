<?php
/*
 * 这是（用户信息管理）控制器User
 */
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController{
	
	 //用户更改界面
	public function edit(){
		

		parent::edit();
	}
	
	
	public function update(){
	     //接受数据进行处理
		 
	     $user_id=I('post.user_id');
		 $user_lock=I('post.user_lock');
		 $user_pwd=I('post.user_pwd');
		 //判断跟新什么
		
		 if(!empty($user_pwd)){
		     $user_info=M('User')->where(array('user_id'=>$user_id))->save(array('user_lock'=>$user_lock,'user_pwd'=>md5($user_pwd)));
			 if($user_info){
			     $this->success('更改成功!');
			 }else{
			     $this->error('更新失败');
			 }
		 
		 }else if(empty($user_pwd)){
		      $user_info=M('User')->where(array('user_id'=>$user_id))->save(array('user_lock'=>$user_lock));
			 
			 if($user_info){
			     $this->success('更改成功!');
			 }else{
			     $this->error('更新失败');
			 }
		 }
		 

	
	
	
	}
}