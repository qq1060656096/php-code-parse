# php-code-parse
PHP Code Parse
> PHP 代码解析，为了方便内部项目使用，直接使用 PHP 变量和代码有安全问题，请慎用。

# 短信模板变量替换
```php
<?php
include_once dirname(__DIR__).'/vendor/autoload.php';

use Zwei\PhpCodeParse\StringParse;

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

```