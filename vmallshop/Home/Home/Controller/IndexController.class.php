<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

		//广告类商品
		//广告a区
		$Ad = M('ad');
		$Adlist = $Ad->where("index_sale_area='a'")->select();
		$this->a=$Adlist;
		

		//广告b区
		$Ad = M('ad');
		$Adlist = $Ad->where("index_sale_area='b'")->select();
		$this->b=$Adlist;

		//广告c区
		$Ad = M('ad');
		$Adlist = $Ad->where("index_sale_area='c'")->select();
		$this->c=$Adlist;

		
		
		
		
		//热门类商品
		$Sale = M('IndexSale');
		$Hotlist = $Sale->join('__GOODS__ ON vmall_index_sale.goods_id=__GOODS__.goods_id')->where("index_sale_area='hot'")->select();
		
		$this->hot=$Hotlist;

		
		
		
	  //手机类商品 
		$Index = M('IndexSale');

		$Phonelist = $Index->join('__GOODS__ ON vmall_index_sale.goods_id=__GOODS__.goods_id')->where("index_sale_area='phone'")->select();

		$this->phone=$Phonelist;

		
		
	  //电脑类商品
	    $Index = M('IndexSale');

		$Comptlist = $Index->join('__GOODS__ ON vmall_index_sale.goods_id=__GOODS__.goods_id')->where("index_sale_area='phone'")->where("index_sale_area='compt'")->select();
		
		$this->compt=$Comptlist;


		
		
		
		//友情链接
		$Index = M('link');

		$Linklist = $Index->select();

		$this->links=$Linklist;

		$this->display();
		
	  
	  
	}
}