<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 2019/1/22
 * Time: 16:30
 */
namespace app\index\Article;
use think\model;

class search{
    public function index(){
        $name=input('post.');
        $artFind=db('coupon')->where('name','like',$name)->select();
        $this->assign('artFind',$artFind);
        return view('search');

    }

}