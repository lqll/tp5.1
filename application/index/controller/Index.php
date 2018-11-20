<?php
namespace app\index\controller;

use think\App;
use think\Controller;

class Index extends Controller
{
    public function __construct(App $app = null)
    {
        parent::__construct($app);
        header("Access-Control-Allow-Origin:*");
        header('Access-Control-Allow-Methods:GET, POST, PATCH, PUT, DELETE');
        header('Access-Control-Allow-Headers:Authorization, Content-Type, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-Requested-With');
        header('Access-Control-Allow-Credentials:true');
    }

    public function index()
    {
        sleep(10);
        return json(['data'=>1]);
//        return $this->fetch();
    }
    public function index2()
    {
        return json(['data'=>'接口测试']);
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
