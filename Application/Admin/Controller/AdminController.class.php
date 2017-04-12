<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommonController 
{
    public function lst(){
       $admin=D('admin');
        $where=1;
        if($kw=I('kw')){
            $where.=' AND username LIKE "%'.$kw.'%"';
        }
        $count=$admin->where($where)->count();// 查询满足要求的总记录数
        $Page=new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show= $Page->show();// 分页显示输出
        $list = $admin->field('a.id,a.username,b.rolename')->alias('a')->join('LEFT JOIN cs_role b ON a.roleid=b.id')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }

    public function add(){
        if(IS_POST){
            $admin=D('admin');
            if($admin->create()){
                $admin->password=md5($admin->password);
                if($admin->add()){
                    $this->success('添加管理员成功！',U('lst'));
                }else{
                    $this->error('添加管理员失败');
                }
            }else{
                $this->error($admin->getError());
            }

            return;
        }
        $role=D('role');
        $roles=$role->select();
        $this->assign('roles',$roles);
        $this->display();
    }

    public function edit(){
        $admin=D('admin');
        if(IS_POST){
            if($admin->create()){
                $admin->password=md5($admin->password);
                if($admin->save()){
                    $this->success('修改管理员成功！',U('lst'));
                }else{
                    $this->error('修改管理员失败');
                }
            }else{
                $this->error($admin->getError());
            }

            return;
        }
        $id=I('id');
        $adminres=$admin->find($id);
        $this->assign('adminres',$adminres);
         $role=D('role');
        $roles=$role->select();
        $this->assign('roles',$roles);
        $this->display();
    }

    public function del(){
        $id=I('id');
        $admin=D('admin');
        if($id==1){
            $this->error('超级管理员无法删除！');
        }
        if($admin->delete($id)){
            $this->success('删除管理员成功！',U('lst'));
        }else{
            $this->error('删除管理员失败！');
        }
    }
   
   public function bdel(){
    $ids=I('ids');
    $admin=D('admin');
    $ids=implode(',', $ids);
    if($admin->delete($ids)){
        $this->success('批量删除管理员成功！',U('lst'));
    }else{
        $this->error('批量删除管理员失败！');
    }
   }

   public function logout(){
    session(null);
    $this->success('退出成功！',U('Login/index'));
   }




}