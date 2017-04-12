<?php
namespace Mobile\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function index(){
    	$arid=I('arid');
    	$article=D('article');
    	$arts=$article->find($arid);
    	$this->assign('arts',$arts);
    	//上一页
    	$front=$article->where("id<".$arid)->order('id desc')->limit('1')->find();
    	if($front){
    		$furl=__CONTROLLER__.'/index/arid/'.$front['id'];
    		$fname=$front['title'];
    	}else{
    		$furl="javascript:void(0);";
    		$fname='没有了';
    	}
    	//下一页
    	$after=$article->where("id>".$arid)->order('id asc')->limit('1')->find();
    	if($after){
    		$aurl=__CONTROLLER__.'/index/arid/'.$after['id'];
    		$aname=$after['title'];
    	}else{
    		$aurl="javascript:void(0);";
    		$aname='没有了';
    	}
    	$this->assign('aurl',$aurl);
    	$this->assign('furl',$furl);
    	$this->assign('aname',$aname);
    	$this->assign('fname',$fname);
        $this->display();
    }
}