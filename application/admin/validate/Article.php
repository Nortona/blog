<?php
namespace app\admin\validate;
use think\Validate;


class Article extends Validate
{

    protected $rule = [
        'name' => 'require',
        'sex' => 'require',
        'phone' => 'require|unique:user',
        'idnumber' => 'require|unique:user',
    ];
    protected $message = [
        'name.require' => '昵称不能为空',
        'sex.require' => '性别不能为空',
        'phone.require' => '电话不能为空',
        'idnumber.require' => '身份证号不能为空',
    ];

}
class Shop extends Validate
{

    protected $rule = [
        'name' => 'require',
        'sex' => 'require',
        'phone' => 'require|unique:user',
        'idnumber' => 'require|unique:user',
    ];
    protected $message = [
        'name.require' => '昵称不能为空',
        'sex.require' => '性别不能为空',
        'phone.require' => '电话不能为空',
        'idnumber.require' => '身份证号不能为空',
    ];

}