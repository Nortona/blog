<?php
namespace app\admin\validate;
use think\Validate;

class Admin extends Validate
{
    protected $rule=[
        'username'=>'require|unique:user',
        'sex'=>'require',
        'phone'=>'require',
        'email'=>'email',
    ];
    protected  $message=[
        'username.require'=>'昵称不能为空',
        'username.unique'=>'昵称不能重复',
        'sex.require'=>'性别不能为空',
        'phone.require'=>'电话不能为空',
        'email.email'=>'邮箱格式错误',

    ];
}

