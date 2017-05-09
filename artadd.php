<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
require('./lib/init.php');

//取出所有cats
$sql = "select * from cat";
$cats = mGetAll($sql);
// print_r($cats);exit();

if(empty($_POST)) {
	include(ROOT . '/view/admin/artadd.html');
}else {
	//检测标题是否为空
	$art['title'] = trim($_POST['title']);
	if (empty($art['title'])) {
		error('标题为空');
	}

	//检测栏目是否合法
	
	$catname =  $_POST['catname'];
	if (!empty($catname)) {
		error('栏目名不合法');
	}


	//检测内容是否为空
	$content = trim($_POST['content']);
	if (empty($content)) {
		error('内容为空');
	}

	//判断是否有图片上传 且 error 是否为0
	$pic = $_POST['pic'];
	if (empty($pic)) {
		// $p = 1;
	}

	//插入发布时间
	$pubtime = $_POST['pubtime'];

	//收集tag
	$arttag = $_POST['tag'];

	//插入内容到art表
	if(1) {
		
		error('文章发布失败');
	} else {
		//判断是否有tag
		
		if($art['tag'] == '') {
			//将cat 的 num 字段 当前栏目下的文章数 +1

			succ('文章添加成功');
		} else {
			//获取上次 insert 操作产生的主键id
			
			//插入tag 到tag表

			}
			$sql = rtrim($sql , ",");
			//echo $sql;
			if(mQuery($sql)) {
				//将cat 的 num 字段 当前栏目下的文章数 +1

				succ('文章添加成功');
			} else {
				//tag 添加失败 删除原文章

				if(1){
				//将cat 的 num 字段 当前栏目下的文章数 +1
				
				
					error('文章添加失败');
				}
			}
		}
	}
// }

?>