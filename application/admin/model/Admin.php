<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Admin extends Model
{
    
    public function getadmin()
    {
        return $this::paginate(5,false,[
        'type'=>'boot',
        'var_page' => 'page',
        ]);
   }

    public function login($data)
    {
        $admin=Admin::getByName($data['name']);
        $user=Db::table('bg_admin')->where('name','=',$data['name'])->find();
        if($user){
            if($user['password']==($data['password'])){
                session('id', $admin['id']);
                session('name', $admin['name']);
                return 2;
            }
            else{
                return 3;
            }
        }
        else{
                return 1;
            }   
    }
}