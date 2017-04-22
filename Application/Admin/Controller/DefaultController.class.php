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
}