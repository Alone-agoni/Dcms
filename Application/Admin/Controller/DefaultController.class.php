<?php
namespace Admin\Controller;

use Common\Controller\Helper;

class DefaultController extends BasicController
{
    public function index()
    {
        $this->display();
    }

    public function dashboard()
    {
        $this->info = Helper::systemInfo();
        $this->display();
    }

    public function clearCache()
    {
        $response = Helper::ajaxResponse('Clear cache success!', 6);
        Helper::cc();
        $this->ajaxReturn($response);
    }

    public function userInfo()
    {
        $this->user = D("User")->find(session("U_ID"));
        $this->display();
    }
}