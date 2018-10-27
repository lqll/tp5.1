<?php
namespace app\index\controller;

use think\Controller;

class Im extends Controller
{

    public function getSocket()
    {
        $arr['res'] = 200;
        $arr['msg'] = "返回了";
        echo  json_encode($arr);
    }
    public function test()
    {
        $ImModel = new \app\index\model\Im();
        var_dump($ImModel->getImId());
    }
}