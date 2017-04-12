<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class ArticleViewModel extends ViewModel
{
	public $viewFields = array(
		'article'=>array('id','title','rem','pic','_type'=>'LEFT'),
		'cate'=>array('name','_on'=>'article.cateid=cate.id')
		);
	




























}