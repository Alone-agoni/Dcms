<?php
namespace Admin\Controller;

use Think\Controller;

class BasicController extends Controller
{
	function _initialize()
	{
		if(session('UID') == null){
			$this->redirect("Login/index");
		}
	}
}