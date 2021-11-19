<?php
namespace Zwei\PhpCodeParse\Tests;


use Zwei\PhpCodeParse\CodeParse;

class CodeParseTest extends TestCaseBase
{
    public function testSetVars(){
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
        $this->assertEquals("www.xxx.com.chang.vars", $parse->getVars()['global']['host']);
        $this->assertEquals("application/json.change.var2", $parse->getVars()['global']['contentType']);
        $this->assertEquals('oldValue', $parse->getVars()['global']['noChange']);
    }
}