<?php
namespace Common\Controller;

class Helper
{
	public static function dd($params, $die = true)
	{
		echo "<pre>";
		print_r($params);
		if($die === true) die;
	}
}