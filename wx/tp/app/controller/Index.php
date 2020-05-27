<?php
namespace app\controller;
use Think\Db;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
		$data = Db::name('user')->select();
		dump($data);exit;
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
