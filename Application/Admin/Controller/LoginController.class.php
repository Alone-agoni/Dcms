<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Verify;

class LoginController extends Controller
{
	function index()
	{
		if(IS_AJAX){
			$response = ajaxResoponse('Login success,welcome back!', 6, 'backend.php');
			$request  = $_POST['params'];
			$request  = json_decode($request);
			$checkVerify = $this->checkVerify($request->verify);
			if($checkVerify == false){
				$response = ajaxResoponse('Verification code error !');
				goto end;
			}
			$where = [
				'name'     => $request->userName,
				'password' => $request->password
			];
			
			$user = D('User')->where($where)->find();
			if($user == null){
				$response = ajaxResoponse('Username or password error!');
			}elseif($user['status'] == 1){
				$response = ajaxResoponse('User status is not correct!');
			}else{
				session('UID', $user['id']);
				session('UNAME', $user['name']);
			}
			end:
			$this->ajaxReturn($response);
		}else{
			$this->display();
		}
	}
	
	function verify()
	{
		$config = [
			'fontSize' => 24,   
			'length'   => 4,    
			'useNoise' => false,
		];
		$Verify = new Verify($config);
		$Verify->codeSet = '123456789';
		$Verify->entry();
	}
	
	function checkVerify($code, $id = '')
	{
		$verify = new Verify();
		return $verify->check($code, $id);
	}
}