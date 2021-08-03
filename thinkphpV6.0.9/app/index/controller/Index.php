<?php
namespace  app\index\controller;
use app\BaseController;
use think\facade\View;

/**
 * Created by PhpStorm.
 * User: php
 * Date: 2021/8/3
 * Time: 19:14
 */
class Index  extends  BaseController
{

    public function  index()
    {
        return View::fetch('index/index',['data'=>'世界那么大，我想出去看一看']);
    }
}