<?php

use Zwei\PhpCodeParse\StringParse;

include_once dirname(__DIR__).'/vendor/autoload.php';

$vars = [
    'companyName' => "中国银行",
    'code' => 888888,
];
$msg = '【{$companyName}】您正在找回登录密码，验证码:{$code}，如非本人操作，请注意账号安全。';
$parse = new StringParse();
$parse->setVars($vars);
$msg = $parse->execute($msg);
// string(112) "【中国银行】您正在找回登录密码，验证码:888888，如非本人操作，请注意账号安全。"
var_dump($msg);
