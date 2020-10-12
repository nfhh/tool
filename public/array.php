<?php
$arr = [
    'data' =>
        [
            'systemp' => '39 ℃',
            'cputemp' => '39 ℃',
            'fanspeed' => '839 RPM',
            'cpu' => '1%',
            'sn' => 'T2010DBb8qjgG',
            'product_name' => 'F5422',
            'linux_version' => '4.13.16',
            'bios_version' => 'MAPL0301V10',
            'cpu_name' => 'Intel(R) Celeron(R) CPU J3455 @1.5GHz',
            'mac' =>
                [
                    0 => '6c:bf:b5:00:dc:5b',
                    1 => '6c:bf:b5:00:dc:5c',
                    2 => '6c:bf:b5:00:dc:d0',
                ],
            'mt' => '4096 MB',
            'hardware' =>
                [
                    0 => 'ST6000VN001-2BB186',
                ],
            'netface' =>
                [
                    'eth0' => 'Unknown!',
                    'eth1' => '1000Mb/s',
                    'eth2' => 'Unknown!',
                ],
            'usb' => 'USB Disk 1<br/>7.45 GB',
        ],
];
$form_data = $arr['data'];
$form_data['mac'] = json_encode($form_data['mac']);
$form_data['hardware'] = json_encode($form_data['hardware']);
$form_data['netface'] = json_encode($form_data['netface']);
$form_data['usb'] = json_encode($form_data['netface']);
print_r($form_data);

