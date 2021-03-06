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
        Test::updateOrCreate(
            ['sn' => $data['sn']],
            [
                'result' => $data['result'],
                'user_id' => auth('api')->id(),
                'finished' => $data['finished'],
            ]
        );
        return response()->json([
            'code' => 0,
            'message' => '保存成功！',
            'data' => null
        ]);
    }
}
