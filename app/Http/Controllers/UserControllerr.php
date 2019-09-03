<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Redis;

class UserControllerr extends Controller
{
	//添加
    public function add()
    {
        $data = [
            'usernmae'=>'admin',
            'email'=> '2768131788@qq.com'
        ];
        $res = User::insertGetId($data);
        var_dump($res);
    }

    public function getRedis()
    {
        $key = 'abc';
        $val = Redis::get($key);
        var_dump($val);
    }
}
