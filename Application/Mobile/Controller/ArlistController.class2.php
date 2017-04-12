<?php
namespace Mobile\Controller;
use Think\Controller;
class ArlistController extends CommonController {
    public function index(){
    	
        $this->display();
    }

    public function getlist($p,$cateid){
    	$perpage=5;
    	$offset=($p-1)*$perpage;
    	$sql="SELECT * FROM cs_article WHERE cateid=$cateid LIMIT $offset,$perpage";
    	$article=D('article');
    	$data=$article->query($sql);
    	echo json_encode($data);
    }

    
}