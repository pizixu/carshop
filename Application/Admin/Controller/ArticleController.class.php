<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController 
{
    public function lst()
    {
        $article=D('ArticleView');
        $where=1;
        if($kw=I('kw')){
            $where.=' AND title LIKE "%'.$kw.'%"';
        }
        if($search=I('search-sort')){
            $where.=' AND cateid ='.$search;
        }
        $count=$article->where($where)->count();// 查询满足要求的总记录数
        $Page=new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show= $Page->show();// 分页显示输出
        $list = $article->where($where)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $cate=D('cate');
        $cates=$cate->catetree();
        $this->assign('cates',$cates);
        $this->display();
    }

    public function add()
    {
        $article=D('article');
        if(IS_POST)
       {
            $data['title']=I('title');
            $data['rizu']=I('rizu');
            $data['num']=I('num');
            $data['atype']=I('atype');
            $data['author']=I('author');
            $data['cateid']=I('cateid');
            $data['content']=I('content');
            $data['keywords']=I('keywords');
            $data['des']=I('des');
            $data['rem']=I('rem');
            $data['time']=time();
            if($_FILES['pic']['tmp_name']!='')
            {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath='./';
                // 上传文件 
                $info=$upload->uploadOne($_FILES['pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                 }else{// 上传成功  
                     $data['pic']=$info['savepath'].$info['savename']; 
                     }
            }

            if($article->create($data))
            {
                if($article->add())
                {
                    $this->success('新增文章成功！',U('lst'));
                }else
                {
                    $this->error('新增失败！');
                }

            }else
            {
                $this->error($article->getError());
            }

            return;
        }
        $cate=D('cate');
        $cates=$cate->catetree();
        $this->assign('cates',$cates);
        $this->display();
    }

    public function edit($id)
    {
        $article=D('article');
        if(IS_POST)
       {
            $data['title']=I('title');
            $data['id']=I('id');
            $data['rizu']=I('rizu');
            $data['num']=I('num');
            $data['atype']=I('atype');
            $data['author']=I('author');
            $data['cateid']=I('cateid');
            $data['content']=I('content');
            $data['keywords']=I('keywords');
            $data['des']=I('des');
            $data['rem']=I('rem');
            $data['time']=time();
            if($_FILES['pic']['tmp_name']!='')
            {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath='./';
                // 上传文件 
                $info=$upload->uploadOne($_FILES['pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                 }else{// 上传成功  
                     $data['pic']=$info['savepath'].$info['savename']; 
                     }
            }

            if($article->create($data))
            {
                if($article->save())
                {
                    $this->success('修改文章成功！',U('lst'));
                }else
                {
                    $this->error('修改文章失败！');
                }

            }else
            {
                $this->error($article->getError());
            }

            return;
        }

        $artres=$article->find($id);
        $this->assign('artres',$artres);

        $cate=D('cate');
        $cates=$cate->catetree();
        $this->assign('cates',$cates);
        $this->display();
    }

    public function del($id)
    {
        $article=D('article');
        if($article->delete($id))
        {
            $this->success('删除文章成功！',U('lst'));
        }else
        {
            $this->error('删除文章失败！');
        }
    }

    public function bdel()
    {
        $article=D('article');
        $ids=I('ids');
        $ids=implode(',', $ids);
        if($ids){
            if($article->delete($ids)){
                $this->success('批量删除文章成功！',U('lst'));
            }else{
                $this->error('批量删除文章失败！');
            }
        }else{
            $this->error('未选中任何数据！');
        }
    }













}