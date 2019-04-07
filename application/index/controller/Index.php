<?php
namespace app\index\controller;
use think\Controller;
use think\Db;


class Index extends Controller
{
    public function index()
    {
        $articleRes=Db::table('bg_article')->select();
        $this->assign('articleRes',$articleRes);
        return view('index');
    }
}
