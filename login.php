
<?php
	header("Content-type: text/html; charset=utf-8"); 
	$username=$_POST['username'];//提交过来的数据，如chen-chen
	$password=$_POST['password'];
	/*$username="username";
	$password="password";*/
	$data=file_get_contents("user_list.json");
	//转成JSON字符串
    $jsons=json_decode($data);
	foreach ($jsons as $k => $v) {
		if($v->username==$username&&$v->password==$password){
			$result='{"status":"1","info":"登录成功","data":""}';
			break;
		}else{
			$result='{"status":"0","info":"登录失败，请重试","data":""}';
		}
	}
	echo $result;
?>