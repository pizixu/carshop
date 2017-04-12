<?php
namespace Mobile\Controller;
use Think\Controller;
class PageController extends CommonController {
    public function index(){
    	$cateid=I('cateid');
    	$cate=D('cate');
    	$cates=$cate->field('content')->find($cateid);
    	$catecont=$cates['content'];
    	$this->assign('catecont',$catecont);
        $this->display();
    }
}