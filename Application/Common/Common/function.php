<?php
function ajaxResoponse($msg, $code = 5, $jump = null)
{
	$response = [
		'code' => $code,
		'msg'  => $msg,
		'jump' => $jump
	];
	return $response;
}

function dd($params, $die = true)
{
	echo "<pre>";
	print_r($params);
	if($die === true) die;
}