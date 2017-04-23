<?php
namespace Admin\Controller;

use Common\Controller\Helper;

class DefaultController extends BasicController
{
    function index()
    {
        $this->display();
    }

    function dashboard()
    {
        $this->info = Helper::systemInfo();
        $this->display();
    }

    public function clearCache()
    {
        $response = Helper::ajaxResponse('Clear cache success!',6);
        Helper::cc();
        $this->ajaxReturn($response);
    }
}