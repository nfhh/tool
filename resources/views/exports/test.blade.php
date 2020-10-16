<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">序号</th>
            <th scope="col">设备SN</th>
            <th scope="col">设备型号</th>
            <th scope="col">内核版本</th>
            <th scope="col">BIOS版本</th>
            <th scope="col">CPU型号</th>
            <th scope="col">CPU温度</th>
            <th scope="col">CPU使用率</th>
            <th scope="col">MAC地址</th>
            <th scope="col">风扇转速</th>
            <th scope="col">内存容量</th>
            <th scope="col">设备温度</th>
            <th scope="col">硬盘型号</th>
            <th scope="col">外接U盘</th>
            <th scope="col">网络接口</th>
            <th scope="col">添加时间</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tests as $test)
            <tr>
                <th scope="row">{{ $test->id }}</th>
                <td>{{ $test->sn }}</td>
                <td>{{ $test->product_name }}</td>
                <td>{{ $test->linux_version }}</td>
                <td>{{ $test->bios_version }}</td>
                <td>{{ $test->cpu_name }}</td>
                <td>{{ $test->cputemp }}</td>
                <td>{{ $test->cpu }}</td>
                <td>{!! implode('<br/>', json_decode($test->mac,true)) !!}</td>
                <td>{{ $test->fanspeed }}</td>
                <td>{{ $test->mt }}</td>
                <td>{{ $test->systemp }}</td>
                <td>
                    @foreach(json_decode($test->hardware,true) as $it)
                        {{ $it }} <br/>
                    @endforeach
                </td>
                <td>
                    @foreach(json_decode($test->usb,true) as $it)
                        {{ $it }} <br/>
                    @endforeach
                </td>
                <td>
                    @foreach(json_decode($test->netface,true) as $k=>$v)
                        {{ $k }} : {{ $v }} <br/>
                    @endforeach
                </td>
                <td>{{ $test->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
