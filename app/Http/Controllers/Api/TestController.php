<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $sn = $data['sn'];
        if(Test::where('sn',$sn)->first()){
            return response()->json([
                'code' => -1,
                'message' => 'sn重复！',
            ]);
        }
        $z_data = $data['postData']['init'];
        $z_data['shell_res'] = $data['postData']['shell_res'];
        $z_data['sn'] = $sn;
        auth('api')->user()->tests()->create($z_data);
        return response()->json([
            'code' => 0,
            'message' => '保存成功！',
        ]);
    }
}
