<?php
namespace Common\Controller;

use Think\Verify;

class Helper
{
    public static function ajaxParams()
    {
        $request = $_POST["params"];
        $request = json_decode($request);
        return $request;
    }

    public static function ajaxResponse($msg, $code = 5, $jump = null)
    {
        $response = [
            'code' => $code,
            'msg'  => $msg,
            'jump' => $jump
        ];
        return $response;
    }

    public static function dd($params, $die = true)
    {
        echo "<pre>";
        print_r($params);
        if ($die === true) die;
    }

    public static function verify()
    {
        $config          = [
            'fontSize' => 24,
            'length'   => 4,
            'useNoise' => false,
        ];
        $Verify          = new Verify($config);
        $Verify->codeSet = '123456789';
        $Verify->entry();
    }

    public static function verifyCheck($code, $id = '')
    {
        $verify = new Verify();
        return $verify->check($code, $id);
    }

    public static function sessionLog($params = array())
    {
        if (!empty($params)) {
            session("U_ID", $params["id"]);
            session("U_NAME", $params["name"]);
            session("LAST_LOGIN", $params["login_time"]);
            session("LOGIN_NUMBER", ++$params["login_number"]);
            session("LOGIN_IP", $params["login_ip"]);
        } else {
            session("U_ID", null);
            session("U_NAME", null);
            session("LAST_LOGIN", null);
            session("LOGIN_NUMBER", null);
            session("LOGIN_IP", null);
            session_destroy();
        }
    }

    public static function systemInfo()
    {
        $info = array(
            'operating_system'     => PHP_OS,    // 操作系统
            'runtime_environment'  => $_SERVER["SERVER_SOFTWARE"],    // 运行环境
            'operation_mode'       => php_sapi_name(),    // PHP运行方式
            'thinkphp_version'     => THINK_VERSION . ' [ <a href="http://thinkphp.cn" target="_blank">查看最新版本</a> ]',    // ThinkPHP版本
            'upload_limit'         => ini_get('upload_max_filesize'),    //上传附件限制
            'execution_time_limit' => ini_get('max_execution_time') . '秒',    // 执行时间限制
            'server_time'          => date("Y年n月j日 H:i:s"),    // 服务器时间
            'beijing_time'         => gmdate("Y年n月j日 H:i:s", time() + 8 * 3600),    // 北京时间
            'server_domain_name'   => $_SERVER['SERVER_NAME'] . ' [ ' . gethostbyname($_SERVER['SERVER_NAME']) . ' ]',    // 服务器域名/IP
            'free_space'           => round((@disk_free_space(".") / (1024 * 1024)), 2) . 'M',    // 剩余空间
            'register_globals'     => get_cfg_var("register_globals") == "1" ? "ON" : "OFF",    // 注册为全局变量
            'magic_quotes_gpc'     => (1 === get_magic_quotes_gpc()) ? 'YES' : 'NO',    // 是否转义特殊字符(作用GET、POST 和 COOKIE获得的数据)
            'magic_quotes_runtime' => (1 === get_magic_quotes_runtime()) ? 'YES' : 'NO',    // 是否转义特殊字符(作用文件中读取的数据或从数据库查询得到的数据)
            'developer'            => "[Alone-agoni] Wei.Ding"
        );
        return $info;
    }
}