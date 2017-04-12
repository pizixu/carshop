<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller 
{
    public function index(){
        if(IS_POST){

            $admin=D('admin');
            if($admin->create($_POST,4)){
                if($admin->login()){
                    $this->success('登录中...',U('index/index'));
                }else{
                    $this->error('用户名或密码错误！');
                }
            }else{
                $this->error($admin->getError());
            }
            return;
        }
        $this->display();
    }

    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->length   = 4;
        $Verify->entry();
    }

    











}