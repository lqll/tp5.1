<?php
namespace app\index\controller;

use think\Controller;

class Im extends Controller
{

    public function getSocket()
    {
        return "adefs";
    }
    public function test()
    {
        $ImModel = new \app\index\model\Im();
        var_dump($ImModel->getImId());
    }
}