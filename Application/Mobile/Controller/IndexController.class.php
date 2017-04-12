<?php
namespace Mobile\Controller;
use Think\Controller;
class IndexController extends CommonController {
    	public function index(){
    	$article=D('article');
    	$cares=$article->field('id,title,rizu,pic')->order('id desc')->where("cateid=93")->limit(4)->select();
    	$yhres=$article->field('id,title,des,pic,time')->order('id desc')->where("cateid=92")->limit(3)->select();
    	$byres=$article->field('id,title,time')->order('id desc')->where("cateid=94")->limit(4)->select();
    	$msg=D('message');
    	$msgres=$msg->order('id desc')->where("type=0")->limit(5)->select();
    	$this->assign('cares',$cares);
    	$this->assign('msgres',$msgres);
    	$this->assign('yhres',$yhres);
    	$this->assign('byres',$byres);
        $this->display();
    }


}