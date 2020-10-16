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
            $table->string('systemp')->default('')->comment('设备温度');
            $table->string('cputemp')->default('')->comment('CPU温度');
            $table->string('fanspeed')->default('')->comment('风扇转速');
            $table->string('cpu')->default('')->comment('CPU使用率');
            $table->string('sn')->default('')->comment('设备SN');
            $table->string('product_name')->default('')->comment('设备型号');
            $table->string('linux_version')->default('')->comment('内核版本');
            $table->string('bios_version')->default('')->comment('BIOS版本');
            $table->string('cpu_name')->default('')->comment('CPU型号');
            $table->string('mac')->comment('MAC地址');
            $table->string('mt')->default('')->comment('内存容量');
            $table->string('hardware')->comment('硬盘型号');
            $table->string('netface')->comment('网络接口');
            $table->string('usb')->comment('外接U盘');
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
