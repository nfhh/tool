<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $z_data = $data['postData']['init'];
        $z_data['shell_res'] = $data['postData']['shell_res'];
        $z_data['sn'] = $data['sn'];
        auth('api')->user()->tests()->create($z_data);
        return response()->json([
            'code' => 0,
            'message' => '保存成功！',
        ]);
    }
}
