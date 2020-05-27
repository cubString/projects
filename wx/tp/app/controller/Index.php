<?php
namespace app\controller;
use think\facade\Db;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
		// $data = Db::name('user')->select();
		// app('Db')::table('s_user')->select();
		Db::table('s_user')->select();
		dump($data);exit;
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
