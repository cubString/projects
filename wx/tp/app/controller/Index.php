<?php
namespace app\controller;
use think\facade\Db;
use think\facade\View;

use app\BaseController;

class Index extends BaseController
{
    public function index() 
    {
		$data = Db::table('s_user')->select();
		
		 // 模板变量赋值
		View::assign('name','ThinkPHP');
		// 模板输出
        return View::fetch('index');
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
