<?php
namespace Home\Controller;
use Think\Controller;
class JobController extends CommonController {
    public function index(){
        if(IS_POST){
            $job=D('job');
            if($job->create()){
                if($job->add()){
                    $this->success('求职信息提交成功！');
                }else{
                    $this->error('求职信息提交失败！');
                }
            }else{
                $this->error($job->getError());
            }

            return;
        }
        $arid=I('arid');
        $article=D('article');
        $articles=$article->field('title')->find($arid);
        $this->assign('title',$articles['title']);
        $this->display();
    }

    public function code(){
        $Verify = new \Think\Verify();
        $Verify->length   = 4;
        $Verify->entry();
    }

}