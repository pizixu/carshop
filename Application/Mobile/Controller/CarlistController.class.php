<?php
namespace Mobile\Controller;
use Think\Controller;
class CarlistController extends CommonController {
    public function index(){
    	$cateid=I('cateid');
    	$article=D('article');
        $count=$article->where($where)->count();// 查询满足要求的总记录数
    	$this->assign('count',$count);
        $this->display();
    }

    public function getlist($p,$cateid){
    	$perpage=2;
    	$offset=($p-1)*$perpage;
    	$sql="SELECT * FROM cs_article WHERE cateid=$cateid LIMIT $offset,$perpage";
    	$article=D('article');
    	$data=$article->query($sql);
    	echo json_encode($data);
    }


}