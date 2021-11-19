<?php
include_once dirname(__DIR__).'/vendor/autoload.php';


use Zwei\PhpCodeParse\CodeParse;

$vars = [
    'global' => [
        'host' => 'www.xxx.com',
        'contentType' => 'application/json',
        'noChange' => 'oldValue'

    ],
];
$code = <<<'str'
$global['host'] = "www.xxx.com.chang.vars";
$global['contentType'] = "application/json.change.var2";
str;
$parse = new CodeParse();
$parse->setVars($vars);
$parse->execute($code);
var_export($vars);

/**
array (
    'global' =>
        array (
        'host' => 'www.xxx.com',
        'contentType' => 'application/json',
        'noChange' => 'oldValue',
    ),
)
 */