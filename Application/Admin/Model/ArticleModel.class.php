<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model
{
	protected $_validate = array(
		array('title','require','文章标题不得为空！',1),  // 都有时间都验证
		array('title','','文章标题不得重复！',1,unique,1), 
		);

	




























}