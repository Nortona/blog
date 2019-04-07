<?php
namespace app\index\controller;
use think\Controller;

class tags extends Controller
{
    public function index()
    {
        $TagsRes=db::table('bg_archives')->select();
        return view('tags');
    }
}