<?php
namespace Mobile\Controller;
use Think\Controller;
class SearchController extends CommonController {
    public function index(){
    	$article=D('article');
        $where=1;
        if($kw=I('kws')){
            $where.=' AND title LIKE "%'.$kw.'%"';
            $where.=' AND cateid =93';
        }
        $count=$article->where($where)->count();// 查询满足要求的总记录数
    	$this->assign('count',$count);
        $this->display();
    }

    public function getlist($p,$kws){
    	$perpage=2;
    	$offset=($p-1)*$perpage;
    	$sql="SELECT * FROM cs_article WHERE title LIKE '%$kws%' AND cateid=93 LIMIT $offset,$perpage";
    	$article=D('article');
    	$data=$article->query($sql);
    	echo json_encode($data);
    }


}