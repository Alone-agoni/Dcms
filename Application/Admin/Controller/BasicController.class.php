<?php
namespace Admin\Controller;

use Think\Controller;

class BasicController extends Controller
{
	function _initialize()
	{
		if(session('U_ID') == null){
			$this->redirect("Login/index");
		}
	}
}