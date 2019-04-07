<?php
namespace app\admin\controller;

use app\admin\controller\Common;

class Article extends Common
{
    public function articlelst()
    {
        $articleRes = db('article')->field('title,id,content,tags,time')->where('dp',1)->paginate(5);
        $this->assign('articleRes',$articleRes);
        return  view();
    }
    public function articlefind()
    {
        $name=input('post.');
        $articleRes=db('article')->where('title','like',$name)->select();
        $this->assign('articleRes',$articleRes);
        return view();
    }
    public function articleadd()
    {
        if(request()->isPost()){
                $data =input('post.');
                $add=db('article')->insert($data);
                if($add){
                    $this->success('添加文章成功！',url('articlelst'));
                }else{
                    $this->error('添加文章失败！');
                }
        }
        return view();
    }
    public function articleedit()
    {
        if(request()->isPost()) {
            $data=input('post.');
            $validate=validate('shop');
            if (!$validate->check($data)){
                $this->error($validate->getError());
            }
            $add=db('article')->updata($data);
            if ($add){
                $this->success('修改成功',url('shopinf'));
            }
            else{
                $this->error('修改失败');
            }
        }
        return view();
    }
    public function articledel($id)
    {
        $res=db('article')->where('id',$id)->update(['dp'=>0]);
        $articleRes = db('article')->field('title,id,content,tags,time')->where('dp=1')->paginate(5);
        $this->assign('articleRes',$articleRes);
        return  view('articlelst');
    }

}
