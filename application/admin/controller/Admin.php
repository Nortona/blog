<?php
namespace app\admin\controller;
use app\admin\model\Admin as AdminModel;
use app\admin\controller\Common;
class Admin extends Common
{
    public function adminlst()
    {
        $admin=new AdminModel();
        $adminRes=$admin->getadmin();
        $this->assign('adminRes',$adminRes);
        return view();
    }
    public function logout(){
        session(null); 
        $this->success('退出系统成功！',url('login/index'));
    }
}