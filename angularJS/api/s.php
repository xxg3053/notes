<?php
$a = isset($_GET['action'])?$_GET['action']:'';
switch ($a) {
	case 'get':
		echo "来自http请求";
		break;
	case 'post':
		$id = isset($_GET['id'])?$_GET['id']:'';
		$data = isset($_POST['text'])?$_POST['text']:'';
		echo "参数".$id."数据".$data;
		break;
	default:
		# code...
		break;
}
	

