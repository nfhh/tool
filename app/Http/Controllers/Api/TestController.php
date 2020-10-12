<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(Request $request)
    {
        file_put_contents('array.txt', '<?php return ' . var_export($request->all(), true) . ';');
        $form_data = $request->all();
        $form_data = $form_data['data'];
        $form_data['mac'] = json_encode($form_data['mac']);
        $form_data['hardware'] = json_encode($form_data['hardware']);
        $form_data['netface'] = json_encode($form_data['netface']);
        $form_data['usb'] = json_encode($form_data['usb']);

        Test::create($form_data);

        return response()->json([
            'code' => 0,
            'message' => '保存成功！',
        ]);
    }
}
