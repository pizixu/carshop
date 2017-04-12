<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends CommonController 
{
    public function lst(){
        $link=D('link');
        $linkres=$link->order('sort asc')->select();
        $this->assign('linkres',$linkres);
        $this->display();
    }

    public function add(){
        $link=D('link');
        if(IS_POST){
            if($link->create()){
                if($link->add()){
                    $this->success('添加链接成功！',U('lst'));
                }else{
                    $this->error('添加链接失败！');
                }
            }else{
                $this->error($link->getError());
            }


            return;
        }
        $this->display();
    }

    public function edit($id){
        $link=D('link');
        if(IS_POST){
            if($link->create()){
                if($link->save()){
                    $this->success('修改链接成功！',U('lst'));
                }else{
                    $this->error('修改链接失败！');
                }
            }else{
                $this->error($link->getError());
            }


            return;
        }
        
        $links=$link->find($id);
        $this->assign('links',$links);
        $this->display();
    }

    public function del()
    {
        $link=D('link');
        $id=I('id');
        if($link->delete($id))
        {
            $this->success('成功删除链接！',U('lst'));
        }else
        {
            $this->error('删除链接失败！');
        }
    }

    public function bdel()
    {
        $link=D('link');
        $ids=I('ids');
        $ids=implode(',', $ids);  //1,2,3,4
        if($ids)
        {
            if($link->delete($ids))
            {
                $this->success('批量删除链接成功！',U('lst'));
            }else
            {
                $this->error('批量删除链接失败！');
            }
        }else
        {
            $this->error('未选中任何内容！');
        }
    }

    public function sortlink()
    {
        $link=D('link');
        foreach ($_POST as $id=>$sort) {
            $link->where("id=$id")->setField('sort',$sort);
        }

        $this->success('成功更新链接顺序！',U('lst'));
    }












}