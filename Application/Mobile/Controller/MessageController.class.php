<?php
namespace Mobile\Controller;
use Think\Controller;
class MessageController extends CommonController {
    public function index(){
    	
        $this->display();
    }

    public function getlist($p,$cateid){
        $perpage=1;
        $offset=($p-1)*$perpage;
        $sql1="SELECT * FROM cs_message WHERE  checked=1 AND type=0 LIMIT $offset,$perpage";
        $sql2="SELECT * FROM cs_reply";
        $msg=D('message');
        $data['msg']=$msg->query($sql1);
        $data['reply']=$msg->query($sql2);
        foreach ($data['msg'] as $k => $v) {
            $msges.=<<<HTMLSTR
            <li>
<div>游客留言：</div>
<div>{$v['content']}</div>
HTMLSTR;
        foreach ($data['reply'] as $k1 => $v1) {
                if($v1['mid']==$v['id']){
                    $msges.=<<<HTMLSTR
                    <h2 class="common_color">管理回复：{$v1['content']}</h2>
HTMLSTR;
                }
        
        }
$msges.=<<<HTMLSTR
</li>
HTMLSTR;
        }
        echo json_encode($msges);
    }

    public function addmsg(){
        $msg=D('message');
        if(IS_POST){
            $data['nickname']=I('nickname');
            $data['content']=I('content');
            $data['time']=time;
            if($msg->create()){
                if($msg->add()){
                    $this->success('发布留言成功！');
                }else{
                    $this->error('留言失败！');
                }
            }else{
                $this->error($msg->getError());
            }
            return;
        }
    	$this->display();
    }

    public function verify(){
    	$Verify = new \Think\Verify();
    	$Verify->length   = 4;
    	$Verify->fontSize = 30;
    	$Verify->entry();
    }

}