<?php
namespace Mobile\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function __construct(){
		parent::__construct();
		$cateid=I('cateid');
		$arid=I('arid');
		if($arid){
			$article=D('article');
			$arts=$article->field('cateid')->find($arid);
			$cateid=$arts['cateid'];
		}
		if($cateid){
			$cate=D('cate');
			$cates=$cate->field('name')->find($cateid);
			$catename=$cates['name'];
			$this->assign('catename',$catename);
		}
		$this->nav();

	}

	public function nav(){
		$cate=D('cate');
    	$cateres=$cate->where("pc=0")->order('id asc')->select();
    	$this->assign('cateres',$cateres);
	}
    

}