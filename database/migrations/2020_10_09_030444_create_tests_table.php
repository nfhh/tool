<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('nas_temp')->default('')->comment('设备温度');
            $table->string('cpu_temp')->default('')->comment('CPU温度');
            $table->string('fan_speed')->default('')->comment('风扇转速');
            $table->string('cpu_used')->default('')->comment('CPU使用率');
            $table->string('sn')->default('')->comment('设备SN');
            $table->string('model')->default('')->comment('设备型号');
            $table->string('kernel_version')->default('')->comment('内核版本');
            $table->string('bios_version')->default('')->comment('BIOS版本');
            $table->string('cpu')->default('')->comment('CPU型号');
            $table->string('mac')->default('')->comment('MAC地址');
            $table->string('ram')->default('')->comment('内存容量');
            $table->string('disk')->default('')->comment('硬盘型号');
            $table->string('net')->default('')->comment('网络接口');
            $table->string('u_disk')->default('')->comment('外接U盘');
            $table->string('shell_res')->default('')->comment('脚本测试结果');
            $table->string('user_id')->default(0)->comment('测试人');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
