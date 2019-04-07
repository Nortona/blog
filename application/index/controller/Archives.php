<?php
namespace app\index\controller;

use think\Controller;


class Archives extends Controller
{
    public function index()
    {
        $archiveRes=Db::table('bg_article')->select();
        $this->assign('archiveRes',$archiveRes);        
        return view('archives');
    }
}
