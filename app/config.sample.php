<?php
// 配置样例：安装向导会自动生成同目录下的 config.php，无需手动改名
return [
    'db' => [
        'type' => 'mysql',        // mysql | sqlite
        'host' => '127.0.0.1',
        'port' => 3306,
        'name' => 'vpnshop',
        'user' => 'vpnshop',
        'pass' => '',
    ],
    'site_key' => '请替换为随机字符串',
    'installed_at' => '2026-01-01 00:00:00',
];
