<?php
namespace Admin\Model;
use Think\Model;
class LinkModel extends Model
{
	protected $_validate = array(
		array('title','require','链接标题不得为空！',1),  // 都有时间都验证
		array('title','','链接标题不得重复！',1,unique), 
		array('url','require','链接地址不得为空！',1),
		);

	




























}