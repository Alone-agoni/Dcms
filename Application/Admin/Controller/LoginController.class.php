<?php
namespace Admin\Controller;

use Think\Controller;
use Common\Controller\Helper;

class LoginController extends Controller
{
    public function index()
    {
        if (IS_AJAX) {
            $response    = Helper::ajaxResponse("Login success,welcome back!", 6, "/backend.php");
            $request     = Helper::ajaxParams();
            $checkVerify = Helper::verifyCheck($request->verify);
            if ($checkVerify == false) {
                $response = Helper::ajaxResponse("Verification code error !");
                goto end;
            }
            $where = [
                "name"     => $request->userName,
                "password" => $request->password
            ];

            $user = D("User")->where($where)->find();
            if ($user == null) {
                $response = Helper::ajaxResponse("Username or password error!");
            } elseif ($user["status"] == C("STATUS_FALSE")) {
                $response = Helper::ajaxResponse("User status is not correct!");
            } else {
                Helper::sessionLog($user);
                $user = [
                    'id'           => $user['id'],
                    'login_time'   => date("Y-m-d H:i:s"),
                    'login_ip'     => get_client_ip(),
                    'login_number' => ++$user['login_number']
                ];
                D("User")->saveData($user);
            }
            end:
            $this->ajaxReturn($response);
        } else {
            $this->display();
        }
    }

    public function logout()
    {
        Helper::sessionLog();
        $this->redirect("Login/index");
    }

    public function verify()
    {
        Helper::verify();
    }
}