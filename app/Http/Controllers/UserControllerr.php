<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class UserControllerr extends Controller
{
    public function add()
    {
        $data = [
            'usernmae'=>'admin',
            'email'=> '2768131788@qq.com'
        ];
        $res = User::insertGetId($data);
        var_dump($res);
    }
}
